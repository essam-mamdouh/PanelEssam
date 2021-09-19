<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>GoldenCapital</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->

    <!-- CSS
    ============================================ -->

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset('assets/site/css/plugins.css')}}">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/site/css/style.css')}}"

    @if(app()->getLocale() == "ar")
        <link href="{{asset('assets/site/css/ar.css')}}" rel="stylesheet">
    @endif

    @yield('extra_css')
</head>
