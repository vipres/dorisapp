<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@section('page_title')
        @show - Doris APP</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="routeName" content="{{ Route::currentRouteName() }}">
    <link rel="icon" href="{{ url('/favicon.ico') }}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    @vite(['resources/css/connect.scss' ])
    <script src="{{ asset('static/js/lang/'.config('doris.languaje')) }}.js"></script>
    <script src="{{ asset('static/js/dorisapp.js') }}"></script>
    @section('additionals_js_files')
    @show



</head>

<body>
    @include('components.loader_action')
    @include('components.mdalert')
    <div class="wrapper">
        @section('content')
        @show
    </div>
    <script src="{{ asset('static/js/mdalert.js') }}"></script>
</body>

</html>
