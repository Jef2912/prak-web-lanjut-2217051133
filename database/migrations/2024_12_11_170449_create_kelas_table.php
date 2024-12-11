<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Membuat tabel 'kelas'
        Schema::create('kelas', function (Blueprint $table) {
            $table->id(); // Kolom id
            $table->string('nama_kelas'); // Kolom nama_kelas
            $table->timestamps(); // Kolom timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Menghapus tabel 'kelas' jika ada
        Schema::dropIfExists('kelas');
    }
}