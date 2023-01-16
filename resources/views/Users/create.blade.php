@extends('layouts.temp')


@section('content')
 
 <title>Rigster page</title>
 
<div class="container my-5">
    <form action="{{url('/add')}}" method="POST">
        @csrf
        {{-- cross site requet forign --}}
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input name="name"
            type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old("name") }}" placeholder="user name">
        </div>
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
        <div class="mb-3">
        <label class="form-label">Selcet Role</label>
        <select class="form-select" aria-label="Default select example" name="tybe">
            <option value="Modrater">Modrater</option>
            <option value="Admin">Admin</option>
            <option value="User">User</option>
          </select>
        </div>

         <button class="btn btn-info text-light" type="submit">Add </button>
    </form>
</div>



@endsection