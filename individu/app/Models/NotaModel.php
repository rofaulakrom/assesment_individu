<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotaModel extends Model
{
    use HasFactory;

    protected $fillable = ['id','kodenota', 'kodetenan', 'kodekasir', 'kodekasir', 'tanggalnota', 'jamnota', 'jumlahbelanja', 'diskon', 'total'];
    protected $table = 'nota'; 
    public $timestamps = false;
}
