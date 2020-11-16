@extends('layouts.template')
@section('content')
<div class="row">
  <div class="col-md-4">
    <div class="card card-warning disabled">
            <div class="card-header with-border ">
                 <center><h6 class="card-title  ">Create Industry</h6></center>
            </div> 
      {!! Form::open(['method'=> 'post','url' => 'industry-store', 'files' => true ]) !!}
        <div class="card-body">    
            

          <div class="form-group  center">
             {!! Form::label('weight', 'Name ', ['class' => 'awesome'])!!}
             {!!Form::text('name',Null,['class' => 'form-control input-sm' ,'maxlength'=>'155','required'])!!}
          </div>

           <div class="form-group  center">
             {!! Form::label('weight', 'Registration Number ', ['class' => 'awesome'])!!}
             {!!Form::number('reg_no',Null,['class' => 'form-control input-sm' ,'maxlength'=>'155','required','multiple'])!!}
          </div>

           <div class="form-group  center">
             {!! Form::label('weight', 'Physical Address ', ['class' => 'awesome'])!!}
             {!!Form::text('phy_address',Null,['class' => 'form-control input-sm' ,'maxlength'=>'155','required'])!!}
          </div>

         

           <div class="form-group  center">
             {!! Form::label('weight', 'Email Address ', ['class' => 'awesome'])!!}
             {!!Form::email('email',Null,['class' => 'form-control input-sm' ,'maxlength'=>'155','required'])!!}
          </div>

           <div class="form-group  center">
             {!! Form::label('weight', 'Contact Phone Number ', ['class' => 'awesome'])!!}
             {!!Form::number('phone',Null,['class' => 'form-control input-sm' ,'required'])!!}
          </div>

           <div class="form-group  center">
             {!! Form::label('weight', 'Service Description ', ['class' => 'awesome'])!!}
             {!!Form::textarea('desc',Null,['class' => 'form-control input-sm' ,'rows'=>'2','required'])!!}
          </div>

           <div class="form-group  center">
             {!! Form::label('weight', 'Company Reg Document ', ['class' => 'awesome'])!!}
             {!!Form::file('attachments',Null,['class' => 'form-control input-sm' ,'required'])!!}
          </div>

        </div>
        <div class="card-footer">
            <button type="cancel" class="pull-left btn btn-primary center ">Cancel</button>
            <button type="submit" class="pull-right btn btn-warning center ">Create</button>
        </div>
     {!!Form::close()!!}
  </div>
</div>

  <div class="col-md-8">
    <div class="card card-warning">
        <div class="card-header with-border ">
            <center><h6 class="card-title  ">Registered Industries</h6></center>
         </div> 
        <div class="card-body">    
         <div class="card-body table-responsive">
          <table id="example2" class="table table-bordered table-striped table-sm small">
          <thead class="btn-info small">
             <tr> 
             <th>Token</th> 
              <th>Name</th>
              <th>Email</th> 
              <th>Phone No </th>
              <th>Status</th>
               <th >Action</th> 
            </tr>
          </thead>
          <tbody class="small">
           @foreach ($data as $user)
              <tr>
                
                 <td >{{$user->reg_no}}</td>
                <td >{{$user->name}}</td>
                <td >{{$user->email}}</td>
                <td >{{$user->phone}}</td>
              
                <td>Active</td>
                <td >                  
               <a href="{{url('drop-industry/'.$user->id)}}" class="label label-danger">
                <span class="fa-edit">Drop</span>
              </a>
           <!--    <a href="{{url('agent-remove/'.$user->token)}}" class="label label-danger  btn-sm">          
                <span class="fa-remove">Drop</span>
              </a> -->
                </td>
              </tr>
          @endforeach
          </tbody>
          </table>
        </div>
        </div>
      </div>
    </div>
  @endsection