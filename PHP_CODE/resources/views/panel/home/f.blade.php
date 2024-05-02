@extends('panel.layouts.master')
@section('content')
@include('panel.layouts.breadc', ['path' => [
          'Home' => route('panel.home'),
        ]])
@endsection


