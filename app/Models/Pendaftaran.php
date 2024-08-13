<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Pendaftaran extends Model
{
    use HasFactory;

    public $table = 'pendaftarans';

    protected $fillable = [
        'nomor_pendaftaran',
        'name',
        'tempat',
        'tanggal_lahir',
        'usia',
        'agama',
        'pendidikan',
        'pekerjaan',
        'alergi_obat',
        'bakat_kloid',
        'name_orangtua',
        'tinggi_badan',
        'berat_badan',
        'status',
        'jenis_kelamin',
        'nomer_hp',
        'alamat',
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $latest = self::latest('id')->first(); // Ambil data terakhir berdasarkan ID

            if ($latest) {
                // Mengambil nomor pendaftaran terakhir
                $latestNumber = $latest->nomor_pendaftaran;
                $number = intval(substr($latestNumber, 3)) + 1; // Mengambil angka setelah 'PD-' dan menambahkannya
            } else {
                $number = 1; // Jika tidak ada data, mulai dari 1
            }

            $model->nomor_pendaftaran = 'PD-' . str_pad($number, 5, '0', STR_PAD_LEFT);
        });
    }

    public function anamneseMedis()
    {
        return $this->hasMany(Anamnese::class);
    }
}
