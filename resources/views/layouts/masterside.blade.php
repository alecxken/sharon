    <div class="az-iconbar">
      <a href="" class="az-iconbar-logo"><i class="typcn typcn-chart-bar-outline"></i></a>
      <nav class="nav">
        <a href="#asideDashboard" class="nav-link {{ (request()->is('home')) ? 'active' : '' }}"><i class="typcn typcn-device-laptop"></i></a>
      <!--   <a href="#shopping" class="nav-link"><i class="typcn typcn-shopping-cart"></i></a> -->
           <a href="#asideAppsPages" class="nav-link {{ (request()->is('product-view')) ? 'active' : '' }} {{ (request()->is('product-create')) ? 'active' : '' }}"><i class="typcn typcn-group-outline"></i></a>
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
           <h6 class="az-iconbar-title">Admin Dashbord</h6>
          <small class="az-iconbar-text">The Tabs below assist on system management</small>

          <nav class="nav">
            <a href="dashboard-one.html" class="nav-link">Admin Board</a>
            <a href="{{url('user_index')}}" class="nav-link">User Administration</a>
          </nav>
        </div>
        <div id="asideAppsPages" class="az-iconbar-pane">
          <h6 class="az-iconbar-title">Managers &amp; Board</h6>
          <small class="az-iconbar-text">Manage stock and Lending.</small>
          <nav class="nav">
            <a href="{{url('product-create')}} {{ (request()->is('product-create')) ? 'active' : '' }}" class="nav-link">Product Creation</a>
            <a href="{{url('product-view')}}" class="nav-link">Stock Management</a>
            <a href="app-calendar.html" class="nav-link">Credit Settings</a>
  
          </nav>
        </div><!-- az-iconbar-pane -->

        <div id="shopping" class="az-iconbar-pane">
          <h6 class="az-iconbar-title">Products Section</h6>
          <small class="az-iconbar-text">You Want it Get It.</small>
          <nav class="nav">
            <a href="app-mail.html" class="nav-link">Shop</a>
            <a href="app-chat.html" class="nav-link">My Kopa Wallet</a>
            <a href="app-calendar.html" class="nav-link">My Repayments</a>
  
          </nav>
        </div><!-- az-iconbar-pane -->
      </div><!-- az-iconbar-body -->
    </div><!-- az-iconbar-aside -->