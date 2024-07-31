<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;
    public $table = 'pendaftarans';
    protected $fillable = [
        'no_rekam_medis',
        'name',
        'tempat',
        'tgl_lahir',
        'usia',
        'status',
        'jenis_kelamin',
        'no_hp',
        'alamat',

    ];

    public function anamneseMedis()
    {
        return $this->hasMany(Anamnese::class);
    }
}
