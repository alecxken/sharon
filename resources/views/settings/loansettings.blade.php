@extends('layouts.master')

@section('content')
{!! Form::open(['method'=> 'post','url' => 'store-loan-settings' ,'files' => true]) !!}
    <section class="content">
       <div class="card card-info">
      <div class="card-body">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Lunar Loans Setup</h3>

           
              </div>
            </div>
               
            <div class="card-body">

            
              <div class="form-group">
                <label for="inputName">Loan name</label>
                <input type="text" id="inputName" name="name" required="" class="form-control form-control-sm">
              </div>

              <div class="form-group">
                <label for="inputName">Loan Tenure (Months)</label>
                <input type="number" id="inputName" name="tenure" required="" class="form-control form-control-sm">
              </div>

              <div class="form-group">
                <label for="inputName">Loan Interest (%)</label>
                <input type="number" id="inputName" name="interest" required="" class="form-control form-control-sm">
              </div>

            
            </div>
             <div class="card-footer">
               
        
      <div class="row">
        <div class="col-12">
         <a href="#" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="Submit Product" class="btn btn-success float-right">
        </div>
      </div>
    
          </div>
       

       
            <!-- /.card-body -->
          </div>
            {!!Form::close()!!}
          <!-- /.card -->
      
        <div class="col-md-6">
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Loan Pages</h3>

          
            </div>
            <div class="card-body ">
                
              <div class="table-responsive">
                <table class="table table-striped table-dashboard-two">
                  <thead>
                    <tr>

                      <th class="wd-lg-25p">Loan Name</th>
                      <th class="wd-lg-25p tx-right">Loan Tenure</th>
                      <th class="wd-lg-25p tx-right">Interest %</th>
                      <th class="wd-lg-25p tx-right">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($loan as $user)
                    <tr>
                      <td>{{ $user->name }}</td>
                      <td class="tx-right tx-medium tx-inverse">{{ $user->tenure }}</td>
                      <td class="tx-right tx-medium tx-inverse">{{ $user->interest }}</td>
                     
                      <td class="tx-right tx-medium tx-danger">
                         <button class="btn btn-sm btn-info  open-modal-user" value="{{$user->id}}">Action</button>
                     

                        <a href="{{url('getloandestroy/'.$user->id)}}" class="btn btn-danger">Drop</a>
                  
                      </td>
                    </tr>
                     @endforeach
              
                  </tbody>
                </table>
              </div><!-- table-responsive -->
            
             
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>

          
        </div>
         
    </section>
     <script type="text/javascript">
       

     </script>
@endsection