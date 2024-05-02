@extends('user.layouts.master')

@section('body-class')
envato_tk_templates-template envato_tk_templates-template-elementor_header_footer single single-envato_tk_templates postid-12 wp-custom-logo qodef-qi--no-touch qi-addons-for-elementor-1.5.4 elementor-default elementor-template-full-width elementor-kit-7 elementor-page elementor-page-12
@endsection

@section('content')

<div class="container wrapper mt-5 mb-5">
@include('user.messages')
@if(Session::has('flash_message'))
<div style="background: #39b54a;color: #FFF;padding: 10px; text-align:center;">{{Session::get('flash_message')}}</div>
<br><br>
@endif

            <div class="row cart-body">
                <form class="row" method="post" action="{{route('user.checkout')}}">
                    @csrf
                <div style="    border-right: 1px solid #9b9b9b;" class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-push-6 col-sm-push-6">
                    <!--REVIEW ORDER-->
                    <div style="background: white; padding: 20px;" class="panel panel-info">
                        <div class="panel-heading text-center">
                        <i class="fa fa-list"></i> Request Details
                        </div>
                        <div class="panel-body">
                            @php $i = 0; @endphp
                            @forelse($items as $k => $item)

                            <div class="row {{ !$i ? 'mt-2' : '' }}">
                                <div class="col-sm-3 col-xs-3">
                                    <img class="img-responsive" style="width: 70px; height: 70px" src="{{$item->options->image}}" />
                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="col-xs-12">{{  $item->name }}</div>
                                    <div class="col-xs-12"><small>Code:<span>{{$item->options->code}}</span></small></div>
                                </div>
                                <div class="col-sm-3 col-xs-3 text-right">
                                    <h6><span>SAR </span>{{$item->price}}</h6>
                                </div>
                                <div class="col-sm-2 col-xs-2 text-right">
                                    <a href="{{route('user.cart.remove', $k)}}"><i class="fa fa-times"></i></a>
                                </div>
                            </div>
                            <div class="form-group"><hr /></div>
                            @empty
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <div class="alert alert-warning text-center">There is nothing to checkout</div>
                                </div>
                            </div>
                            <div class="form-group"><hr /></div>
                            @php $i += 1; @endphp

                            @endforelse
                            <div class="row">
                                <div class="col-xs-12">
                                    <strong>Total</strong>
                                    <div style="float: right"><span>SAR </span><span id="cart-total">{{Cart::subtotal(2, '.', ',')}}</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--REVIEW ORDER END-->
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-pull-6 col-sm-pull-6">
                    @if(auth('customers')->check())
                    @if(Cart::count() > 0)
                    <div style="background: white; padding: 20px;" class="panel panel-info">
                            <div class="panel-heading text-center"><span><i class="fa fa-clock"></i></span> Date And Time</div>
                            <div class="panel-body">
                            <div class="form-group mt-2">
                                    <div class="col-md-12"><strong>Helmet:</strong></div>
                                    <div class="col-md-12">
                                        <input name="WithHelmet" type="radio" {{ old('WithHelmet') == 1 ? 'checked' : '' }} value="1"> With Helmet
                                        <input name="WithHelmet" type="radio" {{ old('WithHelmet') == 0 ? 'checked' : '' }} value="0"> Without Helmet
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12"><strong>Date:</strong></div>
                                    <div class="col-md-12">
                                        <input type="date" class="form-control" name="date" min="{{ date('Y-m-d') }}" value="{{old('date')}}" />
                                    </div>
                                </div>
                                <div class="form-group timepicker-ui">
                                    <div class="col-md-12"><strong>From Time:</strong></div>
                                    <div class="col-md-12"><input type="text" class="form-control timepicker-ui-input" onchange="clcTotal();" name="TimeFrom" value="{{old('TimeFrom')}}" /></div>
                                </div>

                                <div class="form-group timepicker-uit">
                                    <div class="col-md-12"><strong>To Time:</strong></div>
                                    <div class="col-md-12"><input type="text" class="form-control timepicker-ui-input" id="dd" onchange="clcTotal();" name="TimeTo" value="{{old('TimeTo')}}" /></div>
                                </div>
                            </div>
                        </div>
                        <!--CREDIT CART PAYMENT-->
                        <div style="background: white; padding: 20px;" class="panel panel-info mt-5">
                            <div class="panel-heading text-center"><span><i class="fa fa-lock"></i></span> Secure Payment</div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <div class="col-md-12"><strong>Card Type:</strong></div>
                                    <div class="col-md-12">
                                        <select id="CreditCardType" name="CreditCardType" class="form-control">
                                            <option value="visa">Visa</option>
                                            <option value="master_card">MasterCard</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12"><strong> Card Number:</strong></div>
                                    <div class="col-md-12"><input type="text" class="form-control" value="{{old('card_name')}}" name="card_name" pattern="\d*" maxlength="14" required /></div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12"><strong>Card Holder Name:</strong></div>
                                    <div class="col-md-12"><input type="text" class="form-control" value="{{old('card_number')}}"  name="card_number" required /></div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12"><strong>Card CVV:</strong></div>
                                    <div class="col-md-12"><input type="text" pattern="\d*" maxlength="3" class="form-control" maxlength="3" value="{{old('cvv')}}" name="cvv" required /></div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <strong>Expiration Date</strong>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            @php
                                            $months = ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12'];
                                            @endphp
                                        <select class="form-control" name="expire_month" required>
                                            <option value="">Month</option>
                                            @foreach($months as $mon)
                                                <option value="{{ $mon }}" {{ old('expire_month') == $mon ? 'selected' : '' }}>{{ $mon }}</option>
                                                @endforeach
                                    </select>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            @php
                                            $years = ['2025', '2026', '2027', '2028', '2029', '2030', '2031', '2032'];
                                            @endphp
                                        <select class="form-control" name="expire_year" required>
                                            <option value="">Year</option>
                                            @foreach($years as $year)
                                                <option value="{{ $year }}" {{ old('expire_year') == $year ? 'selected' : '' }}>{{$year}}</option>
                                                @endforeach
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <span>Pay secure using your credit card.</span>
                                    </div>
                                    <div class="col-md-12">
                                        <ul class="cards">
                                            <li class="visa hand">Visa</li>
                                            <li class="mastercard hand">MasterCard</li>
                                            <!-- <li class="amex hand">Amex</li> -->
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="form-group row mt-5">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <button type="submit" class="btn btn-primary btn-submit-fix">Send Request</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--CREDIT CART PAYMENT END-->
                    @endif
                    @else
                    <div class="panel panel-info">
                        <div class="col-md-12">
                            <div class="alert alert-warning text-center">Login To Checkout</div>
                        </div>
                    </div>

                    @endif
                    </div>

                </form>
            </div>
    </div>
    <br> <br> <br> <br> <br>
@endsection

@section('css')
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
html,body,.wrapper{
    background: #f7f7f7;
}
.steps {
    margin-top: -41px;
    display: inline-block;
    float: right;
    font-size: 16px
}
.step {
    float: left;
    background: white;
    padding: 7px 13px;
    border-radius: 1px;
    text-align: center;
    width: 100px;
    position: relative
}
.step_line {
    margin: 0;
    width: 0;
    height: 0;
    border-left: 16px solid #fff;
    border-top: 16px solid transparent;
    border-bottom: 16px solid transparent;
    z-index: 1008;
    position: absolute;
    left: 99px;
    top: 1px
}
.step_line.backline {
    border-left: 20px solid #f7f7f7;
    border-top: 20px solid transparent;
    border-bottom: 20px solid transparent;
    z-index: 1006;
    position: absolute;
    left: 99px;
    top: -3px
}
.step_complete {
    background: #357ebd
}
.step_complete a.check-bc, .step_complete a.check-bc:hover,.afix-1,.afix-1:hover{
    color: #eee;
}
.step_line.step_complete {
    background: 0;
    border-left: 16px solid #357ebd
}
.step_thankyou {
    float: left;
    background: white;
    padding: 7px 13px;
    border-radius: 1px;
    text-align: center;
    width: 100px;
}
.step.check_step {
    margin-left: 5px;
}
.ch_pp {
    text-decoration: underline;
}
.ch_pp.sip {
    margin-left: 10px;
}
.check-bc,
.check-bc:hover {
    color: #222;
}
.SuccessField {
    border-color: #458845 !important;
    -webkit-box-shadow: 0 0 7px #9acc9a !important;
    -moz-box-shadow: 0 0 7px #9acc9a !important;
    box-shadow: 0 0 7px #9acc9a !important;
    background: #f9f9f9 url(../images/valid.png) no-repeat 98% center !important
}

.btn-xs{
    line-height: 28px;
}

/*login form*/
.login-container{
    margin-top:30px ;
}
.login-container input[type=submit] {
  width: 100%;
  display: block;
  margin-bottom: 10px;
  position: relative;
}

.login-container input[type=text], input[type=password] {
  height: 44px;
  font-size: 16px;
  width: 100%;
  margin-bottom: 10px;
  -webkit-appearance: none;
  background: #fff;
  border: 1px solid #d9d9d9;
  border-top: 1px solid #c0c0c0;
  /* border-radius: 2px; */
  padding: 0 8px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
}

.login-container input[type=text]:hover, input[type=password]:hover {
  border: 1px solid #b9b9b9;
  border-top: 1px solid #a0a0a0;
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
}

.login-container-submit {
  /* border: 1px solid #3079ed; */
  border: 0px;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.1);
  background-color: #357ebd;/*#4d90fe;*/
  padding: 17px 0px;
  font-family: roboto;
  font-size: 14px;
  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#4787ed)); */
}

.login-container-submit:hover {
  /* border: 1px solid #2f5bb7; */
  border: 0px;
  text-shadow: 0 1px rgba(0,0,0,0.3);
  background-color: #357ae8;
  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#357ae8)); */
}

.login-help{
  font-size: 12px;
}

.asterix{
    background:#f9f9f9 url(../images/red_asterisk.png) no-repeat 98% center !important;
}

/* images*/
ol, ul {
  list-style: none;
}
.hand {
  cursor: pointer;
  cursor: pointer;
}
.cards{
    padding-left:0;
}
.cards li {
  -webkit-transition: all .2s;
  -moz-transition: all .2s;
  -ms-transition: all .2s;
  -o-transition: all .2s;
  transition: all .2s;
  background-image: url('//c2.staticflickr.com/4/3713/20116660060_f1e51a5248_m.jpg');
  background-position: 0 0;
  float: left;
  height: 32px;
  margin-right: 8px;
  text-indent: -9999px;
  width: 51px;
}
.cards .mastercard {
  background-position: -51px 0;
}
.cards li {
  -webkit-transition: all .2s;
  -moz-transition: all .2s;
  -ms-transition: all .2s;
  -o-transition: all .2s;
  transition: all .2s;
  background-image: url('//c2.staticflickr.com/4/3713/20116660060_f1e51a5248_m.jpg');
  background-position: 0 0;
  float: left;
  height: 32px;
  margin-right: 8px;
  text-indent: -9999px;
  width: 51px;
}
.cards .amex {
  background-position: -102px 0;
}
.cards li {
  -webkit-transition: all .2s;
  -moz-transition: all .2s;
  -ms-transition: all .2s;
  -o-transition: all .2s;
  transition: all .2s;
  background-image: url('//c2.staticflickr.com/4/3713/20116660060_f1e51a5248_m.jpg');
  background-position: 0 0;
  float: left;
  height: 32px;
  margin-right: 8px;
  text-indent: -9999px;
  width: 51px;
}
.cards li:last-child {
  margin-right: 0;
}
/* images end */



/*
 * BOOTSTRAP
 */
.container{
    border: none;
}
.panel-footer{
    background:#fff;
}
.btn{
    border-radius: 1px;
}
.btn-sm, .btn-group-sm > .btn{
    border-radius: 1px;
}
.input-sm, .form-horizontal .form-group-sm .form-control{
    border-radius: 1px;
}

.panel-info {
    border-color: #999;
}

.panel-heading {
    border-top-left-radius: 1px;
    border-top-right-radius: 1px;
}
.panel {
    border-radius: 1px;
}
.panel-info > .panel-heading {
    color: #eee;
    border-color: #999;
}
.panel-info > .panel-heading {
    background: #234896;
}

hr {
    border-color: #999 -moz-use-text-color -moz-use-text-color;
}

.panel-footer {
    border-bottom-left-radius: 1px;
    border-bottom-right-radius: 1px;
    border-top: 1px solid #999;
}

.btn-link {
    color: #888;
}

hr{
    margin-bottom: 10px;
    margin-top: 10px;
}

/** MEDIA QUERIES **/
@media only screen and (max-width: 989px){
    .span1{
        margin-bottom: 15px;
        clear:both;
    }
}

@media only screen and (max-width: 764px){
    .inverse-1{
        float:right;
    }
}

@media only screen and (max-width: 586px){
    .cart-titles{
        display:none;
    }
    .panel {
        margin-bottom: 1px;
    }
}

.form-control {
    border-radius: 1px;
}

@media only screen and (max-width: 486px){
    .col-xss-12{
        width:100%;
    }
    .cart-img-show{
        display: none;
    }
    .btn-submit-fix{
        width:100%;
    }

}
/*
@media only screen and (max-width: 777px){
    .container{
        overflow-x: hidden;
    }
}*/
</style>
@endsection
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/timepicker-ui/2.6.1/timepicker-ui.umd.js" integrity="sha512-E+7ktEwbBMiVhGCpv0rpg1C2vJBAvMwAJtLH7PcFsT+PkoAXgNWpJuWJz8Bw3E+5/NmZbxwC4GzHyKzYR/2g3w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    const DOMElement = document.querySelector(".timepicker-ui");
const options = {clockType: '24h'};
const newTimepicker = new window.tui.TimepickerUI(DOMElement, options);

newTimepicker.create();

const DOMElementT = document.querySelector(".timepicker-uit");
const optionsT = {clockType: '24h'};
const newTimepickerT = new window.tui.TimepickerUI(DOMElementT, optionsT);

newTimepickerT.create();


$(".timepicker-ui-input").on('change', function(){
    clcTotal();

});

DOMElementT.addEventListener('accept', (event) => clcTotal());
DOMElement.addEventListener('accept', (event) => clcTotal());
function clcTotal(){
    var valuestart = $("input[name='TimeFrom']").val();
    var valuestop = $("input[name='TimeTo']").val();

    if(valuestart && valuestop){
        //create date format
        var timeStart = new Date("01/01/2007 " + valuestart);
        var timeEnd = new Date("01/01/2007 " + valuestop);
        var hourDiff = Math.abs(timeEnd - timeStart);
        let total = (Math.floor((hourDiff/1000)/60)/60);
        let cart  = total * Number("{{Cart::subtotal(2, '.', ',')}}");
        $('#cart-total').html(cart);
    }

}

</script>
@endsection

