@extends('layouts.app')


@section('text')
<div class="panel panel-default">
  <div class="panel-body">
  


  <table class="table table-hover"> 
                <thead>
                    <div class="text-end">

                      
                    Total Product:{{$products->count()}}
                    </div>
                    <th>
                    product  featured
                    </th>
                    <th>
                    product content
                    </th>
                    <th>
                    product price
                    </th>

                    @if(Auth::user()->tybe == 'admin')
                    <th>
            edit
                    </th>

                    <th>
            delete
                    </th>

@endif


                </thead>
            

                <tbody>
                    @foreach($products as $product)
 
            <tr>
                <td>

               <img src="{{asset($product->featured)}}" class="w-25 h-25 rounded-1">
                </td>
                <td>

                    {{$product->content}}
                </td>
                <td>

                    {{$product->price}}$
                </td>

                @if(Auth::user()->tybe == 'admin')

                <td>
                    <a href="product/edit/{{$product->id}}" class="btn btn-xs btn-primary">
                        Edit
                    </a>

                    
                </td>
                <td>
                    <a href="/product/delete/{{$product->id}}" class="btn btn-xs btn-danger">
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