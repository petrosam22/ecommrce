<?php

namespace App\Http\Controllers;

use Auth;
use Cart;
 
use App\Models\User;
use App\Models\product;
use App\Models\category;
use App\Models\cart_product;
use Illuminate\Http\Request;
 use DB;
class CartsController extends Controller
{
    public function cartList(Request $request)
    {
        // $cartItems = \Cart::getContent();
        // // dd($cartItems);
        // return view('carts.cart', compact('cartItems'));
       $pdt_id = product::find($request->prd_id);  

         $cart =Cart::add([
            'id' => $pdt_id->id,
             'name' => $pdt_id->content,
            'quantity' => 1,
            'price' => $pdt_id->price,
            'attributes' => array(
                'image' => $pdt_id->featured,
            )
        ]);

         return redirect("cart");

    }


    public function cart()
    {
        return view("carts.cart");
    }


    public function addToCart(Request $request)
    {
        Cart::add([
            'id' => $request->id,
             'content' => $request->content,
            'price' => $request->price,
            'attributes' => array(
                'image' => $request->featured,
            )
        ]);
        session()->flash('success', 'Product is Added to Cart Successfully !');

        return redirect()->route('/cart/list');
    }



public function delete($id){
 
\Cart::remove($id);
return view("carts.cart");
}













































    public function index(){
         
        // $cart =Cart::all();
         return view("carts.cart");
        //  ->with('cart',$cart);
 
    }

    public function show(Request $request , $id){
        // $cart =cart::find($id);
    //     $user = Auth::user()->id;
             
      
    //     $cart = cart::create([
    //         'quantity'=> "2",
    //         'user_id'=>$user,
    //         'product_id'=>"2"

    //     ]);

    //     $product  = product::find($id);
    //     $user  = User::find($id);

 
    //     $product =product::find($product->id);
    //     $user =User::find($user->id);
    //   $product->cart()->attach($cart->id);
   
 


    //     $test =cart::find($cart->id)->proudcts;  


          // $test =cart::get()->where($cart->id)->proudcts;  
  

   
        
             
    //     return view("carts.cart")->with('cart',$cart)
    //     ->with("test" , $test);
    //    ;
 
                  
        //    $test =  $cart->id;
        //    dd($test);


        // $test = product::find(3)->cart;
        // dd($test);

        // ->with('cart',$cart);




    //     $test = category::find($id)->product;
    //     $category = category::all();
    //    return view("carts.cart")->with('test',$test) ->with("category", $category)
    //    ->with("products" , product::all());


    }


    public function edit($id)
    {
           $testing  = product::find($id);
       
    

        return view("carts.cart")->with('testing',$testing);


    }
    
// public function addTocart(){
  
    // i neeed all cart of proudct whit the same id

    //  $test =cart::find(1)->proudcts;  
    //   dd($test);

    //  $test =cart::find(15)->proudcts;  
    //   dd($test);

        // proudcts.user_id;;
        //  $query = DB::table('cart_proudct_user')->get();
        //  ->where('product_id' , '=' , 2)->get();


 
        // dd($query);

     // $request->validate([
            
    //     'cart_id'=> 'required',
    //     'product_id'=> 'required',
    // ]);



//     //  $cart_product= cart_product::create([
//     //     'card_id'=> "133",
//     //   'product_id'=> '1',
//     // ]);
    
//     $card = new cart_products();
    
// $card->cart_id = $request->cart_id;
//     $card->product_id = $request->product_id;
//     $card->save();
 



 
    
// }
    

 public function getcard($id){
    $test =cart::find(2)->proudcts;
    dd($test);

     
 }


 



 }


/*
        
    
    $test =cart::find(1)->proudcts;
        dd($test);
*/ 



