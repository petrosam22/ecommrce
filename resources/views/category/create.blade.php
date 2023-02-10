@extends('layouts.app')


@section('text') 
@if($errors->all())
<ul class="list-group">
   @foreach($errors->all() as $error)
   <li class="list-group text-danger">
       {{$error}}</li>

   @endforeach
</ul>
@endif 

@if(Session::has('msg'))
<div class="  text-dark alert alert-primary">

    {{Session::get('msg')}}
</div>
@endif
<div class="panel panel-defult">
    <div class="panel-heading mb-4">
        <h2 >
            Create New Category
        </h2>
    </div>

<form action="{{url('category/store')}}" method="POST">
    @csrf

    <div class="form-group">
        <input type="text" name="name" class="form-control">
    </div>


    
    <div class="form-group">
        <div class="text-center">
            <button type="submit" class="btn btn-primary mt-5 mb-5">
                Store Category
            </button>


         </div>
        
    </div>



</form>



</div>



















@endsection