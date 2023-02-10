

@extends('layouts.app')


@section('text')

<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Type</th>
      @if(Auth::user()->tybe == "admin")

      
      <th  scope="col" >Delete</th>
      <th  scope="col" >Edit</th>
      @endif
      <!-- <th scope="col">Handle</th> -->
    </tr>
  </thead>
  <tbody> 
      @foreach($user as $user)
    <tr>
       <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->tybe}}</td>

@if(Auth::user()->tybe == "admin")
       <td class="">
         <button type="button" class="btn btn-dark">
        <a href="{{url('delete/user' , $user->id)}}" class="text-light text-decoration-none">Delete</a>
       </button>
     </td>
       <td class=""> 
        <button type="button" class="btn btn-primary px-4">
        <a href="{{url('edit/user' , $user->id)}}" class="text-light text-decoration-none">Edit</a>
       </button> 
    </td>

@endif
    </tr>
 
    
    @endforeach
  </tbody>
</table>

@endsection