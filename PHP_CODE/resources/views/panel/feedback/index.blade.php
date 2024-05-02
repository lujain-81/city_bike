@extends('panel.layouts.master')
@section('content')

<div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Show Feedback</p>
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
                              <th>Rate</th>
                              <th>Comment</th>
                              <th>Status</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            @forelse($items as $k => $item)
                            <tr>
                              <td>{{ $item->FeedbackID }}</td>
                              <td>{{ @$item->customer->Name }}</td>
                              <td>{{ $item->Rate }}/5</td>
                              <td>{{ $item->Comment }}</td>
                              <td>
                                @if($item->Status)
                                <label class="badge badge-success">
                                  Active
                                </label>
                                @else
                                <label class="badge badge-danger">
                                  In Active
                                </label>
                                @endif
                              </td>
                              <td>
                                <div class="dropdown">
                                  <button type="button" class="btn btn-outline-info dropdown-toggle" id="dropdownMenuIconButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Actions
                                  </button>
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton3">
                                    <a class="dropdown-item" href="{{route('panel.feedback.changeStatus', ['id' => $item->FeedbackID])}}" onclick="confirmChangeStatus(this);" data-message="Are you sure you want to change status of feedback?">Change Status</a>
                                    <a class="dropdown-item" href="{{route('panel.feedback.destroy', $item->FeedbackID)}}" onclick="confirmDelete(this);" data-message="Are you sure you want to delete ({{$item->Location}})">Delete</a>
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
