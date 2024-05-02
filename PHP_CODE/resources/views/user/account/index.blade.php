@extends('user.layouts.master')

@section('body-class')
envato_tk_templates-template envato_tk_templates-template-elementor_header_footer single single-envato_tk_templates postid-12 wp-custom-logo qodef-qi--no-touch qi-addons-for-elementor-1.5.4 elementor-default elementor-template-full-width elementor-kit-7 elementor-page elementor-page-12
@endsection

@section('content')
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-4">
          <div class="list-group">
            <a href="{{route('user.account')}}" class="list-group-item list-group-item-action active">
                Account
            </a>
            <a href="{{route('user.account.rentals')}}" class="list-group-item list-group-item-action">My Retails</a>
            <a href="{{ route('user.account.reviews') }}" class="list-group-item list-group-item-action">Reviews</a>
            <a href="{{ route('user.account.contacts') }}" class="list-group-item list-group-item-action">Contact</a>
            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="list-group-item list-group-item-action">Logout</a>
            </div>
        </div>
        <div class="col-md-8">
        @if(Session::has('flash_message'))
            <div style="background: #39b54a;color: #FFF;padding: 10px; text-align:center;">{{Session::get('flash_message')}}</div>
            @endif
            <form action="{{route('user.account.update')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="Name" value="{{$auth->Name}}">
                    </div>
                    <div class="col-md-6">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="Email" value="{{$auth->Email}}">
                    </div>
                    <div class="col-md-6">
                        <label for="">Phone</label>
                        <input type="text" class="form-control" name="Phone" value="{{$auth->Phone}}">
                    </div>
                    <div class="col-md-6">
                        <label for="">National ID</label>
                        <input type="text" class="form-control" name="NationalID" value="{{$auth->NationalID}}">
                    </div>
                    <div class="col-md-12">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="Password">
                    </div>
                    <div class="col-md-6 mt-2">
                        <button type="submit" class="btn btn-primary">Update Account</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section('css')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
.list-group-item.active {
    z-index: 2;
    color: var(--bs-list-group-active-color);
    background-color: #ff5722;
    border-color: #ff5722;
}
</style>
@endsection
@section('js')
<script>
</script>
@endsection