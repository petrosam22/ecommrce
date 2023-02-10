@extends('layouts.temp')


@section('content')
 
 <title>Rigster page</title>
 
<div class="container my-5">
    <form action="{{url('update/user')}}" method="post">
        @csrf
        {{ method_field('POST') }}

        {{-- cross site requet forign --}}
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input name="name"
            type="text" value="{{$user->name}}" class="form-control @error('name') is-invalid @enderror"   placeholder="user name">
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input name="email"
            type="text" value="{{$user->email}}" class="form-control @error('email') is-invalid @enderror"  placeholder="user name">
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input name="password" value="{{$user->password}}" type="password" class="form-control" placeholder="user password">
        </div>
        <div class="mb-3">
        <label class="form-label">Selcet Role</label>
        <select class="form-select" aria-label="Default select example" value="{{$user->tybe}}" name= "tybe">
            <option value="moderator">moderator</option>
            <option value="Admin">Admin</option>
            <option value="User">User</option>
          </select>
        </div>

         <button class="btn btn-info text-light" type="submit">Add </button>
    </form>
</div>


@endsection

<!-- 

 -->