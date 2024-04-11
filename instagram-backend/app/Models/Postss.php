<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postss extends Model
{
    use HasFactory;
    protected $table = '_post';
    protected $fillable = ['user_id', 'img', 'caption'];
    public function posts()
    {
        return $this->hasMany(Postss::class, 'user_id');
    }
}
