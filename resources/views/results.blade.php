@extends('layouts.temp')

@section('content')












      <div class="container">
                          <h1 class="stunning-header-title">Search results: {{ $query }}</h1>

      @if($proudcts->count() > 0)

        <div class="row">                        
@foreach($proudcts as $proudct)

            <div class="col-4">
            <img src="{{ asset($proudct->featured) }}" class="w-75">

<h2 href=""><h6 class="case-item__title">{{ $proudct->content }}</h6></h2>

            </div>

            @endforeach
        </div>
        @else
                                                <h1 class="text-center">
                                                      No results found.
                                                </h1>
                                          @endif
       </div>
@endsection



