<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;
use App\Models\User;

class Sled extends Model
{
    use HasFactory;
    
    public function user(){
        return $this->belongsTo(User::class);
    }
    
    public function comments(){
        return $this->hasMany(Comment::class,'sled_id');
    }
}
