<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anamnese extends Model
{
    use HasFactory;
    public $table = 'anamneses';
    protected $fillable = [
        'no_rekammedis_id',
        'poli',
        'tekanan_darah',
        'suhu_tubuh',
        'gejala_id',
        'diagnosa_id',
        'terapi_id',
        'created_at'
    ];

    public function pasien()
    {
        return $this->belongsTo(Pendaftaran::class, 'pasien_id', 'id');
    }
    public function gejala()
    {
        return $this->belongsTo(Gejala::class, 'gejala_id', 'id');
    }
    public function diagnosa()
    {
        return $this->belongsTo(Diagnosa::class, 'diagnosa_id', 'id');
    }
    public function terapi()
    {
        return $this->belongsTo(Terapi::class, 'terapi_id', 'id');
    }
}
