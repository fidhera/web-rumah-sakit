<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use Illuminate\Http\Request;

class AntrianController extends Controller
{
    // Menampilkan halaman antrian (index)
    public function index()
    {
        $antrians = Antrian::all(); // Ambil semua data antrian
        return view('antrian.index', compact('antrians'));
    }

    // Menyimpan antrian baru
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'nama_pasien' => 'required|string|max:255',
        'jenis_layanan' => 'required|string',
        'nama_dokter' => 'nullable|string',
        'rumah_sakit' => 'required|string|max:255',
    ]);

    // Tambahkan nomor antrian secara otomatis
    $validatedData['nomor_antrian'] = Antrian::max('nomor_antrian') + 1;

    // Simpan data ke database
    Antrian::create($validatedData);

    // Redirect dengan pesan sukses dan link untuk cek antrian
    return redirect()->back()->with('success', 'Antrian berhasil ditambahkan. Cek antrian anda <a href="' . route('antrian.index') . '" class="text-blue-600 hover:underline">di sini</a>.');
}



    // Menghapus antrian
    public function destroy($id)
    {
        $antrian = Antrian::findOrFail($id);
        $antrian->delete();

        return redirect()->back()->with('success', 'Antrian berhasil dihapus.');
    }
}
