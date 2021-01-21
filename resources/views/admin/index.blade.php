@extends('layouts.master')

@section('title', '| Users')
@section('extracss')
@include('layouts.datatablescss')
@endsection
@section('content')

<div class="col-12 col-md-12">
            <div class="card card-primary card-outline card-tabs">
              <div class="card-header p-0 pt-1 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill" href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home" aria-selected="true">Users Homepage</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="false">Permissions</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-three-messages-tab" data-toggle="pill" href="#custom-tabs-three-messages" role="tab" aria-controls="custom-tabs-three-messages" aria-selected="false">Roles</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-three-settings-tab" data-toggle="pill" href="#custom-tabs-three-settings" role="tab" aria-controls="custom-tabs-three-settings" aria-selected="false">Settings</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-three-tabContent">
                  <div class="tab-pane fade active show" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">


                    <div class="col-md-12">
            <div class="card card-table-two">
              <div class="card-header tx-medium bd-0 tx-white bg-indigo">
                  <i class="fa fa-users"></i> User Administration   
                  <a href="" class="btn btn-primary" data-toggle="modal" data-target="#modaldemo3">Add New User</a>
               {{--     <a href="{{ url('users_create') }}" class="btn btn-success btn-sm pull-left">Add User</a> --}}
                </div>
                <div class="card-body">
             
            
              <div class="table-responsive">
                <table class="table table-striped table-dashboard-two">
                  <thead>
                    <tr>

                      <th class="wd-lg-25p">Full Name</th>
                      <th class="wd-lg-25p tx-right">Email Address</th>
                      <th class="wd-lg-25p tx-right">Assigned Roles</th>
                      <th class="wd-lg-25p tx-right">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($users as $user)
                    <tr>
                      <td>{{ $user->name }}</td>
                      <td class="tx-right tx-medium tx-inverse">{{ $user->email }}</td>
                      <td class="tx-right tx-medium tx-inverse"> 
                           @if(is_null($user->roles()))
                          <p>No Role</p>
                          @else
                          {{  $user->roles()->pluck('name')->implode(' ,') }}
                          @endif
                     </td>
                      <td class="tx-right tx-medium tx-danger">
                         <button class="btn btn-sm btn-info  open-modal-user" value="{{$user->id}}">Action</button>
                     

                        <a href="{{url('drop_users_details/'.$user->id)}}" class="btn btn-danger">Drop</a>
                  
                      </td>
                    </tr>
                     @endforeach
              
                  </tbody>
                </table>
              </div><!-- table-responsive -->
            </div>
            </div><!-- card-dashboard-five -->
          </div>
                
            </div>
                  <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel" aria-labelledby="custom-tabs-three-profile-tab">

     <div class="col-md-12">
            <div class="card card-table-two">
              <div class="card-header tx-medium bd-0 tx-white bg-indigo">
                  <i class="fa fa-users"></i>Permissions   
                  <a href="" class="btn btn-primary" data-toggle="modal" data-target="#modaldemo4">Add New Permission</a>
                </div>
                <div class="card-body">
             
            
              <div class="table-responsive">
                <table class="table table-striped table-dashboard-two">
                          <thead>
                            <tr>
                              <th class="wd-lg-50p">Permissions</th>
                              <th class="wd-lg-50p tx-right">Operation</th>                    
                            </tr>
                          </thead>
                          <tbody>
                      @foreach ($permissions as $permission)
                        <tr>
                            <td>{{ $permission->name }}</td>
                            <td class="wd-lg-50p tx-right">
                          {{--   <a href="{{ URL::to('permissions/'.$permission->id.'/edit') }}" class="btn btn-info pull-left">Edit</a> --}}

                             <button class="btn btn-info btn-sm">Edit</button>

                        <a href="{{url('permissions_destroy/'.$permission->id)}}" class="btn btn-danger">Drop</a>

                         

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

                  </div>
                  <div class="tab-pane fade" id="custom-tabs-three-messages" role="tabpanel" aria-labelledby="custom-tabs-three-messages-tab">
                 
                  <div class="col-md-12">
            <div class="card card-table-two">
              <div class="card-header tx-medium bd-0 tx-white bg-indigo">
                  <i class="fa fa-edit"></i>Roles   
                  <a href="" class="btn btn-primary" data-toggle="modal" data-target="#modaldemo5">Add New Roles</a>
                </div>
                <div class="card-body">
             
            
              <div class="table-responsive">
                <table class="table table-striped table-dashboard-two">
                          <thead>
                            <tr>
                              <th class="wd-lg-50p">Roles</th>
                              <th class="wd-lg-50p tx-right">Operation</th>                    
                            </tr>
                          </thead>
                          <tbody>
                      @foreach ($roles as $role)
                        <tr>
                            <td>{{ $role->name }}</td>
                            <td class="wd-lg-50p tx-right">
                            <a href="{{ URL::to('roles/'.$role->id.'/edit') }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>

                            {!! Form::open(['method' => 'DELETE', 'url' => ['roles_destroy/'. $role->id] ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-three-settings" role="tabpanel" aria-labelledby="custom-tabs-three-settings-tab">
                     Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis vulputate. Morbi euismod molestie tristique. Vestibulum consectetur dolor a vestibulum pharetra. Donec interdum placerat urna nec pharetra. Etiam eget dapibus orci, eget aliquet urna. Nunc at consequat diam. Nunc et felis ut nisl commodo dignissim. In hac habitasse platea dictumst. Praesent imperdiet accumsan ex sit amet facilisis. 
                  </div>
                </div>
              </div>
              <!-- /.card -->
            </div>
          </div>

@include('admin.users.modalusers')  
@include('admin.users.modalusersedit') 
@include('admin.users.modalroles')   
@include('admin.users.modalpermissions')        


  <script type="text/javascript">      
       $(document).ready(function(){
          var url = "get_users_details";
            //display modal form for task editing
            $('.open-modal-user').click(function(){
                var task_id = $(this).val();

                $.get(url + '/' + task_id, function (data) {
                    //success data
                    console.log(data.name);
                    $('#ids').val(data.id);
                    $('#names').val(data.name);
                     $('#emails').val(data.email);
                    $('#btn-save').val("update");
                    $('#usermoadl').modal('show');
                }) 
            });
          });
   </script>



@section('extrajs')
@include('layouts.datatablesjs')
@endsection
@endsection
