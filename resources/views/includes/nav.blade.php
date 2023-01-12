 
<!-- <link rel="stylesheet" href="{{asset('nav.css')}}"> -->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.2/css/all.css" integrity="sha384-fZCoUih8XsaUZnNDOiLqnby1tMJ0sE7oBbNk2Xxf5x8Z4SvNQ9j83vFMa/erbVrV" crossorigin="anonymous"/>
 
        <nav>
            <label class="logo">
                Fashion 
            </label>
    <ul class="desine">
        <li><a class="active" href="#">Home</a></li>
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
