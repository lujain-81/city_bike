@extends('panel.layouts.master')
@section('content')

          
<div class="row">
          
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
               <div class="d-flex justify-content-between">
                <p class="card-title">Top Customers Chart</p>
                <a href="{{route('panel.customers.index')}}" class="text-info">View all</a>
               </div>
                <div id="sales-legend" class="chartjs-legend mt-4 mb-2"></div>
                <canvas id="sales-chart-cus"></canvas>
              </div>
            </div>
          </div>
        </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title mb-0">Top Customers Detail</p>
                  <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                          <th>Customer Name</th>
                          <th>Customer Phone</th>
                          <th>Customer Email</th>
                          <th>Total Amount</th>
                          <th>Count Rentails</th>
                        </tr>  
                      </thead>
                      <tbody>
                        @foreach($items as $k => $item)
                        <tr>
                          <td>{{@$item->Name}}</td>
                          <td>{{@$item->Phone}}</td>
                          <td>{{@$item->Email}}</td>
                          <td>{{$item->rentals()->where('Status', 'active')->sum('Amount')}} SAR</td>
                          <td>{{$item->rentals_count}}</td>
                        </tr>
                        @endforeach
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection


@section('js')
<script>
  var doughnutPieData = {
    datasets: [{
      data: @json($chart['data']),
      backgroundColor: @json($chart['background']),
      borderColor: @json($chart['border'])
    }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: @json($chart['labels'])
  };
 var doughnutPieOptions = {
    responsive: true,
    animation: {
      animateScale: true,
      animateRotate: true
    }
  };

  if ($("#sales-chart-cus").length) {
    var doughnutChartCanvas = $("#sales-chart-cus").get(0).getContext("2d");
    var doughnutChart = new Chart(doughnutChartCanvas, {
      type: 'doughnut',
      data: doughnutPieData,
      options: doughnutPieOptions
    });
  }
</script>
@endsection
