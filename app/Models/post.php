<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class post extends Model
{
    protected $fillable =['title','description','photo','user_id'];
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }
}
