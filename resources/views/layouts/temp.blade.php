
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

        <li><a href="#">My Account</a></li>
        <li><a href="#"></a>Wishlist</li>
        <li id="nav-drop"><a href="#"></a>Curren:Usd  <i id="drpodown" class="fas fa-chevron-down"></i>
          <div id="menu" class="show">
            <a href="">EGP</a>
            <br>
            <a href="">EUR</a>
          </div>
         </li>
         <i style=" color: #d36fcd;   margin-top: 5px;" class="fas fa-shopping-cart"></i>
        <li id="shop"><a href="#"></a>       My Craft</li>
      <li class="text-dark">    
        
      @if(Route::has('login'))

      
        {{Auth::user()->name}}</li>

@endif
    </div>

</div>


</div>
</div>

<!-- <div class="container"> -->

         <div id="input" class="input-group input-group-sm mb-3">
             <input id="text" type="text" class="form-control" aria-label="Sizing example input"  placeholder="Search Here What You Need...." aria-describedby="inputGroup-sizing-sm">
             <i id="search" class="fas fa-search"> </i>
</div>

        
 

 
 
        <nav>
            <label class="logo">
                Fashion 
            </label>
    <ul class="desine">
        <li><a class="change" href="#">Home</a></li>
      <li><a href="#">Woman</a></li>
      <li><a href="#">Men</a></li>
      <li><a href="#">Footwear</a></li>
      <li><a href="#">Accessories</a></li>
      <li><a href="#">Sales</a></li>
      <li><a href="#">Blog</a></li>
 
    </ul>
    <label id="icon">
        <i class="fas fa-bars"></i>
    </label>
  </nav>
   

 
    @yield('content')
 






<footer>

    <div id="container-res" class="container ">
        <div class="row sm">
                <div class="col-xl-3 col-lg-4 col-md-6 ">
                    <h5 class="text-light my-3">SHOPS</h5>
                    <p >New In</p>
                    <p>Women</p>
                    <p >Men</p>
                    <p >Schuhe Shoes</p>
                    <p >Bags & Accessories</p>
                    <p >Top Brands</p>
                    <p >Sale & Special Offers</p>
                    <p >LooKbook</p>

                    
                </div>
                <div class=" col-xl-3 col-lg-4 col-md-6">
                    <h5 class="text-light my-3">INFORMATION</h5>
                    <p>About Us</p>
                    <p>Customer Service</p>
                    <p>New Collection</p>
                    <p>Best Sellers</p>
                    <p>Manufacturers</p>
                    <p>Privacy policy</p>
                    <p>Terms & condition</p>
                    <p>Blog</p>

                 </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                <h5 class="text-light my-3">CUSTOMER SERVICE</h5>
                <p>Search Terms</p>
                <p>Advanced Search</p>
                <p>Orders and Returns</p>
                <p>Contact Us</p>
                <p>RSS</p>
                <p>Help & FAQs</p>
                <p>Consultant</p>
                <p>Store Locations</p>
                  </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
              
                <h5 class="text-light my-3">NEWSLETTER</h5>
                <p class="mt-2">Sign Up For News Letter</p>
                <input  class="mt-2" type="text" placeholder="type your E-mail">
                <br>
                <br>
                <button id="subscribe-btn" class="mt-2" href="">SUBSCRIBE</button>
                <div class="icons mt-3 ms-3">
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
