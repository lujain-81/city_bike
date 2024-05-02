@extends('panel.layouts.master')
@section('content')

<div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Vehicle</h4>
                  <p class="card-description">
                    Edit ({{ $item->CodNumber }}) Data.
                  </p>
                  @php $route = auth('web')->check() ? 'panel' : 'employees'; @endphp

                  {!! Form::model($item,['route' => [$route.'.vehicles.update', $item->VehicleID], 'method' => 'put','files' => true, 'class' => 'forms-sample needs-validation']) !!}

                  @include('panel.vehicles.form')
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

