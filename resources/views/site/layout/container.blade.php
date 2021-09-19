<!DOCTYPE html>
<html class="no-js" lang="en">
@include('site.layout.head')
<body>
@include('site.layout.nav')
<div class="content">
    @yield('content')
</div>
@include('site.layout.footer')
@include('site.layout.scripts')
</body>
</html>
