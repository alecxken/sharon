@extends('layouts.template')

@section('content')

    <section class="content">
      <div class="row">

        <div class="col-md-12">
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Product Stock Settings</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body table-responsive">
                  <table id="example1" class="table table-bordered table-striped table-sm">
               <thead>
                 <tr class="box-success">  
                  <th>Image</th>
                   <th>Name</th>
                   <th>Price</th>
                   <th>Current Stock</th>
                      
                   <th>Action</th>                               
                </tr>
              </thead>
               <tbody> 
                  @if(!empty($data))
                   @foreach ($data as $user)
                      <tr>
                        <td><div class="widget-user-image">
                <img class="img-circle elevation-2" width="68px" height="68px" src="{{asset('images/'.$user->image)}}" alt="User Avatar">
              </div></td>
                         <td>{{$user->name}}</td>
                         <td>{{$user->price}}</td>
                          <td>{{$user->current_stock_level}}</td>
                  
                    
                         <td>
                          <a href="{{url('buy-prod/'.$user->id)}}" class="btn btn-success btn-xs">Buy Product</a>

                          <a href="{{url('store-drop/'.$user->id
)}}" class="btn btn-danger btn-xs">Drop</a></td>
                      </tr>
                  @endforeach
                  @endif
              </tbody>
              </table>
             
             
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
   
    </section>
     <script type="text/javascript">
       

     </script>
@endsection