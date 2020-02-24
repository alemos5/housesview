@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Provincias
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($provincias, ['route' => ['provincias.update', $provincias->id], 'method' => 'patch']) !!}

                        @include('provincias.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection