@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Plan Duracions
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($planDuracions, ['route' => ['planDuracions.update', $planDuracions->id], 'method' => 'patch']) !!}

                        @include('plan_duracions.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection