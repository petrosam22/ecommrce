@extends('layouts.temp')


@section('content')
 









<div class="container text-start">
 <div class="post-title">

<h1 class="fs-1">{{$post->title}}</h1>

<div class="info">
<img src="{{asset($post->user->profile->avatar)}}" class="user-pic" alt="...">
<a class="user-name text-decoration-none    text-dark fs-5 my-4 " href="{{url('/profile')}}">{{$post->user->name}}</a>
<BR>
<a class="text-decoration-none border-bottom  text-dark fs-5 my-4 " href="{{url('/profile')}}">{{$post->user->email}}</a>

 
 
</div>
</div>

<div class="row">
    <div class="col-8 ">
        <img src="{{asset($post->photo)}}" style="   width: 100%;
    height: 88vh;">

<h4 class="post-desc   py-5">{{$post->description}}</h3>

    </div>
    <div class="col-4">
        <ul class="list-group">
            <li class="list-group">

                <h1 CLASS="border-bottom">related post</h1>
            </li>

            @foreach($users as $user)
             <div class="post my-4 d-flex justify-content-evenly">

                 <img src="{{asset($user->photo)}}" class="w-25" srcset="">

 
                <div class="post-content mx-4">
                <h5>{{ $user->title}}</p>    

<h5>{{Str::limit($user->description , 20)}}</span> 
<a href="/post/show/{{$user->id}}"> Show Post</a>



                </div>
             </div>
                @endforeach
         </ul>
    </div>


     </div>

 </div>
 </div>

 


<div class="container mt-5 pt-5">
    <div class="content mb-4">
        <span class="border-bottom fs-3 ">If You Love This Post You Can Show This</span>
    </div>
<div class="row">
@foreach($users as $user)

    <div class="col-lg-4 mb-3 ">
    <a href="/post/show/{{$user->id}}"> 
    <img src="{{asset($user->photo)}}" class="w-75 h-50 " srcset="">
</a>

         <p class="fs-3 text-primary">{{$user->title}}</p>
    <H5>{{Str::limit($user->description,20)}}</p>

    </div>
    @endforeach

</div>
    
    
    
    
    
</div>







  
 
@endsection