
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('style.css')}}">
<div class="main bg-light" >   
<div class="container py-3 ">
        <div class="row">
            <div class="col-lg-4">

                <li class="title-one" id="free-title"><a href="">Free Shipping on All orders over $75!</a></li>
    </div>




    <div id="first-list" class="col-lg-8 ">
    @if(Auth::user())
<li>

    <a href="/profile" class="Logout"  >My Account</a>
</li>

@endif

        <!-- <li><a href="#">My Account</a></li> -->
        <li><a href="{{url('/Wishlist')}}"></a>Wishlist</li>
         <li id="nav-drop">
        <a href="#"></a>Curren:Usd 
         <i id="drpodown" class="fas fa-chevron-down"></i>
          <div id="menu" class="show">
            <a class="text-dark" href="">EGP</a>
            <br>
            <a class="text-dark" href="">EUR</a>
          </div>
         </li>
         <i style=" color: #d36fcd;   margin-top: 5px;" class="fas fa-shopping-cart"></i>
        <li id="shop">
            <a href="{{url('/cart')}}" style="    color: #d36fcd;">

            My Craft:{{\Cart::getContent()->count();}}</li>
                </a>
 

        <li id="regster" >
        <a href="#"></a>
        @if(Auth::user())
        {{Auth::user()->name}}
        <i id="drpologin" class="fas fa-chevron-down"></i>
        @if(auth::user()->tybe !== 'user')

        <!-- <li><a href="/admin/create" class="text-light p-2 bg-primary rounded-3">dashbord</a></li> -->
        <div id="dorpreg" class="drop-auth" >
         <a href="{{url('user/logout')}}" class="Logout"  >Logout</a>

@endif
         @else
        

        <span>Sign In</span>
        <i id="drpologin" class="fas fa-chevron-down"></i>

        <div id="dorpreg" class="drop-auth" >

 
    
          <a href="{{url('/reg')}}" class="Logout"  >Register</a>

 
            <p class="login"  >
            <a class="text-dark" href="{{url('/user/login')}}">

                Login
            </a> 
            </p>
          </div>
         </li>
         
         <!-- && Auth::user()->tybe == "moderator" -->
         @endif

         <!-- @if(Route::has('login'))
      <li class="text-dark">    
        

      
   {{Auth::user()}}</li>

   @endif -->
   
   @if(Auth::check())
   @if(auth::user()->tybe !== 'user')
   <li><a href="/admin/create" class="text-light p-2 bg-primary rounded-3">dashbord</a></li>

 
@endif
@endif
         
</div>

</div>


</div>
</div>

<!-- <div class="container"> -->
<form method="GET"  action="/results">

         <div id="input"  class="input-group input-group-sm mb-3">
             <input id="text" name="query" type="text" class="form-control" aria-label="Sizing example input"  placeholder="Search Here What You Need...." aria-describedby="inputGroup-sizing-sm">
             <i id="search" class="fas fa-search"> </i>
</div>
<a href="#" class="overlay_search-close">
                        <span></span>
                        <span></span>
                    </a>
</form>       
 

 
 
        <nav class="navbar">
            <label class="logo">
                Fashion 
            </label>
    <ul class="desine">
        <li><a class="change" href="/">Home</a></li>
      <li><a href="">Woman</a></li>
      <li><a href="{{url('/proudct/Category')}}">Shop</a></li>
      <li><a href="#">Footwear</a></li>
      <li><a href="#">Accessories</a></li>
      <li><a href="">Sales</a></li>
      <li><a href="{{url('/blog')}}">Blog</a></li>
 
    </ul>
    <label id="icon">
        <i class="fas fa-bars"></i>
    </label>
  </nav>
   

 
    @yield('content')
 






<footer>

    <div id="container-res" class="container ">
        <div class="row sm">
                <div class="mt-5 pt-4 col-xl-3 col-lg-4 col-md-6 mb-5">
                    <h5 class="text-light" style="    margin-bottom: 35px;">SHOPS</h5>
                    <p class="mb-2">New In</p>
                    <p class="mb-2">Women</p>
                    <p class="mb-2" >Men</p>
                    <p class="mb-2" >Schuhe Shoes</p>
                    <p class="mb-2" >Bags & Accessories</p>
                    <p class="mb-2" >Top Brands</p>
                    <p class="mb-2" >Sale & Special Offers</p>
                    <p class="mb-2" >LooKbook</p>

                    
                </div>
                <div class="mt-5 pt-4  col-xl-3 col-lg-4 col-md-6 mb-5">
                    <h5 class="text-light " style="    margin-bottom: 35px;">INFORMATION</h5>
                    <p class="mb-2">About Us</p>
                    <p class="mb-2">Customer Service</p>
                    <p class="mb-2">New Collection</p>
                    <p class="mb-2">Best Sellers</p>
                    <p class="mb-2">Manufacturers</p>
                    <p class="mb-2">Privacy policy</p>
                    <p class="mb-2">Terms & condition</p>
                    <p class="mb-2">Blog</p>

                 </div>
                <div class="mt-5 pt-4 col-xl-3 col-lg-4 col-md-6 mb-5">
                <h5 class="text-light" style="    margin-bottom: 35px;">CUSTOMER SERVICE</h5>
                <p class="mb-2">Search Terms</p>
                <p class="mb-2">Advanced Search</p>
                <p class="mb-2">Orders and Returns</p>
                <p class="mb-2">Contact Us</p>
                <p class="mb-2">RSS</p>
                <p class="mb-2">Help & FAQs</p>
                <p class="mb-2">Consultant</p>
                <p class="mb-2">Store Locations</p>
                  </div>
                <div class="mt-5 pt-4 col-xl-3 col-lg-4 col-md-6 ">
              
                <h5 class="text-light mb-3">NEWSLETTER</h5>
                <p class="mt-2">Sign Up For News Letter</p>
                @if(Auth::check())

                <input id="email"  class="mt-2 text-light ps-2 fs-5" type="email" value="{{Auth::user()->email}}" >
                @else
                <input id="email"  class="mt-2 text-light ps-2 fs-5" type="email">

                @endif

                <br>
                 <button id="subscribe-btn" class="mt-4" href="">SUBSCRIBE</button>
                <div class="icons mt-3 ms-4">
                    <i id="icon" class="fab fa-facebook-f"></i>
                    <i  id="icon"class="fab fa-instagram"></i>
                    <i  id="icon"class="fab fa-youtube"></i>
                    <i  id="icon"class="fab fa-twitter"></i>
                    <i  id="icon"class="fab fa-behance"></i>

                </div>

                </div>
            </div>
        </div>

    
                </footer>
            
  <div class="container-fluid text-center  " style="background-color:black;     padding-left: 76px;
">
    <div class="row p-2 align-items-baseline">
        <div class="col-lg-6 md-12" style="  color: #b3afaf;
">

        <span style="    font-size: 0.8rem;">

            2014 ELLA Fashion Store Shopify.All Rights Reserved.Ecommerce Software by Shopify 
        </span>

        </div>
        <div class="col-lg-6 md-12">
        <span class="visa-pay">Visa</span>
               <span class="master-pay">Master Card</span>
               <span class="paypal-pay">PayPal</span>

        </div>
    </div>
  </div>

      


  
 <script src="{{asset('main.js')}}"></script>

  
 <script>
let icon =document.querySelector("#icon")
let ul =document.querySelector("ul")
document.addEventListener("DOMContentLoaded",change)
function change(){
    icon.addEventListener("click" ,dam)
    function dam(){
        ul.classList.toggle('change')
        // ul.style.top = '220px';
        // ul.style.left = '-6%';
    }
}
 
// top: 220px;
    // left: -6%;



  </script>
