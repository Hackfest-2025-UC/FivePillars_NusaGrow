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
        Schema::create('penawarans', function (Blueprint $table) {
            $table->bigIncrements('id_penawaran');
            $table->unsignedBigInteger('id_kebutuhan_produsen');
            $table->unsignedBigInteger('id_produk');
            $table->integer('harga_penawaran');
            $table->string('deskripsi_penawaran');
            $table->string('status_penawaran');
            $table->timestamps();
            $table->foreign('id_kebutuhan_produsen')->references('id_kebutuhan_produsen')->on('kebutuhan_produsens')->onDelete('cascade');
            $table->foreign('id_produk')->references('id_produk')->on('produks')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penawarans');
    }
};
