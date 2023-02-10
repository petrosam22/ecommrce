@extends('layouts.app')


@section('text') 

<h1>Blog page</h1>

<div class="panel panel-default">
  <div class="panel-body">
  


  <table class="table table-hover"> 
                <thead>
                <div class="text-end">

                      
Total Posts:{{$test->count()}}
</div>
                    <th>
                    Post  Title
                    </th>
                    <th>
                    Post Description
                    </th>
                    <th>
                    Post user
                    </th>
                    <th>
                    product  Photo
                    </th>

                    @if(Auth::user()->tybe =='admin')
                    <th>
            edit
                    </th>

                    <th>
            delete
                    </th>

                    @endif

                </thead>
            

                <tbody>
                    @foreach($posts as $post)

            <tr>
                <td>
                    <h4>{{$post->title}}</h4>
                </td>
                <td>
 
                    {{Str::limit($post->description,30)}}
                </td>
                <td>
 
                    {{$post->user->email}}
                </td>
                <td>

               <img src="{{asset($post->photo)}}" class="w-100 h-100 rounded-1">
                </td>

                @if(Auth::user()->tybe =='admin')

                 <td>
                    <a href="post/edit/{{$post->id}}" class="btn btn-xs btn-primary">
                        Edit
                    </a>

                    
                </td>
                <td>
                    <a href="/post/delete/{{$post->id}}" class="btn btn-xs btn-danger">
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