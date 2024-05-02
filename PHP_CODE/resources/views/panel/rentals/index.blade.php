@extends('panel.layouts.master')
@section('content')

<div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Rentals</p>
                  <div class="row">
                    <div class="col-12 ">
                      
                    </div>
                    <div class="col-12">
                      <div class="mt-2">
                        <table id="example1" class="display expandable-table" style="width:100%; height: auto;">
                          <thead>
                          <tr>
                              <th>ID</th>
                              <th>Customer Name</th>
                              <th>Vehicle Code</th>
                              <th>Date</th>
                              <th>Time From</th>
                              <th>Time To</th>
                              <th>Amount</th>
                              <th>Status</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            @forelse($items as $k => $item)
                            <tr>
                              <td>{{ $item->RentalID }}</td>
                              <td>{{ @$item->customer->Name }}</td>
                              <td>
                              @foreach($item->vehicles as $v)
                                  <label class="badge badge-success">
                                      {{$v->CodNumber}}
                                  </label>
                              @endforeach
                              </td>
                              <td>{{ $item->Date }}</td>
                              <td>{{ $item->TimeFrom }}</td>
                              <td>{{ $item->TimeTo }}</td>
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
                              <td>
                                <div class="dropdown">
                                  <button type="button" class="btn btn-outline-info dropdown-toggle" id="dropdownMenuIconButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Actions
                                  </button>
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton3">
                                    <a class="dropdown-item" href="{{route('panel.rentals.show', $item->RentalID)}}">Show</a>
                                    <a class="dropdown-item" href="{{route('panel.rentals.cancel', $item->RentalID)}}" onclick="confirmDelete(this);" data-message="Are you sure you want to delete ({{$item->Location}})">Cancel</a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            @empty
                            <tr>
                              <th colspan="6" class="text-center">
                                No Data!!
                              </th>
                            </tr>
                            @endforelse
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
