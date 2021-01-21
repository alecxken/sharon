 <div id="modaldemo4" class="modal">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content modal-content-demo">
          <div class="modal-header">
            <h6 class="modal-title">Permissions Previews</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
               {{ Form::open(['method'=> 'post','url' => 'permissions_store']) }}
          <div class="modal-body">
            <h6>Add New  Permissions</h6>   

                    <div class="form-group">
                        {{ Form::label('name', 'Name') }}
                        {{ Form::text('name', '', array('class' => 'form-control')) }}
                    </div><br>
                    @if(!$roles->isEmpty())
                        <h4>Assign Permission to Roles</h4>

                        @foreach ($roles as $role)
                            {{ Form::checkbox('roles[]',  $role->id ) }}
                            {{ Form::label($role->name, ucfirst($role->name)) }}<br>

                        @endforeach
                    @endif
                 

          </div><!-- modal-body -->
          <div class="modal-footer">
            <button type="submit" class="btn btn-indigo">Submit changes</button>
            <button type="button" data-dismiss="modal" class="btn btn-outline-light">Close</button>
          </div>
           {{ Form::close() }}
        </div>
      </div><!-- modal-dialog -->
    </div><!-- modal -->