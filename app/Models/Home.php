<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'home';
    protected $primaryKey = 'idHome';
    protected $fillable = [
        'nama_home'
    ];
}
