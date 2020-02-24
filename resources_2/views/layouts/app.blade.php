<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

@include('partials.head')

</head>
<body class="{{Route::currentRouteName()}}">
  {{--Menu de Front--}}
  @include('partials.menu')
  @yield('content')
  @include('partials.footer')
</body>
</html>
