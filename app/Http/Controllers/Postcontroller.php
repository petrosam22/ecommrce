<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use App\Models\User;
use Auth;
class Postcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $test = post::all();
        return view("post.index")->with("posts" , post::all())
        ->with('test',$test);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("post.create");
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
            'title'=>'required',
            'description'=>'required',
            'photo'=>'required',
            'user_id'=>'required'
        ]);
        $photo = $request->photo;
        $photo_new_name = time().$photo->getClientOriginalName();
        $photo_temp = $photo->move('upload/post' , $photo_new_name);


        post::create([
            'title' => $request->title,
            'description' => $request->description,
              'photo' =>   $photo_temp,
              "user_id" => $request->user_id

        ]);
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
        $posts = post::find($id);
        $user = User::find(Auth::user()->id)->posts->random(3);
        
        
         
        
        return view('post.show')->with('post' ,$posts)
        ->with('users' , $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = post::find($id);

        return view("post.edit") ->with("post" , $post);
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
        'title'=>'required',
        'description' => 'required',
        'user_id' => 'required',
     ]);
     $post = post::find($request->id); 
       if($request->hasFile("photo")){
         $featured = $request->photo;
         $featured_new_name = time().$featured->getClientOriginalName();
         $featured_temp = $featured->move('upload/post' ,$featured_new_name );
         $post->photo =  $featured_temp ;
        }    

        $post->title = $request->title;
        $post->description = $request->description;
        $post->user_id = $request->user_id;
        $post->save();
         return redirect("/post");
  }


    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = post::find($id);

        $post->delete();
        return redirect()->back();
    }
}
