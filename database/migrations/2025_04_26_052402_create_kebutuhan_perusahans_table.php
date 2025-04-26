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
        Schema::create('kebutuhan_perusahans', function (Blueprint $table) {
            $table->bigIncrements('id_kebutuhan_perusahaan');
            $table->unsignedBigInteger('id_perusahaan');
            $table->string('nama_kebutuhan');
            $table->integer('jumlah_kebutuhan');
            $table->integer('latitude');
            $table->integer('lolingitude');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kebutuhan_perusahans');
    }
};
