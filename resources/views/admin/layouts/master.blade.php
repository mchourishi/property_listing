<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>{{ config('app.name') }}</title>
    @include('admin.layouts.css')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    @yield('inline-css')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    @include ('admin.layouts.header')
    <!-- Main Sidebar Container -->
    @include ('admin.layouts.nav')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('admin.layouts.content_header')
        <!-- /.content-header -->

        <!-- Session Msg -->
        @include('admin.layouts.message')
        <!-- Main content -->
        @yield('content', 'Default Content')
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    @include('admin.layouts.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<script type="application/javascript" src="{{ asset('js/app.js') }}"></script>
@yield('inline-js')
</body>
</html>
