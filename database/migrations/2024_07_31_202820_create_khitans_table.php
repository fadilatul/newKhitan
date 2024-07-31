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
        Schema::create('khitans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pasien_id');
            $table->date('tanggal');
            $table->time('jam');
            $table->enum('jenis_paket', ['paket1', 'paket2', 'paket3', 'paket4']);
            $table->enum('tempat', ['klinik', 'rumah']);
            $table->enum('status', ['selesai', 'belum']);
            $table->timestamps();

            $table->foreign('pasien_id')->references('id')->on('pendaftarans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('khitans');
    }
};
