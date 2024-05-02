
  <!-- plugins:js -->
  <script src="{{url('panel/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{url('panel/vendors/chart.js/Chart.min.js')}}"></script>
  <script src="{{url('panel/vendors/datatables.net/jquery.dataTables.js')}}"></script>
  <script src="{{url('panel/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
  <script src="{{url('panel/js/dataTables.select.min.js')}}"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{url('panel/js/off-canvas.js')}}"></script>
  <script src="{{url('panel/js/hoverable-collapse.js')}}"></script>
  <script src="{{url('panel/js/template.js')}}"></script>
  <script src="{{url('panel/js/settings.js')}}"></script>
  <script src="{{url('panel/js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{url('panel/js/dashboard.js')}}"></script>
  <script src="{{url('panel/js/Chart.roundedBarCharts.js')}}"></script>
  <script src="{{url('panel/sweet-alert/sweetalert.min.js')}}"></script>

    @yield('js')
