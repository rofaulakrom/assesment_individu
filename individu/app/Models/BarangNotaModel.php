<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangNotaModel extends Model
{
    use HasFactory;

    protected $fillable = ['id','kodenota', 'kodebarang', 'jumlahbarang', 'hargasatuan', 'jumlah'];
    protected $table = 'barangnota';
    public $timestamps = false;
}
