<!doctype html>
<html lang="en-US">
@include('user.layouts.partials.head')

<body class="@yield('body-class')">
@include('user.layouts.partials.nav')
@yield('content')
@include('user.layouts.partials.footer')

@include('user.layouts.partials.scripts')
</body>
</html>
