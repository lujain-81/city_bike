@extends('panel.layouts.master')
@section('content')

<div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Show Rental Invoice</p>
                  <div class="row">
                    <div class="col-12 ">
                      
                    </div>
                    <div class="col-12">
                      <div class="mt-2">
                        <table id="example1" class="table table-striped" style="width:100%; height: auto;">
                          <tbody>
                            <tr>
                              <th>Customer Name</th>
                              <td>{{$item->customer->Name}}</td>
                            </tr>
                            <tr>
                              <th>Vehicle Code</th>
                              <td>
                              @foreach($item->vehicles as $v)
                                  <label class="badge badge-success">
                                      {{$v->CodNumber}}
                                  </label>
                              @endforeach
                              </td>
                            </tr>
                            <tr>
                              <th>Date</th>
                              <td>{{$item->Date}}</td>
                            </tr>
                            <tr>
                              <th>Time From - To</th>
                              <td>{{$item->TimeFrom}} - {{ $item->TimeTo }}</td>
                            </tr>
                            <tr>
                              <th>Helmet</th>
                              <td>{{$item->WithHelmet ? 'With Helmet' : 'Without Helmet'}}</td>
                            </tr>
                            <tr>
                              <th>Amount</th>
                              <td>{{$item->Amount}} SAR</td>
                            </tr>
                            <tr>
                              <th>Rantal Date Time</th>
                              <td>{{$item->RentalDateTime}}</td>
                            </tr>
                            <tr>
                              <th>Status</th>
                              <td>
                                @if($item->Status == 'active')
                                <label class="badge badge-success">
                                  Active
                                </label>
                                @else
                                <label class="badge badge-danger">
                                  Cancelled
                                </label>
                                @endif
                              </td>
                            </tr>
                            @if($item->Status == 'cancelled')
                            <tr>
                              <th>Cancel Date Time</th>
                              <td>
                              {{ @$item->canecllation->DateTime }}
                              </td>
                            </tr>
                            <tr>
                              <th>Cancel Reasons</th>
                              <td>
                                {{@$item->canecllation->Reasons}}
                              </td>
                            </tr>
                            @else
                            <tr>
                              <th>Action</th>
                              <td>
                                <a href="#" class="btn btn-danger btn-cans" ><i class="fa fa-times"></i> Cancel</a>
                              </td>
                            </tr>
                            <tr style="display: none" id="form-area">
                              <th>Reasons</th>
                              <td>
                                <form action="{{route('panel.rentals.cancel', $item->RentalID)}}" method="post">
                                  @csrf
                                  <textarea name="reason" class="form-control" cols="30" rows="10" placeholder="Reason..."></textarea>
                                  <button type="submit" class="btn btn-success mt-4">Save</button>
                                </form>
                              </td>
                            </tr>
                            @endif
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
<script>
  $('.btn-cans').on('click', function(){
    $('#form-area').fadeIn();
  });
  setTimeout(() => {
    $('.active').removeClass('active');
    
  }, 200);
</script>

@endsection
