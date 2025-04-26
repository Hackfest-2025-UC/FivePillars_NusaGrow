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
        Schema::create('perusahaans', function (Blueprint $table) {
            $table->bigIncrements('id_perusahaan');
            $table->unsignedBigInteger('id_produsen');
            $table->string('nama_produsen');
            $table->string('alamat_produsen');
            $table->string('email_produsen');
            $table->string('password_produsen');
            $table->string('nama_perusahaan');
            $table->bigInteger('NPWP')->nullable();
            $table->enum('jenis_perusahaan', ['CV', 'PT', 'Firma', 'Koperasi', 'Perorangan'])->default('Perorangan');
            $table->string('deskripsi_perusahaan');
            $table->string('sektor_industri');
            $table->char('no_telpon', 13);
            $table->string('email_perusahaan')->unique();
            $table->string('website_perusahaan');
            $table->string('provinsi');
            $table->string('kabupaten');
            $table->string('kecamatan');
            $table->string('desa');
            $table->string('kebutuhan_bahan_baku');
            $table->string('estimasi_pembelian');
            $table->string('skala_produksi');

            $table->foreign('id_produsen')->references('id_produsen')->on('produsens')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perusahaans');
    }
};
