<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class horarios extends Model
{
    use HasFactory;
    protected $table = 'horarios';
    protected $fillable = ['descripcion'];
    protected $guarded = ['id'];
}
