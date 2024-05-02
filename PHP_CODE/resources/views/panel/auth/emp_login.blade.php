<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Bike-city Employee</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{url('panel/vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{url('panel/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{url('panel/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{url('panel/css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{url('panel/images/favicon.png')}}" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
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
              <div class="brand-logo text-center">
                <img src="{{url('panel/images/logo.png')}}" alt="logo">
              </div>
              <h4 class="text-center">Hello! let's get started</h4>
              <h6 class="font-weight-light text-center">Sign in to continue.</h6>
              <form class="pt-3" method="post" action="{{route('employees.login.post')}}">
                @csrf
                <div class="form-group">
                  <input type="email" name="Email" value="{{old('EMAIL')}}" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" >SIGN IN</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" name="remember_me" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
                <!-- <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="register.html" class="text-primary">Create</a>
                </div> -->
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{url('panel/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{url('panel/js/off-canvas.js')}}"></script>
  <script src="{{url('panel/js/hoverable-collapse.js')}}"></script>
  <script src="{{url('panel/js/template.js')}}"></script>
  <script src="{{url('panel/js/settings.js')}}"></script>
  <script src="{{url('panel/js/todolist.js')}}"></script>
  <!-- endinject -->
</body>

</html>
