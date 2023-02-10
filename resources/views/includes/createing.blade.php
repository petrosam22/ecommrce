@extends('layouts.app')


@section('text')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

 <title>Rigster page</title>


<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
            @if($errors->any())
<div class="alert alert-primary">
<ul>
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
      
    @endforeach
</ul>
</div>

@endif

              <div class="col-md-8 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Create User  </p>

                @if($errors->any())
<div class="alert alert-primary">
<ul>
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
      
    @endforeach
</ul>
</div>

@endif

                <form class="mx-1 mx-md-4" action="{{url('/add')}}" method="POST">
                @csrf
            {{-- cross site requet forign --}}


                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw "></i>
                    <div class="form-outline flex-fill mb-0">
                      <input name="name"  type="text" id="form3Example1c" class="form-control" placeholder="Your Name" />
                     </div>
                  </div>

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
                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-check-circle"></i>     
                        <select class="form-select form-select w-100 ms-4" aria-label="Default select example" name="tybe">

                        <div class="form-outline flex-fill mb-0">
            <option value="moderator">moderator</option> 
            <option value="Admin">Admin</option>
            <option value="User">User</option>
          </select>
        </div>
                    </div>
                    
                    <div class=>
                      <button type="submit" class="btn btn-primary btn-lg">Register</button>
                    </div>

                </form>
              

              </div>
             </div>
           
          </div>
        </div>
      </div>
    </div>
  </div>
</section>








<!-- 
            <div class="mb-3">
        <label class="form-label">Selcet Role</label>
        <select class="form-select" aria-label="Default select example" name="tybe">
            <option value="Modrater">Modrater</option>
            <option value="Admin">Admin</option>
            <option value="User">User</option>
          </select>
        </div>


 -->



@endsection