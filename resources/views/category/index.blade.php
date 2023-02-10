@extends('layouts.app')


@section('text')
<div class="panel panel-default">
  <div class="panel-body">

  <table class="table table-hover"> 
                <thead>
                    <th>
            catogey name
                    </th>


                    @if(Auth::user()->tybe == "admin")
                    <th>
                        edit
                    </th>
                    
                    <th>
                        delete
                    </th>
                    
                    @endif





                </thead>
            

                <tbody>
                    @foreach($categories as $category)

            <tr>
                <td>

                    {{$category->name}}
                </td>
@if(Auth::user()->tybe == "admin")
                <td>
                    <a href="category/edit/{{$category->id}}" class="btn btn-xs btn-primary">
                        Edit
                    </a>

                    
                </td>
                <td>
                    <a href="category/delete/{{$category->id}}" class="btn btn-xs btn-danger">
                        Delete
                    </a>


                </td>
@endif





            </tr>
                    @endforeach
                </tbody>
            </table>    

  </div>
</div>






@endsection