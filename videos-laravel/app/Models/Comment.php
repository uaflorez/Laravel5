<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
   protected $table = 'comments';


    //Relacion de Many to one
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

   use HasFactory;
}