<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class programas extends Model
{
    use HasFactory;
    protected $table = 'programas';
    protected $fillable = ['descripcion'];
    protected $guarded = ['id'];
}
