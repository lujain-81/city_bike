@extends('panel.layouts.master')
@section('content')

<div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Create Spot</h4>
                  <p class="card-description">
                    Create New Spot.
                  </p>
                  {!!  Form::open(['route' => ['panel.spots.store'],  'method'=> 'post', 'files' => true, 'class' => 'forms-sample needs-validation']) !!}
                  @include('panel.spots.form')
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


