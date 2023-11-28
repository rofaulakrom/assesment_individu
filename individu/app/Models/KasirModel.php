<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KasirModel extends Model
{
    use HasFactory;
    protected $fillable = ['id','nama', 'hp'];
    protected $table = 'kasir';
    public $timestamps = false;
}
