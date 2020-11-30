 <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">@auth{{Auth::user()->name}}@endauth</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
{{-- 
           <li class="nav-item">
                <a href="#" class="nav-link active ">
                  <i class="fas fa-link"></i>
                  <p>Dashboard</p>
                </a>
              </li> --}}
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-link"></i>
              <p>
               Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-link"></i>
                  <p>My Profile</p>
                </a>
              </li>
            </ul>

          


              <ul class="nav nav-treeview">
            
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-link"></i>
                  <p>Shop</p>
                </a>
              </li>
            </ul>

              <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Settings                 <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              
              <li class="nav-item">
                <a href="{{url('product-create')}}" class="nav-link">
                  <i class="fas fa-link"></i>
                  <p> Create New Product</p>
                </a>
                  <a href="{{url('product-view')}}" class="nav-link">
                  <i class="fas fa-link"></i>
                  <p> View All Products</p>
                </a>
                  <a href="{{url('#')}}" class="nav-link">
                  <i class="fas fa-link"></i>
                  <p> Stock Levels</p>
                </a>
               
              </li>
           
            </ul>
          </li>

                <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Reports                 <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              
              <li class="nav-item">
                <a href="{{url('product-create')}}" class="nav-link">
                  <i class="fas fa-link"></i>
                  <p> View Disbursed Data</p>
                </a>
             
               
              </li>
           
            </ul>
          </li>
          </li>
      {{--     <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li> --}}
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>