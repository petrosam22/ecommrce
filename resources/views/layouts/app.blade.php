 
@extends('layouts.temp')


@section('content')
 

 
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <style>
            .list-group{
                width: 311px;

            }
        </style>
        <div class="container pt-5">
            <div class="row">
                <!-- check if user has login to show create form -->
                <!-- links of you route not files -->
                @if(Auth::check())
                <div class="col-lg-4">
                    <ul class="list-group py-3">
                    <li class="list-group-item">
                            <a class="text-decoration-none text-dark" href="{{url('admin/create')}}">Create user</a>
                        </li>
                     <li class="list-group-item">
                            <a class="text-decoration-none text-dark" href="{{url('all/user')}}">All user</a>
                        </li>

                    
                  
                     <li class="list-group-item">
                            <a class="text-decoration-none text-dark" href="{{url('/category')}}">All category</a>
                        </li>
                     <li class="list-group-item">
                            <a class="text-decoration-none text-dark" href="{{url('/category/create')}}">Create category</a>
                        </li>
                     <li class="list-group-item">
                            <a class="text-decoration-none text-dark" href="{{url('/product')}}">All Products</a>
                        </li>
                     <li class="list-group-item">
                            <a class="text-decoration-none text-dark" href="{{url('/product/create')}}">Create Products</a>
                        </li>
                     <li class="list-group-item">
                            <a class="text-decoration-none text-dark" href="{{url('/post/create')}}">Create Post</a>
                        </li>
                     <li class="list-group-item">
                            <a class="text-decoration-none text-dark" href="{{url('/post')}}">ALL Post</a>
                        </li>

                    
                  
                         
                        @endif
 
 

                    </ul>
                    
                    
                    
                </div>

          
                <div class="col-lg-8" id="create-form">
                @yield('text')

        
                </div>
            </div>
        </div>
    </div>
  
    @endsection