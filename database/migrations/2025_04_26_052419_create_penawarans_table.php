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
            $table->unsignedBigInteger('id_kebutuhan_perusahaan');
            $table->unsignedBigInteger('id_produk');
            $table->integer('harga_penawaran');
            $table->string('deskripsi_penawaran');
            $table->string('status_penawaran');
            $table->timestamps();
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
