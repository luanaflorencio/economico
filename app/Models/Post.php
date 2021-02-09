<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'challenge',
        'user_id'

    ];
    public function post(){
        return $this->belongsTo('App\Model\User');
    }
}
