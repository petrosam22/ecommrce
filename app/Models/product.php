<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\category;
use App\Models\User;


class product extends Model
{
    protected $fillable = ['featured','content','price','category_id','user_id'];
    use HasFactory;

    public function category(){
        return $this->belongsTo(category::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function cart(){
        return $this->belongsToMany(cart::class);
    }
}
