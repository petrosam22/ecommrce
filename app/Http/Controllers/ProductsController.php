<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\category;
use App\Models\cart;
use App\Models\User;
use Session;
use Auth;
class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
public function index()
    {
        return view("products.index")
        ->with('products' , product::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        $categories = category::all();
      if($categories->count() == 0 ){
         Session::flash('msg' , 'you need to Create   category first');
        }
        return view("products.create")->with("categories", category::all())->with("users", $user);
        ;
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'content'=>'required',
            'price'=>'required',
            'featured'=>'required',
            'category_id'=>'required',
            'user_id'=>'required',
        ]);
 
        $featured = $request->featured;
        $featured_new_name = time().$featured->getClientOriginalName();
        $featured_temp = $featured->move('upload/product' ,$featured_new_name );


        $product = product::create([
        'content'=> $request->content,
        'price'=>$request->price,
        'featured'=>$featured_temp,
        'category_id'=>$request->category_id,
        'user_id'=>$request->user_id
        ]);

        // $product->cart()->attach(1);
        return redirect()->back();


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
           $product  = product::find($id);
           $cart = cart::find($id);
// $relatPd = User::find(Auth::user()->id)->products->random(2);
$relatPd = product::get()->random(3);
           return view("products.show")->with("product" ,$product)->with("cart", $cart)
          ->with('relatPds' ,$relatPd);

      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proudct = product::find($id);
        return view("products.edit")->with("products" ,  $proudct)
        ->with("category" ,category::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
           'content'=>'required',
           'price' => 'required',
           'category_id' => 'required',
        ]);
        $products = product::find($request->id);   
         if($request->hasFile("featured")){
            $featured = $request->featured;
            $featured_new_name = time().$featured->getClientOriginalName();
            $featured_temp = $featured->move('upload/product' ,$featured_new_name );
            $products->featured =  $featured_temp ;
           }    

           $products->content = $request->content;
           $products->price = $request->price;
           $products->category_id = $request->category_id;
           $products->save();
           return redirect("/product");
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $product = product::findOrFail($id);
     $product->delete();
     return redirect("/product");


    }
}
