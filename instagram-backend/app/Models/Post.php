<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'img', 'caption'];

    // public function posts()
    // {
    //     return $this->hasMany(posts::class, 'user_id');
    // }
}
