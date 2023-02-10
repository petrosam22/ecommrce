@extends('layouts.app')


@section('text') 



<div class="panel panel-defult">
    <div class="panel-heading">
  <h2>

      Create a new post 
    </h2>

    </div>
     

    <div class="panel-body">
        <form action="{{ url('/post/store') }}" method="POST" 
        enctype="multipart/form-data">
            @csrf
<div class="form-group">

<label for="title">title</label>
<input type="text" name="title" class="form-control">
  
</div>

<input type="hidden" name="user_id" class="form-control" value="{{Auth::user()->id}}">

<div class="form-group">

<label for="featured">photo</label>
<input type="file" name="photo" class="form-control">
</div>
 

     <div class="form-group">
        <label for="category">Select a category</label>
        <select name="category_id" id="category" class="form-control">
             <option value="" >
             </option>
         </select>
     </div>   




    

 <div class="form-group">

<label for="content">description</label>
<textarea name="description" class="form-control" ></textarea>
</div>

<div class="form-group">
    <div class="text-center">
        <button class="btn btn-primary mt-5">
            Store Post
        </button>
    </div>
</div>
        
         

        </form>
    </div>
</div>








@endsection