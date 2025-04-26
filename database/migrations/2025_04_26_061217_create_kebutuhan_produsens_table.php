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
        Schema::create('kebutuhan_produsens', function (Blueprint $table) {
            $table->bigIncrements('id_kebutuhan_produsen');
            $table->unsignedBigInteger('id_produsen');
            $table->string('nama_kebutuhan');
            $table->integer('jumlah_kebutuhan');
            $table->integer('latitude');
            $table->integer('lolingitude');
            $table->enum('status', ['diterima', 'ditolak', 'menunggu'])->default('menunggu');
            $table->timestamps();
            $table->foreign('id_produsen')->references('id_produsen')->on('produsens')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kebutuhan_produsens');
    }
};
