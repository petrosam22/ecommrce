<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\category;
use App\Models\post;

class frontEndcontroller extends Controller
{
    public function show(){
        $test = product::all();
        $post = post::take(4)->get();

        return view("welcome")->with("test" , $test)
        ->with("posts"  , $post) ->with("product" , product::all());
     }

     public function index($id){
         
         $test = category::find($id)->product;
          $category = category::all();
        return view("category.categories")->with('test',$test) ->with("category", $category)
        ->with("products" , product::all());


        
     }

     public function test(){
     
           return view("allproudct")
         ->with("products" , product::paginate(6))
         ->with('category',category::all());

         
       }
     
      public function getPosts(){
        $post = post::paginate(4);
        return view("welcome")->with("posts" , $post);
      }


      public function blog(){
        $post = post::paginate(8);
 
        return view("blog")->with("posts" , $post);
      }


 
}
