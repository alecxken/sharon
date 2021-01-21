
     <div id="modaldemo5" class="modal">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content modal-content-demo">
          <div class="modal-header">
            <h6 class="modal-title">Roles Previews</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
               {{ Form::open(['method'=> 'post','url' => 'roles_admin_store']) }}
          <div class="modal-body">
            <h6>Add New  Roles</h6>   

                    <div class="form-group">
                        {{ Form::label('name', 'Name') }}
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                        {{ Form::text('name', null, array('class' => 'form-control')) }}
                    </div>

                    <h5><b>Assign Permissions</b></h5>

                    <div class='form-group'>
                        @foreach ($permissions as $permission)
                            {{ Form::checkbox('permissions[]',  $permission->id ) }}
                            {{ Form::label($permission->name, ucfirst($permission->name)) }}<br>

                        @endforeach
                    </div>

                 

          </div><!-- modal-body -->
          <div class="modal-footer">
            <button type="submit" class="btn btn-indigo">Submit changes</button>
            <button type="button" data-dismiss="modal" class="btn btn-outline-light">Close</button>
          </div>
           {{ Form::close() }}
        </div>
      </div><!-- modal-dialog -->
    </div><!-- modal -->