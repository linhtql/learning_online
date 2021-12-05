<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content="">
<meta name="author" content="">

<title>{{$title ?? ''}}</title>

<!-- Mobile Specific Meta-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="  {{ asset('layouts/images') }}/img/favicon.png" />
<!-- bootstrap.min css -->
<link rel="stylesheet" href="{{ asset('home/plugins/bootstrap/bootstrap.min.css') }}">
<!-- Ionic Icon Css -->
<link rel="stylesheet" href="{{ asset('home/plugins/Ionicons/css/ionicons.min.css') }}">
<!-- animate.css -->
<link rel="stylesheet" href="{{ asset('home/plugins/animate-css/animate.css') }}">
<!-- Magnify Popup -->
<link rel="stylesheet" href="{{ asset('home/plugins/magnific-popup/magnific-popup.css') }}">
<!-- Owl Carousel CSS -->
<link rel="stylesheet" href="{{ asset('home/plugins/slick/slick.css') }}">

<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Main Stylesheet -->
<link rel="stylesheet" href="{{ asset('home/css/style.css') }}">