<!-- Stored in resources/views/layouts/app.blade.php -->

<html>
<head>
    <title>App Name - @yield('title')</title>
    <meta name="env"    content="{!! App::environment() !!}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('css')

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('jqui')
</head>
<body>
@section('sidebar')
    <!-- This is the master sidebar. -->
@show

<div class="container">
    @yield('content')
</div>
</body>
</html>
