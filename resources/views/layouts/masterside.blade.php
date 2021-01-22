    <div class="az-iconbar">
      <a href="" class="az-iconbar-logo"><i class="typcn typcn-chart-bar-outline"></i></a>
      <nav class="nav">
        <a href="#asideDashboard" class="nav-link {{ (request()->is('home')) ? 'active' : '' }} {{ (request()->is('admin')) ? 'active' : '' }}"><i class="typcn typcn-device-laptop"></i></a>
        
           <a href="#asideAppsPages" class="nav-link {{ (request()->is('product-view')) ? 'active' : '' }} {{ (request()->is('product-create')) ? 'active' : '' }}"><i class="typcn typcn-group-outline"></i></a>
           <a href="#shopping" class="nav-link"><i class="fa fa-file"></i></a>
      </nav>
      <div class="az-iconbar-bottom">
        <a href="" class="az-iconbar-help"><i class="far fa-question-circle"></i></a>
        <a href="" class="az-img-user online"><img src="https://via.placeholder.com/500x500" alt=""></a>
      </div><!-- az-iconbar-bottom -->
    </div><!-- az-iconbar -->

         <div class="az-iconbar-aside">
      <div class="az-iconbar-header">
        <a href="" class="az-logo">L<span>una</span>R</a>
        <a href="" class="az-iconbar-toggle-menu">
          <i class="icon ion-md-arrow-back"></i>
          <i class="icon ion-md-close"></i>
        </a>
      </div><!-- az-iconbar-header -->
      <div class="az-iconbar-body">
        <div id="asideDashboard" class="az-iconbar-pane">
           <h6 class="az-iconbar-title">Lunar Dashbord</h6>
          <small class="az-iconbar-text">Manage your Items Here</small>

          <nav class="nav">
            <a href="{{url('home')}}" class="nav-link {{ (request()->is('home')) ? 'active' : '' }}">Dashboard</a>
          @role('Admin')  <a href="{{url('admin')}}" class="nav-link">User Administration</a>
            <a href="{{url('')}}" class="nav-link">Loan Settings</a> @endrole
          </nav>
        </div>
        <div id="asideAppsPages" class="az-iconbar-pane">
          <h6 class="az-iconbar-title">Managers &amp; Board</h6>
          <small class="az-iconbar-text">Manage stock and Lending.</small>
          <nav class="nav">
            <a href="{{url('product-create')}} {{ (request()->is('product-create')) ? 'active' : '' }}" class="nav-link">Product Creation</a>
            <a href="{{url('product-view')}}" class="nav-link">Product View</a>
            <a href="{{url('Loan')}}" class="nav-link">Product View</a>
            <a href="" class="nav-link">Credit Settings</a>
  
          </nav>
        </div><!-- az-iconbar-pane -->

        <div id="shopping" class="az-iconbar-pane">
          <h6 class="az-iconbar-title">Reports Section</h6>
          <small class="az-iconbar-text">Get All your reports.</small>
          <nav class="nav">
            <a href="" class="nav-link">My Reports</a>
            <a href="" class="nav-link">Disbursed Loans</a>
            <a href="" class="nav-link">Repayed Loans</a>
  
          </nav>
        </div><!-- az-iconbar-pane -->
      </div><!-- az-iconbar-body -->
    </div><!-- az-iconbar-aside -->