<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Renungan extends Model
{
    use HasFactory;
    protected $table = 'renungan';
    public $timestamps = false;
    protected $primaryKey = 'idRenungan';
    protected $fillable = [
        'judul',
        'isi',
        'lampiran',
        'nij'
    ];
}
