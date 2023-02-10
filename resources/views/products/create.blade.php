@extends('layouts.app')


@section('text') 

@if(Session::has('msg'))
<div class="  text-dark alert alert-primary">

    {{Session::get('msg')}}
</div>

@endif

@if($errors->all)
<ul class="list-group">
    @foreach($errors as $error)
        <li class="list-group text-danger">
            {{$error}}
        </li>
    @endforeach
</ul>




@endif

<div class="panel panel-defult">
    <div class="panel-heading">
  <h2>

      Create a new Product 
    </h2>

    </div>


    <div class="panel-body">
        <form action="{{ url('/product/store') }}" method="POST" 
        enctype="multipart/form-data">
            @csrf
<div class="form-group">

<label for="title">price</label>
<input type="text" name="price" class="form-control">
  
</div>

<input type="hidden" name="user_id" class="form-control" value="{{Auth::user()->id}}">

<div class="form-group">

<label for="featured">featured image</label>
<input type="file" name="featured" class="form-control">
</div>

     <div class="form-group">
        <label for="category">Select a category</label>
        <select name="category_id" id="category" class="form-control">
            @foreach($categories as $category)
            <option value="{{ $category-> id}}" >
                {{$category->name}}
            </option>
            @endforeach
        </select>
     </div>   




    

 <div class="form-group">

<label for="content">Content</label>
<textarea name="content" class="form-control" ></textarea>
</div>

<div class="form-group">
    <div class="text-center">
        <button class="btn btn-primary mt-5">
            Store Product
        </button>
    </div>
</div>
        
         

        </form>
    </div>
</div>





@endsection