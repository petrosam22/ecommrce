<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        
        <div class="container pt-5">
            <div class="row">
                <!-- check if user has login to show create form -->
                <!-- links of you route not files -->
                @if(Auth::check())
                <div class="col-lg-4">
                    <ul class="list-group">
                    <li class="list-group-item">
                            <a class="text-decoration-none" href="/users/create">Create user</a>
                        </li>
                  
                         
                        @endif
 
 

                    </ul>
                    
                    
                    
                </div>

          
                <div class="col-lg-8" id="create-form">
                @yield('content')
                </div>
            </div>
        </div>
    </div>
</body>
</html>



<!-- /users/create -->
</body>
</html>