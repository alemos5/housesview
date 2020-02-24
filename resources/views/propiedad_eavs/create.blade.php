@extends('layouts.app')
@section('content')
<div class="bg-gray">
  <div class="p-t-20">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <section class="content-header">
              <h1>
                Crear Servicio
              </h1>
          </section>
          <div class="content">
              @include('adminlte-templates::common.errors')
              <div class="box box-primary">

                  <div class="box-body">
                      <div class="row">
                        <div class="col-lg-12">
                          {!! Form::open(['route' => 'propiedadEavs.store']) !!}

                              @include('propiedad_eavs.fields')

                          {!! Form::close() !!}
                        </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </div>

</div>

@endsection
