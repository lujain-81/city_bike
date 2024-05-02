@extends('panel.layouts.master')
@section('content')

<div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Create Admin</h4>
                  <p class="card-description">
                    Create New Admin.
                  </p>
                  {!!  Form::open(['route' => ['panel.admins.store'],  'method'=> 'post', 'files' => true, 'class' => 'forms-sample needs-validation']) !!}
                  @include('panel.admins.form')
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


