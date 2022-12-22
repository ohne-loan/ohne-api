<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Boilerplate') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/default.css') }}" rel="stylesheet">
    @if( !Auth::guest() )
        <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
    @endif
    <link href="{{ asset('css/scroll.css') }}" rel="stylesheet">
    @yield('styles')
</head>