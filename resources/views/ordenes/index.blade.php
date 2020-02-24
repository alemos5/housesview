@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
          <h3 class="m-t-10 m-b-10">Ordenes: </h3><hr>
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('ordenes.create') !!}">Add New</a>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('ordenes.table')
            </div>
        </div>
        <div class="text-center">

        </div>
    </div>
  </div>
</div>

@endsection
