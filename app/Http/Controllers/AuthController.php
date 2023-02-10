<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;

use Auth;
use Session;
class AuthController extends Controller
{

    public function getRegiser(){
        // $test = user::find(1)->profile          ;
 
// dd($test);
        return view("Users.register");
    }

    public function handleRegister(Request $request){
        $request->validate([
     'name' => "required",
     'email' => 'required',
      'password'=> 'required'
        ]);
        $data = $request->all();
        $data['password'] = \Hash::make($data['password']);
        $request->tybe =  $request->tybe;
        $user = new User();
        $user->create($data);



       

Session::flash('msg' ,"Your Account Created");        
 


        return redirect('/user/login');


    }
    public function getlogin(Request $request){

        return view("Users.login");
    }

    public function handleLogin(Request $request){
        if(Auth::attempt(['email'=>$request->email , 'password'=>$request->password])){
            return redirect("/profile/create");
        }else{
            Session::flash("error" , "Your Account is Not found");
            return redirect("/user/login");

            // return "you are not autherized";
        }

    }
    
    
             function logout() {
               Auth::logout();
               return redirect("/");
    
                
            }


            function edit($id){
                //return view form of book with its data
            $user = User::findorfail($id);
                return view("Users.edit",["user"=>$user]);
            }


           public function update(Request $request){

                $user = User::findorfail(Auth::id());

                $user->name = $request->name;
                $user->password = $request->password;
                $user->email = $request->email;
                $user->tybe = $request->tybe;
 
                $user->save();

                // dd($user);


                return redirect('/dashbord');



            }

            public function delete ($id){
                $user = User::findorfail($id);
                $user->delete();

                return redirect("/all/user");
            }

  
}
