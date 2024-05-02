@extends('panel.layouts.master')
@section('content')

<div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Show Vehicle</p>
                  <div class="row">
                    <div class="col-12 ">
                      
                      
                    </div>
                    <div class="col-12">
                      <div class="mt-2">
                      <table id="example1" class="table table-striped" style="width:100%; height: auto;">
                          <tbody>
                            <tr>
                              <th>QR Code</th>
                              <td>
                              <div class="demo-qr"></div>
                              </td>
                            </tr>
                            <tr>
                              <th>Spot</th>
                              <td>{{$item->spot->Location}}</td>
                            </tr>
                            <tr>
                              <th>Code Number</th>
                              <td>{{$item->CodNumber}}</td>
                            </tr>
                            <tr>
                              <th>Price</th>
                              <td>{{$item->Price }} SAR</td>
                            </tr>
                            <tr>
                              <th>Model</th>
                              <td>{{$item->Model}}</td>
                            </tr>
                            <tr>
                              <th>Type</th>
                              <td>{{$item->Type}}</td>
                            </tr>
                            <tr>
                              <th>Manufacturer</th>
                              <td>{{$item->Manufacturer}}</td>
                            </tr>
                            <tr>
                              <th>Image</th>
                              <td>
                                <img src="{{url($item->Image)}}" style="width: 300px; height: 300px;" alt="">
                              </td>
                            </tr>
                          </tbody>
                      </table>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>

                
              </div>
            </div>
@endsection

@section('js')

<script src="{{url('lib/jquery-3.3.1.slim.min.js')}}"></script>

<script src="{{url('lib/jquery.qrcode.js')}}"></script>
<script src="{{url('lib/qrcode.js')}}"></script>

<script>
  $(".demo-qr").qrcode({

text:"{{route('user.book', $item->VehicleID)}}",
label: 'Book Now'

});
</script>


@endsection