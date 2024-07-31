<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Khitan extends Model
{
    use HasFactory;
    public $table = 'khitans';
    protected $fillable = [
        'pasien_id',
        'tanggal',
        'jam',
        'jenis_paket',
        'tempat',
        'status',
    ];

    public function pasien()
    {
        return $this->belongsTo(Pendaftaran::class, 'pasien_id', 'id');
    }
}
