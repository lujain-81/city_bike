<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{url('panel/favicon.ico')}}">
    <title>Forget Password</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="{{url('panel/css/simplebar.css')}}">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{url('panel/css/feather.css')}}">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="{{url('panel/css/daterangepicker.css')}}">
    <!-- App CSS -->
    <link rel="stylesheet" href="{{url('panel/css/app-light.css')}}" id="lightTheme">
    <link rel="stylesheet" href="{{url('panel/css/app-dark.css')}}" id="darkTheme" disabled>
    <style>
        .btn-primary:hover {
            color: #000000;
            background-color: #ffffff;
            border-color: #7c0023;
        }
        .btn-primary {
            color: #ffffff;
            background-color: #7c0023;
            border-color: #7c0023;
        }
        .boxx {
            padding: 20px;
            /*background: #ff903b;*/
            border-radius: 15px;
            box-shadow: 0 0 9px 4px #423f3f54;
        }

        body {
            margin: 0;
            display: flex;
            font-family: Arial, sans-serif;
        }
        .column {
            padding: 20px;
            color: #fff;
        }

        .column1 {
            background-color: #ff903b;
            width: 30%;
            margin-bottom: -66px;
        }

        .column2 {
            background: linear-gradient(90deg, rgba(255,201,160,1) 25%, rgba(255,144,59,1) 45%, rgba(255,201,160,1) 100%);
            width: 100%;
            height: 600px;
        }
    </style>
</head>
<body style="background-color: white;" class="light ">
<div class="column column2">
    <div class="row align-items-center mt-4">
        <form style="    background: white;
    border-radius: 6px;
}" class=" col-lg-4 col-md-4 col-10 mx-auto text-center" action="{{ route('forget.password.post') }}" method="post">
            @csrf
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="#">
                <img width="110" height="110" src="https://timg0cf.b8cdn.com/images/templates/rcjy_gov/rcjy_gov-logo-ar.png" alt="document"/>
            </a>
            <h1 class="h6 mb-3">Reset Password</h1>
            @if ($errors->any())
                <div class="alert alert-danger text-center">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            @if (Session::has('message'))
                <div class="alert alert-success text-center" role="alert">
                    {{ Session::get('message') }}
                </div>
            @endif
            <div class="form-group">
                <label for="inputEmail" class="sr-only">Email address</label>
                <input type="text" name="USER_EMAIL" value="{{old('USER_EMAIL')}}" id="inputEmail" class="form-control form-control-lg" placeholder="Email address" required="" autofocus="">
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Send Password Reset Link</button>
            <p class="mt-5 mb-3 text-dark">© {{date('Y')}}</p>
            <a href="{{route('panel.login')}}" class="mt-5 mb-5 mb-3 text-primary">Login</a>
            <br>
            <br>
            <br>

        </form>
    </div>
</div>
<script src="{{url('panel/js/jquery.min.js')}}"></script>
<script src="{{url('panel/js/popper.min.js')}}"></script>
<script src="{{url('panel/js/moment.min.js')}}"></script>
<script src="{{url('panel/js/bootstrap.min.js')}}"></script>
<script src="{{url('panel/js/simplebar.min.js')}}"></script>
<script src="{{url('panel/js/daterangepicker.js')}}"></script>
<script src="{{url('panel/js/jquery.stickOnScroll.js')}}"></script>
<script src="{{url('panel/js/tinycolor-min.js')}}"></script>
<script src="{{url('panel/js/config.js')}}"></script>
<script src="{{url('panel/js/apps.js')}}"></script>

</body>
</html>
