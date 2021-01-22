@extends('layouts.master')

@section('content')

             <h2 class="az-content-title tx-24 mg-b-5">Hi, welcome back!</h2>
        <p class="mg-b-20">Your finance performance and monitoring dashboard template.</p>

        <div class="row row-sm">
        {{--   <div class="col-sm-6 col-lg-3">
            <div class="card card-dashboard-donut">
              <div class="card-header">
                <h6 class="card-title mg-b-10">Gross Profit Margin</h6>
                <p class="mg-b-0 tx-12 tx-gray-500">The profit you make on each dollar of sales... <a href="">Learn more</a></p>
              </div><!-- card-header -->
              <div class="card-body">
                <div class="az-donut-chart chart1">
                  <div class="slice one"></div>
                  <div class="slice two"></div>
                  <div class="chart-center">
                    <span></span>
                  </div>
                </div>
              </div><!-- card-body -->
            </div><!-- card -->
          </div> --}}
        
     
         @role('Admin')
            <div class="row row-sm">
              <div class="col-md-3">
                <div class="card card-dashboard-finance">
                  <h6 class="card-title">Total Customers</h6>
                  <span class="peity-bar" data-peity='{ "fill": ["#560bd0"], "height": 27, "width": 70 }'>7,5,9,10,1,4,4,7,5,10,4,4</span>
                  <h2><span></span>8</h2>
                  <span class="tx-12"><span class="tx-success tx-bold">18.2%</span> higher vs previous month</span>
                </div>
              </div><!-- col -->
              <div class="col-md-3">
                <div class="card card-dashboard-finance">
                  <h6 class="card-title">Total Borrowed</h6>
                  <span class="peity-bar" data-peity='{ "fill": ["#007bff"], "height": 27, "width": 70 }'>10,4,4,7,5,9,10,3,4,4,7,5</span>
                  <h2><span>Kes</span>32,370<small></small></h2>
                  <span class="tx-12"><span class="tx-danger tx-bold">0.7%</span> higher vs previous month</span>
                </div>
              </div><!-- col -->
              <div class="col-md-3">
                <div class="card card-dashboard-finance">
                  <h6 class="card-title">Interest Gained</h6>
                  <span class="peity-bar" data-peity='{ "fill": ["#00cccc"], "height": 27, "width": 70 }'>7,5,9,10,5,4,4,7,5,10,4,4</span>
                  <h2><span>Kes</span>9,112<small></small></h2>
                  <span class="tx-12"><span class="tx-success tx-bold">0.7%</span> higher vs previous month</span>
                </div>
              </div><!-- col -->
              <div class="col-md-3">
                <div class="card card-dashboard-finance">
                  <h6 class="card-title">Total Paid </h6>
                  <span class="peity-bar" data-peity='{ "fill": ["#f10075"], "height": 27, "width": 70 }'>1,4,4,7,5,10,4,7,5,9,10,4</span>
                  <h2><span>Kes</span>8,216<small></small></h2>
                  <span class="tx-12"><span class="tx-success tx-bold">0.7%</span> higher vs previous month</span>
                </div>
              </div><!-- col -->
            </div><!-- row -->
            @endrole
            <hr>

            <div class="row row-sm">
              <div class="col-md-3">
                <div class="card card-dashboard-finance">
                  <h6 class="card-title">Products Bought</h6>
                  
                  <h2><span>Pcs</span>3</h2>
                 <span class="tx-12"><span class="tx-danger tx-bold"></span> Products Taken on Loan</span>
                </div>
              </div><!-- col -->
              <div class="col-md-3">
                <div class="card card-dashboard-finance">
                  <h6 class="card-title">Active Loan</h6>
                   <h2><span>Kes</span>32,370<small></small></h2>
                  <span class="tx-12"><span class="tx-danger tx-bold">0.7%</span> higher vs previous month</span>
                </div>
              </div><!-- col -->
              <div class="col-md-3">
                <div class="card card-dashboard-finance">
                  <h6 class="card-title">Loan Balance</h6>
                   <h2><span>Kes</span>9,112<small></small></h2>
                  <span class="tx-12"><span class="tx-success tx-bold">0.7%</span> higher vs previous month</span>
                </div>
              </div><!-- col -->
              <div class="col-md-3">
                <div class="card card-dashboard-finance">
                  <h6 class="card-title">Total Paid </h6>
              
                  <h2><span>Kes</span>8,216<small></small></h2>
                  <span class="tx-12"><span class="tx-success tx-bold">0.7%</span> higher vs previous month</span>
                </div>
              </div><!-- col -->
            </div><!-- row -->
         
        
        </div><!-- row -->

        @section('extrajs')
    <script src="{{asset('lib/jquery.flot/jquery.flot.js')}}"></script>
    <script src="{{asset('lib/jquery.flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('lib/peity/jquery.peity.min.js')}}"></script>
    <script src="{{asset('js/chart.flot.sampledata.js')}}"></script>

      <script>
      $(function(){
        'use strict'

    


        // $.plot('#flotChart2', [{
        //     data: flotSampleData1,
        //     color: '#969dab'
        //   }], {
        //   series: {
        //     shadowSize: 0,
        //     lines: {
        //       show: true,
        //       lineWidth: 2,
        //       fill: true,
        //       fillColor: { colors: [ { opacity: 0 }, { opacity: 0.2 } ] }
        //     }
        //   },
        //   grid: {
        //     borderWidth: 0,
        //     labelMargin: 0
        //   },
        //   yaxis: { show: false },
        //   xaxis: { show: false }
        // });


        // Mini Bar charts
        $('.peity-bar').peity('bar');
      });
    </script>
        @endsection

@endsection
