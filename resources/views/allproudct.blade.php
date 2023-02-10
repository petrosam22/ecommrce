@extends('layouts.temp')

<style>
    .overlay{
        opacity: -0.4;
     width: 269px;
    background: black;
    height: 64vh;
    position: absolute;
    top: 6%;
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
    top: 192px;
    border: 1px solid gray;
    width: 194px;
    text-align: center;
    left: 39px;
    cursor: pointer;
 
}

@media only screen and (max-width: 1200px){
    .overlay {
        opacity: -0.4;
    width: 162px;
    background: black;
    height: 241px;
    position: absolute;
    top: 9%;
}
.overlay-btn {
    list-style: none;
    text-decoration: none;
    color: white;
    background: black;
    padding: 10px 0;
    position: absolute;
    top: 84px;
    border: 1px solid gray;
    width: 140px;
    text-align: center;
    left: 17px;
    cursor: pointer;
}
}
</style>



 
@section('content')



<div class="container">
    <div class="row">
    <li class="list-group-item text-center mt-4">
                <a class="text-decoration-none text-dark" href="/proudct/Category/1">
                    Search By Category
                </a>
            </li>

 

@foreach($products as $product)
<div class="col-4">
 
 <div class="PHOTO position-relative">
 <div class="overlay">
            <a class="overlay-btn">
                View All
            </a>
        </div>
 
        <img src="{{asset($product->featured)}}" class="W-75 mt-4" srcset="">

 </div>
<H5 class="py-2  ">{{$product->content}}</H5>
<H5>{{$product->price}}$</H5>
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

<div class="pagination  my-3">

 <div class="test my-5">

     {{ $products->links() }}
    </div>
       </div>
</div>
</div>
 




@endsection