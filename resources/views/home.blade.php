@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">

<div class="row">
    @php $data = \App\Product::all(); @endphp
            @if(!empty($data))
            @foreach($data as $user)
        <div class="col-md-6 col-lg-4">
              <div class="card bd-0">
                <img class="img-fluid" src="{{asset('images/'.$user->image)}}" style="width: 300px; height:150px; "  alt="Image">
                <div class="card-body bd bd-t-0">
                     <h5> <a href="#" class="text-dark">{{$user->name}}</a></h5>
                  <p class="card-text"> <p class="small text-muted font-italic">Ksh {{$user->price}}</p>
                  <div class="row">
                    <a href="{{url('buy-prod/'.$user->id)}}" class="btn btn-primary btn-xs form-control" >Buy Now</a>
                     <a href="{{url('buy-prod/'.$user->id)}}" class="btn btn-warning btn-xs form-control" >Lipa Mdogo</a>
                     </div>
                </p>
                </div>
              </div><!-- card -->
            </div>

               @endforeach
        @endif
                </div>
      
    </div>
</div>
@endsection
