<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jemaat extends Model
{
    use HasFactory;
    protected $table = 'jemaat';
    protected $primaryKey = 'nij';
    protected $fillable = [
        'password',
        'nama',
        'gender',
        'alamat',
        'ttl',
        'hp',
        'nama_ayah',
        'nama_ibu',
        'nama_pasangan',
        'gol_darah',
        'idDesa',
        'idHome',
        'idMentor'
    ];
}
