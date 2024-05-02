@extends('panel.layouts.master')
@section('content')

          <div class="row">
          
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                 <div class="d-flex justify-content-between">
                  <p class="card-title">Vehicle Rentails Report</p>
                  <a href="{{route('panel.rentals.index')}}" class="text-info">View all</a>
                 </div>
                  <p class="font-weight-500">The total number of rentails within this year.</p>
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
                  <p class="card-title mb-0">Vehicle Rentails Detail</p>
                  <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                          <th>Vehicle Code Number</th>
                          <th>Total Price</th>
                          <th>Count Rentails</th>
                        </tr>  
                      </thead>
                      <tbody>
                        @foreach($items as $k => $item)
                        <tr>
                          <td>{{$item['code']}}</td>
                          <td>{{$item['sum']}} SAR</td>
                          <td>{{$item['data']}}</td>
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
if ($("#sales-chart-cus").length) {
  var data = {
    labels: @json($chart['label']),
    datasets: [{
      label: '# of Rentals',
      data: @json($chart['data']),
      backgroundColor: @json($chart['backgroundColor']),
      borderColor: @json($chart['backgroundColor']),
      borderWidth: 1,
      fill: false
    }]
  };

  var options = {
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero: true
        }
      }]
    },
    legend: {
      display: false
    },
    elements: {
      point: {
        radius: 0
      }
    }

  };

  var barChartCanvas = $("#sales-chart-cus").get(0).getContext("2d");
    // This will get the first returned node in the jQuery collection.
    var barChart = new Chart(barChartCanvas, {
      type: 'bar',
      data: data,
      options: options
    });
}
</script>
@endsection
