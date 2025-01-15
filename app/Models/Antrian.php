<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Antrian extends Model
{
    use HasFactory;

    protected $fillable = ['nomor_antrian', 'nama_pasien', 'jenis_layanan', 'nama_dokter', 'rumah_sakit'];
}
