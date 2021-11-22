<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <!-- Header -->
    @include('layouts.elements.header')

</head>

<body id="body">

    <!-- Nav -->
    @include('layouts.elements.nav')

    @yield('content')



    <!-- footer-->
    @include('layouts.elements.footer')

    <!--Script-->
    @include('layouts.elements.script')

</body>

</html>