@extends('panel.layouts.master')
@section('content')

<div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Create Customer</h4>
                  <p class="card-description">
                    Create New Customer.
                  </p>
                  {!!  Form::open(['route' => ['panel.customers.store'],  'method'=> 'post', 'files' => true, 'class' => 'forms-sample needs-validation']) !!}
                  @include('panel.customers.form')
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


