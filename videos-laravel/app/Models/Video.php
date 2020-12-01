<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'videos';

    //Relacion de One to Many
    public function comment(){
        return $this->hasMany('App\Comment');
    }
    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
    
    use HasFactory;
}
