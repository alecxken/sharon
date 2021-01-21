 <div id="usermoadl" class="modal">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content modal-content-demo">
          <div class="modal-header">
            <h6 class="modal-title">User Previews</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
           {{ Form::open(['method'=>'POST','url'=>'user_update_data']) }}
          <div class="modal-body">
            <h6>Edit User Details</h6>
             {{-- Form model binding to automatically populate our fields with user data --}}
@csrf
 <div class="form-group">
        {{ Form::label('name', 'User ID') }}
        {{ Form::text('id', null, array('class' => 'form-control', 'readonly','id'=>'ids')) }}
    </div>
    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', null, array('class' => 'form-control', 'readonly','id'=>'names')) }}
    </div>

    <div class="form-group">
        {{ Form::label('email', 'Email') }}
        {{ Form::email('email', null, array('class' => 'form-control', 'readonly','id'=>'emails')) }}
    </div>

    <h5><b>Give Role</b></h5>

    <div class='form-group'>
        @foreach ($roles as $role)
            {{ Form::checkbox('roles[]',  $role->id ) }}
            {{ Form::label($role->name, ucfirst($role->name)) }}<br>

        @endforeach
    </div>
   

            
            

          </div><!-- modal-body -->
          <div class="modal-footer">
            <button type="submit" class="btn btn-indigo">Save changes</button>
            <button type="button" data-dismiss="modal" class="btn btn-outline-light">Close</button>
          </div>
           {{ Form::close() }}
        </div>
      </div><!-- modal-dialog -->
    </div><!-- modal -->