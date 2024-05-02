<!doctype html>
<html lang="en">
  @include('panel.layouts.partials.head')
  <body>
  <div class="container-scroller">
      @include('panel.layouts.partials.nav')
      <div class="container-fluid page-body-wrapper">
        @include('panel.layouts.partials.sidebar')

        <div class="main-panel">
          <div class="content-wrapper">
          @yield('content')
          </div>
        </div>
      </div> <!-- .wrapper -->
    </div> <!-- .wrapper -->
    @include('panel.layouts.partials.scripts')
  @include('panel.layouts.partials.alerts')
  <form id="delete-item" action="" method="post" style="display: none;">
    @method('delete')
    @csrf
</form>
<form id="change-status-item" action="" method="post" style="display: none;">
    @csrf
</form>
  </body>
</html>

