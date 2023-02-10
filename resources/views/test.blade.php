@extends('layouts.temp')


@section('content')
<div class="section5 pt-5">
 <div class="title_lines "> Trending Item
</div>
<!-- <div class="line-title"></div> -->
<!-- <div class="line"></div> -->
 </div>
 <div id="container-res1" class="container">
    <div class="row pt-3">
        @foreach($test as $test)
      <div class="col-xl-3 col-lg-4 col-md-6">
        <button class="proudct-price">{{$test->price}}</button>
      <img src="{{asset($test->featured)}}" class="secttion3-img">
      <!-- <div class="card1"> -->


        
      <!-- </div> -->
      <p class="proudact-name   m-0 pb-1">
    {{$test->content}}
      </p>
      <!-- </div> -->
      <p class="proudact-name   m-0 pb-1">
    {{$test->category->name}}
      </p>
      <i  class="fa fa-star icon" aria-hidden="true"></i>
   <i  class="fa fa-star icon" aria-hidden="true"></i>
   <i  class="fa fa-star icon" aria-hidden="true"></i>
   <i  class="fa fa-star icon" aria-hidden="true"></i>
   <i style="    color: #7d7c7ca6;
" class="fa fa-star rate- " aria-hidden="true"></i>
<br>

<i class="fas fa-heart addicon"></i>
   <i class="fas fa-shopping-cart addicon"></i>
   <i class="fas fa-share-alt addicon"></i>
<br>
<br>

      </div>

      @endforeach
</div>

<div class="trend-button">
    
    <button>LOAD MORE</button>
</div>
</div>
</div>
</div>


@endsection