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
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_pendaftaran')->unique();
            $table->string('name');
            $table->string('tempat')->nullable();
            $table->date('tanggal_lahir');
            $table->integer('usia');
            $table->string('berat_badan')->nullable();
            $table->string('tinggi_badan')->nullable();
            $table->enum('agama', ['islam', 'kristen', 'katolik', 'buddha', 'hindu', 'khonghucu'])->nullable();
            $table->enum('pendidikan', ['sd', 'smp', 'sma', 'pt'])->nullable();
            $table->string('pekerjaan');
            $table->string('alergi_obat')->default('tidak_tahu');
            $table->string('bakat_kloid')->default('tidak_tahu');
            $table->string('name_orangtua');
            $table->enum('status', ['belumkawin', 'kawin'])->nullable();
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->string('nomer_hp')->nullable();
            $table->string('alamat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftarans');
    }
};
