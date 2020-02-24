<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>HouseView - {{Route::currentRouteName()}}</title>

<link rel="stylesheet" href="{{route('/')}}/css/material/style.css">
<link rel="stylesheet" href="{!! asset('front/css/bootstrap.min.css') !!}">
<link rel="stylesheet" href="{!! asset('front/css/font-awesome.min.css') !!}">
<link rel="stylesheet" href="{!! asset('front/css/style.css') !!}">

<!-- Link Swiper's CSS -->
<link rel="stylesheet" href="{{route('/')}}/css/swiper.min.css">

<!-- Link paginate CSS -->
<link rel="stylesheet" href="{{route('/')}}/css/jquery.paginate.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="{!! asset('front/js/bootstrap.min.js') !!}">



<script src="{{route('/')}}/js/swiper.min.js"></script>


<link rel="stylesheet" href="{{route('/')}}/css/style.css">
<script src="https://kit.fontawesome.com/0966f7dcfa.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" integrity="sha384-rtJEYb85SiYWgfpCr0jn174XgJTn4rptSOQsMroFBPQSGLdOC5IbubP6lJ35qoM9" crossorigin="anonymous">


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<!--tour-->
<script src="{{route('/')}}/js/tour.js"></script>

<!-- Link paginate js -->
<script src="{{route('/')}}/js/jquery.paginate.js"></script>
<script type="text/javascript">
$( document ).ready(function() {
  $('.resultado-busqueda-search .pageresultlist').paginate({

    // how many items per page
    perPage:                5,

    // boolean: scroll to top of the container if a user clicks on a pagination link
    autoScroll:             true,

    // which elements to target
    scope:                  '',

    // defines where the pagination will be displayed
    paginatePosition:       ['bottom'],

    // Pagination selectors
    containerTag:           'nav',
    paginationTag:          'ul',
    itemTag:                'li',
    linkTag:                'a',

    // Determines whether or not the plugin makes use of hash locations
    useHashLocation:        true,

    // Triggered when a pagination link is clicked
    onPageClick:            function() {}

  });
});
</script>
