<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

  </head>
  <body>



<!-- 


    <div class="container my-5">
        <form action="{{ url('/user/storelogin') }}" method="POST">
            @csrf
            {{-- cross site requet forign --}}

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input name="email"
                type="text" class="form-control @error('email') is-invalid @enderror" value="{{ old("email") }}" placeholder="user name">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input name="password"
                type="password" class="form-control" placeholder="user password">


            </div>
            <button class="btn btn-info text-light" type="submit">Login</button>
            <a href="{{url('user/logout')}}" class="btn btn-info text-light" type="submit">Logout</a>
        </form> -->
 

        <section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
    @if(Session::has('msg'))
 
 <div class="alert alert-primary">
 
     {{Session::get('msg')}}
 </div>
  
 @endif
     
 @if(Session::has('error'))
    
    <div class="alert alert-primary">
    
     {{Session::get('error')}}
    </div>
    
    @endif
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign in  </p>

                <form class="mx-1 mx-md-4" action="{{ url('/user/storelogin') }}" method="POST">
                @csrf
            {{-- cross site requet forign --}}


                

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw  "></i>
                    <div class="form-outline flex-fill mb-0">
                      <input  name="email" type="email" id="form3Example3c" class="form-control" placeholder="Your Email" />
                     </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw   "></i>
                    <div class="form-outline flex-fill mb-0">
                      <input name="password"  type="password" id="form3Example4c" class="form-control" placeholder="Password" />
                     </div>
                  </div>

                
                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" class="btn btn-primary btn-lg">Register</button>
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                  class="img-fluid" alt="Sample image">

              </div>

             </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


</body>
</html>
