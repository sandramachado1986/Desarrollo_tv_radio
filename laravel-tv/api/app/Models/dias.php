<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dias extends Model
{
    use HasFactory;
    protected $table = 'dias';
    protected $fillable = [ 'descripcion'];
    protected $guarded = ['id'];
}
