<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Khitan extends Model
{
    use HasFactory;
    public $table = 'khitans';
    protected $fillable = [
        'name',
        'tanggal',
        'jam',
        'jenis_paket',
        'tempat',
        'alamat',
        'status'
    ];
}
