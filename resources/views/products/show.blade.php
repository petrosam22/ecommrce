
@extends('layouts.temp')


@section('content')



 <div class="container">
    <div class="row py-5">
        <div class="col-lg-7 " style="height:80vh !important;">
        <img src="{{asset($product->featured)}}" class="w-100 h-100" srcset="">

        </div>
        <div class="col-lg-4">
        <h3 class="mb-3 pb-3 text-secondary"><span class="fs-3 text-dark">   Description:</span>{{$product->content}}</h3>
       <a href="/proudct/Category/{{$product->category->id}}" class="fs-1 fw-bold text-decoration-none text-secondary">{{$product->category->name}}</a>

        <br>
        <br>
        
       <button style="background-color:black;"  class="fs-4 text-light px-5 py-2 ">{{$product->price}}$</button>
       <br>
       <br>
       
      <BR>
       


  
  <form action="{{url('/cart/list')}}" method="POST">
      @csrf
      
      <input type="hidden" name="qye" value="">
      <input type="hidden" name="prd_id" value="{{$product->id}}">
       <button href="{{url('/cart/list')}}" class="bg-primary text-light border border-none py-3 w-100 mt-3">
          Add To Cart</button>
          
        </form>




      
        </div>
</div>
</div>
<span class="border-bottom fs-3 ">Matching With  </span>

 <div class="container d-flex justify-content-around mt-5">
   @foreach($relatPds as $relatPd)

  
  <div class="col-xl-3 col-lg-4 col-md-6">
        <button class="proudct-price">{{$relatPd->price}}$</button>
        <a href="/product/show/{{$relatPd->id}}"> 
      <img src="{{asset($relatPd->featured)}}"  class="secttion3-img">
</a>

     
      <p class="proudact-name   m-0 pb-1">
      {{$relatPd->content}}
          </p>
       <p class="proudact-name   m-0 pb-1">
    {{$relatPd->category->name}}
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

 @endsection