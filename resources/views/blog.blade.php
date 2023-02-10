@extends('layouts.temp')


@section('content')

<div class="container text-center border-bottom mb-3">
    <h1>BLOG</h1>
</div>
@foreach($posts as $post)
<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0" style="height: 26vh;">
  

    <div class="col-md-4">
      <img src="{{asset($post->photo)}}" class="img-fluid rounded-start w-100 h-100" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{{$post->title}}</h5>
        <p class="card-text">
            {{Str::limit($post->description,40)}}
        <div class="col d-flex">
        <img src="{{asset($post->user->profile->avatar)}}" style="   width: 46px;;    border-radius: 3.3rem!important;">
        <p class="card-text p-2"> {{$post->created_at	}} </p>

        </div>
      </div>
    </div>
  </div>
</div>

@endforeach



@endsection