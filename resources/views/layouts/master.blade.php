<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <title>Users</title>

    <!-- vendor css -->
       <link href="{{asset('/lib/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('/lib/typicons.font/typicons.css')}}" rel="stylesheet">
    @yield('extracss')
    <!-- azia CSS -->
    <link rel="stylesheet" href="{{asset('/css/azia.css')}}">
    <script src="{{asset('/lib/jquery/jquery.min.js')}}"></script>

  </head>
  <body class="az-body">


    
    @include('layouts.masterside')

    <div class="az-content az-content-dashboard-three">
      @include('layouts.masternav')
      <div class="az-content-body az-content-body-dashboard-three">

          @if (session('status'))
        <div id="erros" class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4>Alert!</h4>

        <p> {{ session('status') }}</p>
      </div>
@elseif(session('error'))
<div id="erros" class="alert alert-warning alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4>Warning!</h4>

        <p> {{ session('error') }}</p>
      </div>
@elseif(session('danger'))
<div id="erros" class="alert alert-danger alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h4>Warning!</h4>

              <p> {{ session('danger') }}</p>
            </div>
@elseif(session('primary'))
<div id="erros" class="alert alert-primary alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h4>Warning!</h4>

              <p> {{ session('primary') }}</p>
            </div>

@endif
@if ($errors->any())
    <div id="erros" class="alert alert-danger alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h4>Input Fields Error!!</h4>
             @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </div>
@endif
      <!--   <h2 class="az-content-title mg-b-5">Hi, welcome back!</h2>
        <p class="mg-b-20 mg-lg-b-30">Your ad campaign performance dashboard template.</p>
 -->
     @yield('content')
        <!-- your content goes here -->
      </div><!-- az-content-body -->

      <div class="az-footer">
        <div class="container-fluid">
           <span>&copy;{{date('Y')}} Lunar System</span>
          <span>Designed by: Sharon</span>
        </div><!-- container -->
      </div><!-- az-footer -->
    </div><!-- az-content -->

      
    <script src="{{asset('/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('/lib/ionicons/ionicons.js')}}"></script>
    @yield('extrajs')
    <script src="{{asset('/js/azia.js')}}"></script>
    <script>
      $(function(){
        'use strict'

        if($('.az-iconbar .nav-link.active').length) {
          var targ = $('.az-iconbar .nav-link.active').attr('href');
          $(targ).addClass('show');

          if(window.matchMedia('(min-width: 1200px)').matches) {
            $('.az-iconbar-aside').addClass('show');
          }

          if(window.matchMedia('(min-width: 992px)').matches &&
            window.matchMedia('(max-width: 1199px)').matches) {
              $('.az-iconbar .nav-link.active').removeClass('active');
          }
        }

        $('.az-iconbar .nav-link').on('click', function(e){
          e.preventDefault();

          $(this).addClass('active');
          $(this).siblings().removeClass('active');

          $('.az-iconbar-aside').addClass('show');

          var targ = $(this).attr('href');
          $(targ).addClass('show');
          $(targ).siblings().removeClass('show');
        });

        $('.az-iconbar-toggle-menu').on('click', function(e){
          e.preventDefault();

          if(window.matchMedia('(min-width: 992px)').matches) {
            $('.az-iconbar .nav-link.active').removeClass('active');
            $('.az-iconbar-aside').removeClass('show');
          } else {
            $('body').removeClass('az-iconbar-show');
          }
        })

        $('#azIconbarShow').on('click', function(e){
          e.preventDefault();
          $('body').toggleClass('az-iconbar-show');
        });

      });
    </script>
  </body>
</html>
