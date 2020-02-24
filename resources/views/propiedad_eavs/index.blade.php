@extends('layouts.app')
@section('content')
<div class="bg-gray">
  <div class="p-t-20">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <section class="content-header">
              <h1 class="pull-left">Propiedad Eavs</h1>
              <h1 class="pull-right">
                 <a class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('propiedadEavs.create') !!}">Agregar Nuevo</a>
              </h1>
          </section>
          <div class="content">
              <div class="clearfix"></div>

              @include('flash::message')

              <div class="clearfix"></div>
              <div class="box box-primary">
                  <div class="box-body">
                          @include('propiedad_eavs.table')
                  </div>
              </div>
              <div class="text-center">

              </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

@endsection
