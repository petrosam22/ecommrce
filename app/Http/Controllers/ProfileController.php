<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use App\Models\User;
use Auth;
use DB;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
   

        $profiles = User::find(Auth::id());

        return view("Users.profile")->with('profiles' , $profiles);
         


        // dd($tests);


      



        

 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user()->id;

 

        $profile = Profile::create([
           'user_id' =>  $user,
           'avatar' => "upload/avatars/peter.jpg",
           'youtube' => "youtube.com",
           'facebook' => "facebook.com",
           'about' => "about me ",

       ]);
       $profile->save();
       

        return redirect('/');

        // return view('Users.profile');

      
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //        $user = Auth::user()->id;


        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tests = User::find(Auth::id());

        

        // // dd($tests);
        // // $user = Auth::user()->id;
        // // //  $user = Profile::find($id);


        // // $profile = Profile::find($user);

        return view('editprofile')->with('tests' , $tests);





        
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
       
 
        $profile = User::findorfail(Auth::id())->profile;
        $profile->facebook = $request->facebook;
        $profile->youtube = $request->youtube;
        $profile->about = $request->about;
 
       
 





         if($request->hasFile('avatar'))
        {
            $avatar = $request->avatar;

            $avatar_new_name = time() . $avatar->getClientOriginalName();

            $avatar->move('upload/avatars', $avatar_new_name);

            $profile->avatar = 'upload/avatars/' . $avatar_new_name ; 

        }
        

        
        $profile->save();
        $user = User::findorfail(Auth::id());

       $user->name = $request->name;
       $user->email = $request->email;
       if($request->has('password'))
       {
        $user->password = \Hash::make($request->password);
        $user->save();

       }
 
    //    if($request->has('password'))
    //    {
    //        $user->password = \Hash::make($request->password);
           
    //        $user->save();
    //    }


       $user->save();
       


    //  


        // dd($profile);

         
       
        // $this->validate($request, [
        //     'name' => 'required',
        //     'email' => 'required',
        //     'password' => 'required',
            
        // ]);
        
        // $user = Auth::user();
        
        // $user->name = $request->name;
        // $user->email = $request->email;
         
        // $user->save();
        // // $user->profile->save();
    

        // $profile = User::findorfail(Auth::id());
        // $profile->facebook = $request->facebook;
        // $profile->youtube = $request->youtube;
        // $profile->about = $request->about;
        //  if($request->hasFile('avatar'))
        // {
        //     $avatar = $request->avatar;

        //     $avatar_new_name = time() . $avatar->getClientOriginalName();

        //     $avatar->move('upload/avatars', $avatar_new_name);

        //     $profile->avatar = 'upload/avatars/' . $avatar_new_name ; 

        // }
        
        // $profile->save();
 
    //    Session::flash('success', 'Account profile updated.');

        return redirect('/profile');

 









 
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
