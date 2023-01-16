<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('reg.css')}}">

</head>
<body>
 
@if($errors->any())
<div class="alert alert-primary">
<ul>
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
      
    @endforeach
</ul>
</div>

@endif




    <div class="container my-5">
        <form action="{{url('user/store')}}" method="POST">
            @csrf
            {{-- cross site requet forign --}}
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input name="name"
                type="text" class="form-control " placeholder="user name">
 
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input name="email"
                type="text" class="form-control" placeholder="user name">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input name="password"
                type="password" class="form-control" placeholder="user password">


            </div>
            <button class="btn btn-info text-light" type="submit">Register</button>
        </form>








 


</body>
</html>
