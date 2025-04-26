<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->bigIncrements('id_produk');
            $table->unsignedBigInteger('id_user');
            $table->string('nama_produk');
            $table->text('gambar_produk');
            $table->string('deskripsi_produk');
            $table->integer('harga_produk');
            $table->string('latitude');
            $table->string('longitude');
            $table->enum('status', ['diterima', 'ditolak', 'menunggu'])->default('menunggu');
            $table->timestamps();
            $table->foreign('id_user')->references('id_users')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
