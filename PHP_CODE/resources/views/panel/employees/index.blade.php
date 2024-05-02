@extends('panel.layouts.master')
@section('content')

<div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Show Employees</p>
                  <div class="row">
                    <div class="col-12 ">
                      <a href="{{route('panel.employees.create')}}" class="btn btn-success float-right">
                        Add New Employee <i class="mdi mdi-database-plus"></i>
                      </a>
                    </div>
                    <div class="col-12">
                      <div class="mt-2">
                        <table id="example1" class="display expandable-table" style="width:100%; height: auto;">
                          <thead>
                            <tr>
                              <th>ID</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Phone</th>
                              <th>Salary</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            @forelse($items as $k => $item)
                            <tr>
                              <td>{{ $item->EmployeeID }}</td>
                              <td>{{ $item->Name }}</td>
                              <td>{{ $item->Email }}</td>
                              <td>{{ $item->Phone }}</td>
                              <td>{{ $item->Salary }} SAR</td>
                              <td>
                                <div class="dropdown">
                                  <button type="button" class="btn btn-outline-info dropdown-toggle" id="dropdownMenuIconButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Actions
                                  </button>
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton3">
                                    <a class="dropdown-item" href="{{route('panel.employees.edit', $item->EmployeeID)}}">Edit</a>
                                    <a class="dropdown-item" href="{{route('panel.employees.destroy', $item->EmployeeID)}}" onclick="confirmDelete(this);" data-message="Are you sure you want to delete ({{$item->Name}})">Delete</a>
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


@section('js')
<script>
  setTimeout(() => {
    $('.active').removeClass('active');
    
  }, 200);
</script>
@endsection