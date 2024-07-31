<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anamnese extends Model
{
    use HasFactory;
    public $table = 'anamneses';
    protected $fillable = [
        'pasien_id',
        'tanggal_masuk',
        'poli',
        'tekanan_darah',
        'suhu_tubuh',
        'gejala',
        'diagnosa',
        'terapi',
        'created_at'
    ];

    public function pasien()
    {
        return $this->belongsTo(Pendaftaran::class, 'pasien_id', 'id');
    }
}
