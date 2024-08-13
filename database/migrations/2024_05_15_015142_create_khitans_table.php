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
            $table->string('nomor_khitan')->unique();
            $table->string('name');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->date('tanggal');
            $table->time('jam');
            $table->string('alergi_obat')->default('tidak_tahu');
            $table->string('bakat_kloid')->default('tidak_tahu');
            $table->enum('jenis_khitan', ['konvensional', 'flash_couter', 'smart_klomp', 'cincin']);
            $table->enum('tempat', ['gkz', 'rumah']);
            $table->string('name_orangtua');
            $table->string('nomer_hp');
            $table->string('alamat');
            $table->enum('status', ['selesai', 'belum']);
            $table->decimal('biaya', 10, 2)->nullable();
            $table->timestamps();
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
