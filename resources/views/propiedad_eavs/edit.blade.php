@extends('layouts.app')
@section('content')
<div class="bg-gray">
  <div class="p-t-20">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <section class="content-header">
              <h1>
                  Propiedad Editar
              </h1>
         </section>
             @include('adminlte-templates::common.errors')
             <div class="box box-primary">
                 <div class="box-body">
                     <div class="row">
                       <div class="col-lg-12">
                         {!! Form::model($propiedadEavs, ['route' => ['propiedadEavs.update', $propiedadEavs->id], 'method' => 'patch']) !!}

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

@endsection
