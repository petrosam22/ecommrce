<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\product;
use App\Models\User;


class cart extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','quantity',"product_id" ];






    public function proudcts(){
        return $this->belongsToMany(product::class);
    }

         public function user(){
            return $this->belongsToMany(User::class);
         }
}





