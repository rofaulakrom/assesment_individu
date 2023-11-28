<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TenanModel extends Model
{
    use HasFactory;

    protected $fillable = ['id','namatenan', 'hp'];
    protected $table = 'tenan';
    public $timestamps = false;
}
