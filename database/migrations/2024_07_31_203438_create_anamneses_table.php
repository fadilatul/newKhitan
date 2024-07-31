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
        Schema::create('anamneses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('no_rekammedis_id');
            $table->enum('poli', ['umum', 'gigi']);
            $table->string('tekanan_darah');
            $table->string('suhu_tubuh');
            $table->unsignedBigInteger('gejala_id')->nullable();
            $table->unsignedBigInteger('diagnosa_id')->nullable();
            $table->unsignedBigInteger('terapi_id')->nullable();
            $table->timestamps();


            $table->foreign('no_rekammedis_id')->references('id')->on('pendaftarans')->onDelete('cascade');
            $table->foreign('gejala_id')->references('id')->on('gejala')->onDelete('cascade');
            $table->foreign('diagnosa_id')->references('id')->on('diagnosa')->onDelete('cascade');
            $table->foreign('terapi_id')->references('id')->on('terapi')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anamneses');
    }
};
