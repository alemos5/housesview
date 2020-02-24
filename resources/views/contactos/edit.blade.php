@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Contactos
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($contactos, ['route' => ['contactos.update', $contactos->id], 'method' => 'patch']) !!}

                        @include('contactos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection