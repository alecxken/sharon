@extends('layouts.master')

@section('title', '| Permissions')

@section('content')

 @section('extracss')
@include('layouts.datatablescss')
@endsection
@section('content')
<div class="col-md-2">
  </div>
<div class="container col-md-8">
<div class="card">
            <div class="card bd-0">
                <div class="card-header tx-medium bd-0 tx-white bg-indigo">
                  <div class="row">

                    <div class="col-md-4">
                        <h4><i class="fa fa-users"></i>Exce </h4>                  
                    </div>

                      <div class="col-md-8">

         <a href="{{ url('roles_index') }}" class="btn btn-info  btn-xs pull-left">Roles</a>
         <a href="{{ url('permissions_index') }}" class="btn btn-info  btn-xs pull-left">Permissions</a>
         <a href="{{ url('users_create') }}" class="btn btn-success btn-xs">Add User</a> 
                      </div>

                    
                  </div>
               


                </div><!-- card-header -->
                <div class="card-body ">

      <table class="table table-striped table-bordered table-hover" id="dataTables-example">


            <thead>
                <tr>
                    <th>Permissions</th>
                    <th>Operation</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($permissions as $permission)
                <tr>
                    <td>{{ $permission->name }}</td>
                    <td>
                    <a href="{{ URL::to('permissions/'.$permission->id.'/edit') }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>

                    {!! Form::open(['method' => 'DELETE', 'url' => ['permissions_destroy/'. $permission->id] ]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <a href="{{ URL::to('permissions/create') }}" class="btn btn-success">Add Permission</a>

</div>
</div>
@endsection
