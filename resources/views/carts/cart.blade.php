@extends('layouts.temp')

@section('content')

<h1>Cart page</h1>
<ul class="list-group my-3">
  <li class="cart-numb">Cart Number:{{\Cart::getContent()->count();}}</li>

</ul>

<div class="panel panel-default">
  <div class="panel-body">
  
  
  <table class="table table-hover border border-gray"> 
                <thead class="card-table">
                    <th class="text-capitalize">
                    <span class="fw-light fs-3 ">

                    Cart  image
</span>
                    </th>
                    <th class="text-capitalize">
                    <span class="fw-light fs-3">

                    Cart price
                    </span>

                    </th>
                    <th class="text-capitalize">
                  <span class="fw-light fs-3">
                  Cart quantity
                  </span>  
                    </th>
                    <th class="text-capitalize">
                    <span class="fw-light fs-3">

                    Cart name
</span>
                    </th>
 
                    <th class="text-capitalize">
                    <span class="fw-light fs-3">

            delete
</span>
                    </th>

                </thead>
            

                <tbody>
                @foreach(Cart::getContent() as $pdt)

            <tr class="testing">
                <td class="w-25 border border-end-gray">

     <img src="{{asset($pdt->attributes->image)}}" class="w-50  img-card">
                </td>
                <td>

<span class="fs-2"><br>{{$pdt->price}}$</span>
                </td>
                <td class="border border-end-gray">

     <span class="fs-2 "><br>{{$pdt->quantity}}</span>
                </td>
                <td class="border border-end-gray">

<span class="fs-3"><br>{{$pdt->name}}</span>
                </td>
              
                 <td>
                    <button style="margin-top: 36px;" class="btn btn-xs btn-danger">

                        <a class="text-decoration-none text-light" href="/cart/delete/{{$pdt->id}}">
                        Delete
                    </a>
                </button>


                </td>
            </tr>
                    @endforeach
                </tbody>
            </table>    

  </div>
</div>


<!-- <div class="container border border-gray h-50 p-0 "> -->


 



@endsection



 