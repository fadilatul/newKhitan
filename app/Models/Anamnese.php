<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anamnese extends Model
{
    use HasFactory;

    protected $table = 'anamneses';

    protected $fillable = [
        'pasien_id',
        'no_rm',
        'poli',
        'tekanan_darah',
        'suhu_tubuh',
        'gejala_id',
        'diagnosa_id',
        'terapi_id',
        'biaya',
        'created_at',
        'updated_at',
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->no_rm = 'RM-' . str_pad(rand(0, 9999), 4, '0', STR_PAD_LEFT);
        });
    }

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
