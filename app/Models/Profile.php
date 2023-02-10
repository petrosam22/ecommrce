<?php

namespace App\Models;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
protected $fillable = ['avatar', 'youtube', 'facebook', 'about', 'user_id'];
    use HasFactory;


    public function user(){
      return $this->belongsTo(User::class)  ;
    }
}
