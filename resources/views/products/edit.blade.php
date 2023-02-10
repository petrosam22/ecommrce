@extends('layouts.app')


@section('text') 

 @if($errors->all())
            <ul class="list-group">
                @foreach($errors->all() as $error)
<li class="list-group text-danger">

{{$error}}
</li>
                @endforeach
            </ul>
 
@endif 

<div class="panel panel-defult">
    <div class="panel-heading">
  <h2>

Edit post     </h2>

    </div>


    <div class="panel-body">
    <form action="{{url('/product/update')}}" method="POST" 
        enctype="multipart/form-data">
            @csrf
<div class="form-group">

<label for="title">Title</label>
   <textarea class="form-control" name="content" id="" cols="30" rows="10">
   {{$products->content}}
  </textarea>
</div>
<div class="form-group">
<label for="title">price</label>
<input type="text" name="price" class="form-control" value="{{$products->price}}">
  
</div>
<div class="form-group">

    <input type="hidden" class="form-control" name="id" value="{{ $products->id }}">
</div>

<div class="form-group">

<label for="featured">Featured image</label>
<input type="file" name="featured" class="form-control">
</div>

     <div class="form-group">
        <label for="category">Select a category</label>
        <select name="category_id" id="category" class="form-control">
            @foreach($category as $category)
            <option value="{{ $category-> id}}" >
                {{$category->name}}
            </option>
            @endforeach
        </select>
     </div>   
 

     
 

<div class="form-group">
    <div class="text-center">
        <button class="btn btn-primary mt-5">
            Update Post
        </button>
    </div>
</div>
        
         

        </form>
    </div>
</div>
@endsection
 