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
            <a href="{{ route('user.account.contacts') }}" class="list-group-item list-group-item-action">Contact</a>
            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="list-group-item list-group-item-action">Logout</a>
            </div>
        </div>
        <div class="col-md-8">
        @if(Session::has('flash_message'))
            <div style="background: #39b54a;color: #FFF;padding: 10px; text-align:center;">{{Session::get('flash_message')}}</div>
            @endif
            <table id="example1" class="table table-striped" style="width:100%; height: auto;">
                          <tbody>
                            <tr>
                              <th>Vehicles Code</th>
                              <td>
                                @foreach($item->vehicles as $v)
                                <label class="badge tag-success">
                                  {{$v->CodNumber}}
                                </label>
                                @endforeach
                              </td>
                            </tr>
                            <tr>
                              <th>Date</th>
                              <td>{{$item->Date}}</td>
                            </tr>
                            <tr>
                              <th>Time From - To</th>
                              <td>{{$item->TimeFrom}} - {{ $item->TimeTo }}</td>
                            </tr>
                            <tr>
                              <th>Helmet</th>
                              <td>{{$item->WithHelmet ? 'With Helmet' : 'Without Helmet'}}</td>
                            </tr>
                            <tr>
                              <th>Amount</th>
                              <td>{{$item->Amount}} SAR</td>
                            </tr>
                            <tr>
                              <th>Rantal Date Time</th>
                              <td>{{$item->RentalDateTime}}</td>
                            </tr>
                            <tr>
                              <th>Status</th>
                              <td>
                                @if($item->Status == 'active')
                                <label class="badge tag-success">
                                  Active
                                </label>
                                @else
                                <label class="badge tag-danger">
                                  Cancelled
                                </label>
                                @endif
                              </td>
                            </tr>
                            @if($item->Status == 'active')
                            <tr>
                                <th>Review</th>
                                <td>
                                <form action="{{route('user.account.review', $item->RentalID)}}" method="post">
                                  @csrf
                                  <div class="col-md-12 mb-4">
                                    <label for="rate">Rate</label>
                                    <select name="rate" class="form-control">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                  </div>
                                  <div class="col-md-12">
                                    <label for="review">Review</label>
                                    <textarea name="comment" class="form-control" cols="30" rows="10" placeholder="Review..."></textarea>
                                  </div>
                                  <button type="submit" class="btn btn-success mt-4">Send Review</button>
                                </form>
                                </td>
                            </tr>
                            @endif
                            @if($item->Status == 'cancelled')
                            <tr>
                              <th>Cancel Date Time</th>
                              <td>
                              {{ $item->canecllation->DateTime }}
                              </td>
                            </tr>
                            <tr>
                              <th>Cancel Reasons</th>
                              <td>
                                {{$item->canecllation->Reasons}}
                              </td>
                            </tr>
                            @else
                            <tr>
                              <th>Action</th>
                              <td>
                                <a href="#" class="btn btn-danger btn-cans" style="color: #FFF"><i class="fa fa-times"></i> Cancel</a>
                              </td>
                            </tr>
                            <tr style="display: none" id="form-area">
                              <th>Reasons</th>
                              <td>
                                <form action="{{route('user.account.rental.cancel', $item->RentalID)}}" method="post">
                                  @csrf
                                  <textarea name="reason" class="form-control" cols="30" rows="10" placeholder="Reason..."></textarea>
                                  <button type="submit" class="btn btn-success mt-4">Save</button>
                                </form>
                              </td>
                            </tr>
                            @endif
                            
                          </tbody>
                      </table>
        </div>
    </div>
</div>

@endsection

@section('css')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js" integrity="sha512-J9QfbPuFlqGD2CYVCa6zn8/7PEgZnGpM5qtFOBZgwujjDnG5w5Fjx46YzqvIh/ORstcj7luStvvIHkisQi5SKw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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
    $('.btn-cans').on('click', function(){
    $('#form-area').fadeIn();
  });
</script>
@endsection