<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Laravel Study</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('layouts.includes.styles')
</head>
<body class="sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('layouts.includes.nav')
        @include('layouts.includes.sidebar')
        @include('layouts.includes.left')
        <!-- <div class="content-wrapper">
            <section class="content">
                @yield('content')
            </section>
        </div> -->
        @include('layouts.includes.footer')
        <div class="control-sidebar-bg"></div>
    </div>
@include('layouts.includes.scripts')
</body>
</html>
