@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Propiedad Grupos
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'propiedadGrupos.store']) !!}

                        @include('propiedad_grupos.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
