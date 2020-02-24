@extends('layouts.app')

@section('content')
    {{--Banner Top Home--}}
    @include('front.parts-front.banner-top-home')

    {{--Destacados--}}
    @include('front.parts-front.destacados')

    {{--seccion proba recorrido--}}
    @include('front.parts-front.seccion1')

    {{--Destacados slider--}}
    @include('front.parts-front.destacadosslider')

    {{--Propiedades--}}
    @include('front.parts-front.propiedades')

@endsection
