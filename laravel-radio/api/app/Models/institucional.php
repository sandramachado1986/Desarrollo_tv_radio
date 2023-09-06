<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class institucional extends Model
{
    use HasFactory;
    protected $table = 'institucional';
    protected $fillable = ['titulo', 'descripcion'];
    protected $guarded = ['id'];
}
