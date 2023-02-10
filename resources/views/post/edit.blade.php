@extends('layouts.app')

<h1>EDIT PAGE</h1>

@section('text') 



@extends('layouts.app')


@section('text') 



<div class="panel panel-defult">
    <div class="panel-heading">
  <h2>

      Edit a new post 
    </h2>

    </div>
     

    <div class="panel-body">
        <form action="{{ url('/post/update') }}" method="POST" 
        enctype="multipart/form-data">
            @csrf
<div class="form-group">

<label for="title">title</label>
<input type="text" name="title" value="{{$post->title}}" class="form-control">
  
</div>

<div class="form-group">

<label for="content">description</label>
<textarea name="description" class="form-control" >
{{$post->description}}
</textarea>
</div>


<div class="form-group">

<label for="featured">photo</label>
<input type="file"  name="photo" class="form-control">
</div>
<input type="hidden" name="user_id" class="form-control" value="{{Auth::user()->id}}">
<input type="hidden" name="id" class="form-control" value="{{$post->id}}">

  



    

<div class="form-group mb-5">
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



@endsection