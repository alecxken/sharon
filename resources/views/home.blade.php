@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
<div class="row">
    @php $data = \App\Product::all(); @endphp
            @if(!empty($data))
            @foreach($data as $user)

            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <!-- Card-->
            <div class="card rounded shadow-sm border-0">
                <div class="card-body p-4"><img src="{{asset('images/'.$user->image)}}" alt="" class="img-fluid d-block mx-auto mb-3">
                    <h5> <a href="#" class="text-dark">{{$user->name}}</a></h5>
                    <p class="small text-muted font-italic">Ksh {{$user->price}}</p>
                    <a href="{{url('buy-prod/'.$user->id)}}" class="btn btn-primary btn-xs form-control" >Buy Now</a>
                 
                    {{-- <ul class="list-inline small">
                        <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                        <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                        <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                        <li class="list-inline-item m-0"><i class="fa fa-star-o text-success"></i></li>
                        <li class="list-inline-item m-0"><i class="fa fa-star-o text-success"></i></li>
                    </ul> --}}
                </div>
            </div>
        </div>

        @endforeach
        @endif
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
