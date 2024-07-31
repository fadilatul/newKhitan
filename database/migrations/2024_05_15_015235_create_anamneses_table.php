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
            $table->unsignedBigInteger('pasien_id');
            $table->enum('poli', ['umum', 'gigi']);
            $table->string('tekanan_darah');
            $table->string('suhu_tubuh');
            $table->string('gejala')->nullable();
            $table->string('diagnosa')->nullable();
            $table->string('terapi')->nullable();
            $table->timestamps();

            $table->foreign('pasien_id')->references('id')->on('pendaftarans')->onDelete('cascade');
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
