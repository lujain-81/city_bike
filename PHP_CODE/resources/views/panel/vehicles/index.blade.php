@extends('panel.layouts.master')
@section('content')

<div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Show Vehicles</p>
                  <div class="row">
                    <div class="col-12 ">
                      @php $route = auth('web')->check() ? 'panel' : 'employees'; @endphp
                      <a href="{{route($route . '.vehicles.create')}}" class="btn btn-success float-right">
                        Add New Vehicle <i class="mdi mdi-database-plus"></i>
                      </a>
                    </div>
                    <div class="col-12">
                      <div class="mt-2">
                        <table id="example1" class="display expandable-table" style="width:100%; height: auto;">
                          <thead>
                            <tr>
                              <th>ID</th>
                              <th>Image</th>
                              <th>Code Number</th>
                              <th>Price</th>
                              <th>Model</th>
                              <th>Spot Location</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            @forelse($items as $k => $item)
                            <tr>
                              <td>{{ $item->VehicleID }}</td>
                              <td>
                              <img src="{{url($item->Image)}}" style="width: 50px; height: 50px;" alt="">
                              </td>
                              <td>{{ $item->CodNumber }}</td>
                              <td>{{ $item->Price }} SAR</td>
                              <td>{{ $item->Model }}</td>
                              <td>{{ @$item->spot->Location }}</td>
                              <td>
                                <div class="dropdown">
                                  <button type="button" class="btn btn-outline-info dropdown-toggle" id="dropdownMenuIconButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Actions
                                  </button>
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton3">
                                    <a class="dropdown-item" href="{{route($route . '.vehicles.show', $item->VehicleID)}}">Show</a>
                                    <a class="dropdown-item" href="{{route($route . '.vehicles.edit', $item->VehicleID)}}">Edit</a>
                                    <a class="dropdown-item" href="{{route($route . '.vehicles.destroy', $item->VehicleID)}}" onclick="confirmDelete(this);" data-message="Are you sure you want to delete ({{$item->CodNumber}})">Delete</a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            @empty
                            <tr>
                              <th colspan="7" class="text-center">
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

