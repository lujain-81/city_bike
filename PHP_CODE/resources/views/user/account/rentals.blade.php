@extends('user.layouts.master')

@section('body-class')
envato_tk_templates-template envato_tk_templates-template-elementor_header_footer single single-envato_tk_templates postid-12 wp-custom-logo qodef-qi--no-touch qi-addons-for-elementor-1.5.4 elementor-default elementor-template-full-width elementor-kit-7 elementor-page elementor-page-12
@endsection

@section('content')
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-4">
          <div class="list-group">
            <a href="{{route('user.account')}}" class="list-group-item list-group-item-action">
                Account
            </a>
            <a href="{{route('user.account.rentals')}}" class="list-group-item list-group-item-action active">My Retails</a>
            <a href="{{ route('user.account.reviews') }}" class="list-group-item list-group-item-action">Reviews</a>
            <a href="#" class="list-group-item list-group-item-action">Logout</a>
            </div>
        </div>
        <div class="col-md-8">
        @if(Session::has('flash_message'))
            <div style="background: #39b54a;color: #FFF;padding: 10px; text-align:center;">{{Session::get('flash_message')}}</div>
            @endif
            <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Vehicles Code</th>
                    <th>Choosen Data</th>
                    <th>Time From - To</th>
                    <th>Helmet</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $k => $item)
                <tr>
                    <td>
                        @foreach($item->vehicles as $v)
                            <label class="badge tag-success">
                                {{$v->CodNumber}}
                            </label>
                         @endforeach
                    </td>
                    <td>{{$item->Date}}</td>
                    <td>{{$item->TimeFrom}} - {{$item->TimeTo}}</td>
                    <td>{{$item->WithHelmet ? 'With Helmet' : 'Without Helmet'}}</td>
                    <td>{{$item->Amount}} SAR</td>
                    <td style="padding: 16px">
                        @if($item->Status == 'active')
                        <span class="tag tag-success mt-2">Active</span>
                        @else
                        <span class="tag tag-danger mt-2">Cancelled</span>
                        @endif
                    
                    </td>
                    <td>
                        <a href="{{route('user.account.rental', $item->RentalID)}}" class="btn btn-info" style="color: #FFF">
                            <i class="fa fa-eye"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            </table>
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
.tag-danger{
    background: #dc3545;
    color: #FFF;
    padding: 10px;
    border-radius: 10px;
    margin-top: 5px;

}
.tag-success{
    background: #198754;
    color: #FFF;
    padding: 10px;
    border-radius: 10px;
    margin-top: 5px;
}
</style>
@endsection
@section('js')
<script>
</script>
@endsection