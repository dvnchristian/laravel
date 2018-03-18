<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    public $timestamps = false;
    protected $table = "laravel";
    protected $fillable = ['name', 'email', 'password'];
    protected $guarded = [];
}
