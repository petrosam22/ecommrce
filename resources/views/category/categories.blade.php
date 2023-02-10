@extends('layouts.temp')

 
 <style>
     .overlay{
        opacity: -0.4;

        width: 182px;
    background: black;
    height: 44vh;
    position: absolute;
    top: 8%;
    }

    .overlay:hover{
        opacity: 0.6;




    }
.overlay-btn{
    list-style: none;
    text-decoration: none;
    color: white;
    background: black;
    padding: 10px 0;
    position: absolute;
    top: 121px;
    border: 1px solid gray;
    width: 161px;
    text-align: center;
    left: 11px;
    cursor: pointer;
 
}

@media only screen and (max-width: 1200px){
    .overlay {
        opacity: -0.4;
    width: 112px;
    background: black;
    height: 175px;
    position: absolute;
    top: 12%;
}
.overlay-btn {
    list-style: none;
    text-decoration: none;
    color: white;
    background: black;
    padding: 10px 0;
    position: absolute;
    top: 58px;
    border: 1px solid gray;
    width: 98px;
    text-align: center;
    left: 8px;
    cursor: pointer;
}
}

 </style>
@section('content')

<div class="container py-5">
    <div class="row">

    <div class="col-3 mt-4 ">
            @foreach($category as $category)


            <li class="list-group-item ">
                <a class="text-decoration-none text-dark" href=" {{$category->id}}">
                    {{$category->name}}
                </a>
            </li>

            @endforeach
            <li class="list-group-item">
                <a class="text-decoration-none text-dark" href="{{url('proudct/Category')}}">
 all
                 </a>
            </li>

        </div>
        <div class="col-8">
    <div class="boxes d-flex justify-content-between flex-wrap ">

    @foreach($test as $test)
    <div class="col-4">
    <div class="PHOTO position-relative">
 <div class="overlay">
            <a class="overlay-btn">
                View All
            </a>
        </div>
 
        <img src="{{asset($test->featured)}}" class="W-75 mt-4" srcset="">

 </div>

<H5 class="py-2  ">{{$test->content}}</H5>
<H5>{{$test->price}}$</H5>
<i class="fa fa-star icon" aria-hidden="true"></i>
<i class="fa fa-star icon" aria-hidden="true"></i>
<i class="fa fa-star icon" aria-hidden="true"></i>
<i class="fa fa-star icon" aria-hidden="true"></i>
<i style="color: #7d7c7ca6;" class="fa fa-star rate- " aria-hidden="true"></i>
<br>
<i class="fas fa-heart addicon"></i>
<i class="fas fa-shopping-cart addicon"></i>
<i class="fas fa-share-alt addicon"></i>
</div>
@endforeach

</div>


</div>
    </div>
</div>





@endsection


<!-- 

 <div class="col-8">
    <div class="boxes d-flex justify-content-between flex-wrap ">

    

</div>
</div>
 -->