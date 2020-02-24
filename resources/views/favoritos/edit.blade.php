@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Favoritos
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($favoritos, ['route' => ['favoritos.update', $favoritos->id], 'method' => 'patch']) !!}

                        @include('favoritos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection