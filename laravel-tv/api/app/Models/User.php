<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;


class User extends Model implements AuthenticatableContract
{
    use  HasFactory;
    use Authenticatable;

    protected $table = 'users';
    protected $fillable = ['name', 'password','email', 'email_verified_at', 'remember_token'];
    protected $guarded = ['id'];

}
