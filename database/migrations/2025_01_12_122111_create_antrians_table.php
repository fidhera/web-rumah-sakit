<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('antrians', function (Blueprint $table) {
            $table->id();
            $table->integer('nomor_antrian')->unique();
            $table->string('nama_pasien');
            $table->string('jenis_layanan');
            $table->string('nama_dokter')->nullable();
            $table->string('rumah_sakit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('antrians');
    }
};
