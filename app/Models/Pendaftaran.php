<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;
    public $table = 'pendaftarans';
    protected $fillable = [
        'jenis_pemeriksaan',
        'name',
        'tanggal_lahir',
        'usia',
        'keterangan',
        'jenis_kelamin',
        'nomer_hp',
        'alamat',
        'kategori'

    ];

    public function anamneseMedis()
    {
        return $this->hasMany(Anamnese::class);
    }
}
