<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'pengumuman';
    protected $primaryKey = 'idPengumuman';
    protected $fillable = [
        'judul',
        'isi',
        'lampiran',
        'nij'
    ];
}
