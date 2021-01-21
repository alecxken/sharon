 <div id="modaldemo3" class="modal">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content modal-content-demo">
          <div class="modal-header">
            <h6 class="modal-title">User Previews</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
           {{ Form::open(array('url' => 'user_store_data')) }}
          <div class="modal-body">
            <h6>Add New  Users</h6>
           
   

                <div class="form-group">
                    {{ Form::label('name', 'Full Name') }}
                    {{ Form::text('name', '', array('class' => 'form-control')) }}
                </div>

                <div class="form-group">
                    {{ Form::label('name', 'Email Address') }}
                    {{ Form::text('email', '', array('class' => 'form-control')) }}
                </div>
                
               {{--    <div class="form-group">
                    {{ Form::label('name', 'Phone Number') }}
                    {{ Form::number('phone', '', array('class' => 'form-control')) }}
                </div> --}}

              {{--   <div class="form-group">
                    {{ Form::label('name', 'Default Password') }}
                    {{ Form::text('password', '12345678', array('class' => 'form-control')) }}
                </div> --}}


          </div><!-- modal-body -->
          <div class="modal-footer">
            <button type="submit" class="btn btn-indigo">Save changes</button>
            <button type="button" data-dismiss="modal" class="btn btn-outline-light">Close</button>
          </div>
           {{ Form::close() }}
        </div>
      </div><!-- modal-dialog -->
    </div><!-- modal -->