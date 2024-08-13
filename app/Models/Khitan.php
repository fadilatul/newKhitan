<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Khitan extends Model
{
    use HasFactory;

    protected $table = 'khitans';  // Menyebutkan tabel yang digunakan

    // Kolom yang dapat diisi massal
    protected $fillable = [
        'nomer_khitan',
        'name',
        'tempat_lahir',
        'tanggal_lahir',
        'tanggal',
        'jam',
        'alergi_obat',
        'bakat_kloid',
        'jenis_khitan',
        'tempat',
        'name_orangtua',
        'nomer_hp',
        'alamat',
        'status',
        'biaya',  // Menambahkan 'biaya' karena ini ada di tabel
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $latest = self::latest('id')->first(); // Ambil data terakhir berdasarkan ID

            if ($latest) {
                // Mengambil nomor pendaftaran terakhir
                $latestNumber = $latest->nomor_khitan;
                $number = intval(substr($latestNumber, 3)) + 1; // Mengambil angka setelah 'PD-' dan menambahkannya
            } else {
                $number = 1; // Jika tidak ada data, mulai dari 1
            }

            $model->nomor_khitan = 'K-' . str_pad($number, 5, '0', STR_PAD_LEFT);
        });
    }
}
