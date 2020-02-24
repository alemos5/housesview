<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{ config('app.name', 'Laravel') }}</title>

<link rel="stylesheet" href="{!! asset('front/css/bootstrap.min.css') !!}">
<link rel="stylesheet" href="{!! asset('front/css/font-awesome.min.css') !!}">
<link rel="stylesheet" href="{!! asset('front/css/style.css') !!}">
<!-- Link Swiper's CSS -->
<link rel="stylesheet" href="{{route('/')}}/css/swiper.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="{!! asset('front/js/bootstrap.min.js') !!}">

<script src="{{route('/')}}/js/swiper.min.js"></script>

<link rel="stylesheet" href="{{route('/')}}/css/style.css">
<script src="https://kit.fontawesome.com/0966f7dcfa.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" integrity="sha384-rtJEYb85SiYWgfpCr0jn174XgJTn4rptSOQsMroFBPQSGLdOC5IbubP6lJ35qoM9" crossorigin="anonymous">


<!--tour-->
<script src="{{route('/')}}/js/tour.js"></script>
