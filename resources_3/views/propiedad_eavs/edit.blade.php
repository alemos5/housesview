@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Propiedad Eavs
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($propiedadEavs, ['route' => ['propiedadEavs.update', $propiedadEavs->id], 'method' => 'patch']) !!}

                        @include('propiedad_eavs.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection