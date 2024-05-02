@extends('panel.layouts.master')
@section('content')

<div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Employee</h4>
                  <p class="card-description">
                    Edit ({{ $item->Name }}) Data.
                  </p>
                  {!! Form::model($item,['route' => ['panel.employees.update', $item->EmployeeID], 'method' => 'put','files' => true, 'class' => 'forms-sample needs-validation']) !!}

                  @include('panel.employees.form')
                  {!! Form::close() !!}
                </div>
              </div>
            </div>
            </div>
@endsection

@section('css')
@endsection


@section('js')
<script>
</script>
@endsection

