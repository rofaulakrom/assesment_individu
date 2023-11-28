<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangModel extends Model
{
    use HasFactory;

    use HasFactory;
    protected $fillable = ['id','kodebarang', 'namabarang', 'satuan', 'hargasatuan', 'stok'];
    protected $table = 'barang';
    public $timestamps = false;

}
