@extends('layouts.temp')


@section('content')
 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img style="height:111vh"  src="https://images.pexels.com/photos/1462637/pexels-photo-1462637.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img style="height:111vh" src="https://images.pexels.com/photos/1536619/pexels-photo-1536619.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img style="height:111vh" src="https://images.pexels.com/photos/837140/pexels-photo-837140.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container mt-4 text-end">
    <div class="row">
        <div class="col-lg-6 text-start">
          <div id="bg-dark" class="bg-dark hidden">
            <button id="collection-btn" class="  text-light bg-transparent border border-dark py-3 px-5 ">
              VIEW COLLECTION
            </button>
          </div>
            <img  id="collection-photo" src="{{asset('img/img5.jpeg')}}" class="h-40 rounded">
  
              <p class="collection-title ">Hot Collection</p>
              <h1 class="text-dark mb-3">New Trend For Women</h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea libero  ipsa,<br> iste aperiam ipsum ipsam quis. Corporis porro nam fuga inventore <br>nesciunt omnis rerum.</p>
              <button class=" bg-transparent py-2 px-4" style="color:#b3afaf; border:1px solid #989292">Shop Now</button>
             </div>
        <div class="col-lg-5  " id="collection-multiphoto">
        <img id="collection-photo1" src="{{asset('img/img4.jpeg')}}" class="  rounded ">
        <img id="collection-photo1" src="{{asset('img/img6.jpeg')}}" class="  my-4 rounded">

        </div>
    </div>
</div>






 



<div class="section3">
 <!-- <div class="title">
  <div class="line"></div>
  <div class="line"></div>
  <div class="head">
  <H1 class="feat">     
 FEATURED ITEM  
</H1>
  </div> -->   
  <div class="title_lines "> Featured Items
</div>
<!-- <div class="line-title"></div> -->
<!-- <div class="line"></div> -->
 </div>
  <div class="section3-content  mb-4">
       <li>All</li>
      <li>Men</li>
      <li class="bg-color">Woman</li>
       <!-- <div></div> -->
      <li>Kids</li>
  </div>
  <div id="container-res1" class="container">
    <div class="row pt-3">
@foreach($product as $product)

<div class="col-xl-3 col-lg-4 col-md-6">
        <button class="proudct-price">
          {{$product->price}}
        </button>
        <a href="product/show/{{$product->id}}"> 
      <img src="{{asset($product->featured)}}"  class="secttion3-img">
</a>

        <p class="proudact-name  m-0 pb-1">
{{$product->content}}

      </p>
      <i  class="fa fa-star icon" aria-hidden="true"></i>
   <i  class="fa fa-star icon" aria-hidden="true"></i>
   <i  class="fa fa-star icon" aria-hidden="true"></i>
   <i  class="fa fa-star icon" aria-hidden="true"></i>
   <i style="    color: #7d7c7ca6;
" class="fa fa-star rate- " aria-hidden="true"></i>

<br>
 
<i class="fas fa-heart addicon"></i>
   <a href="{{url('/cart')}}">

     <i class="fas fa-shopping-cart addicon"></i>
    </a>
   <i class="fas fa-share-alt addicon"></i>
<br>
<br>

      </div>


@endforeach
     <div class="container mt-5 pt-5">
    <div class="row">
      <div class="col-xl-6 py-2">
        <div class="first-photo">
          <div class="first-content">

            <p class="first-price">70%</p>
            <span  class="section4-off">off</span>
            <h4 class="first-title">Tao kinben Na?</h4>
          </div>


        </div>
      </div>
      
      <div class="col-xl-6 py-2">
      <div class="sceond-photo">
        <div class="sceond-content">

          <p class="">AMR CHEHARA KHRAP NA</p>
          
          <h4>     <span class="bg-color1">CHEHARA</span> Dia Ki hoy</h4>
        </div>

      </div>

      </div>
    </div>
  </div>
<!-- </div> -->
<!-- end secion 4 -->



<!-- start trend section  -->

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
        <button class="proudct-price">{{$test->price}}$</button>
        <a href="product/show/{{$test->id}}"> 
      <img src="{{asset($test->featured)}}"  class="secttion3-img">
</a>

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

 <!-- end trend section  -->
<div class="attcphoto ">

  <div class="container" id="attcsection">
  <i id="attcqute" class="fas fa-quote-left"></i>
     <H1 class="text-light fs-4   mt-4">
      "Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio impedit quia deserunt
       corporis"<br>
    Lorem ipsum dolor sit amet consectetur adipisicing. </H1>
     <img src="{{asset('img/peter.jpg')}}" class="attcphoto1 ">
     <p class="text-light fs-5">
      MD SHAHIN ALAM
      <br>
      Ceo Of TTCM
     </p>
       </div>
      
    </div>








    
<div class="section6 ">
<div class="title_lines "> Latest Blog  
</div>
 
</div>



<div id="container-res" class="container mb-5 pb-5" style="    padding-top: 25px;">
  <div class="row">
    @foreach($posts as $post)
    <div class="col-xl-3 col-lg-4 col-md-6" >
      <img src="{{asset($post->photo)}}" class="blog-photo">
      <p class="blog-title   ">{{$post->title}} </p>
      <p class="blog-desc">
      {{Str::limit($post->description, 30)}}
      <br>

 
    
      </p>
      <button class="blog-button fw-bold">
      <a class="text-decoration-none text-dark" href="/post/show/{{$post->id}}">READ MORE</a>

      </button>
    </div>
     @endforeach
  </div>
 </div>
</div>

</div>

 <script>
  let bg = document.querySelector("#bg-dark");
let mainphoto = document.querySelector("#collection-photo");
mainphoto.addEventListener("click" , function(){
  bg.classList.toggle("hidden");
  // bg.style.opacity = "0.6";
  // bg.classList.add("hidden");a
  // console.log("sadas");

  // bg.style.display= "block";
 
// if(bg.classList.contains("hidden"))
// {
//   bg.classList.remove("hidden");
// }  else{
//   bg.classList.add("hidden");

// }
      
 
});
// function change(){
// }
</script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



@endsection