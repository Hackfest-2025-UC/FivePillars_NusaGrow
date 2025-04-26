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
        Schema::create('permintaans', function (Blueprint $table) {
            $table->bigIncrements('id_permintaans');
            $table->unsignedBigInteger('id_kebutuhan_produsen');
            $table->unsignedBigInteger('id_produk');
            $table->integer('harga_penawaran');
            $table->string('deskripsi_penawaran');
            $table->string('status_permintaan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permintaans');
    }
};
