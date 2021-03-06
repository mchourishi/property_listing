<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel Real Estate') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('frontend/css/materialize.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">

    @yield('styles')

    <link href="{{ asset('frontend/css/styles.css') }}" rel="stylesheet">
</head>

<body>

{{-- MAIN NAVIGATION BAR --}}
@include('frontend.partials.navbar')


{{-- SEARCH BAR --}}
@include('frontend.partials.search')

{{-- MAIN CONTENT --}}
<div class="main">
    @yield('content')
</div>

{{-- FOOTER --}}
{{--@include('frontend.partials.footer')--}}


<!--JavaScript at end of body for optimized loading-->
{{-- <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script> --}}
<script type="text/javascript" src="{{ asset('frontend/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/materialize.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>

</script>

</body>
</html>
