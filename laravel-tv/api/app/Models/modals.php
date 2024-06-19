<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modals extends Model
{
    use HasFactory;
    protected $table = 'modals';
    protected $fillable = ['titulo', 'descripcion','imagen','id_categoria'];
    protected $guarded = ['id'];
}
