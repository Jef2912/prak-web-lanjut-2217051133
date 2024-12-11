<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Membuat tabel 'user'
        Schema::create('user', function (Blueprint $table) {
            $table->id(); // Kolom id
            $table->string('nama'); // Kolom nama
            $table->string('npm'); // Kolom npm
            $table->unsignedBigInteger('kelas_id'); // Kolom kelas_id (foreign key)

            // Tambahkan foreign key constraint ke kolom 'kelas_id'
            $table->foreign('kelas_id')->references('id')->on('kelas')->onDelete('cascade');

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
        // Menghapus tabel 'user' jika ada
        Schema::dropIfExists('user');
    }
}