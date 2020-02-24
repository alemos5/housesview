@extends('layouts.app')
<link rel="stylesheet" href="{{route('/')}}/css/stepform.css">
@section('content')

<div class="bg-gray publicate">
  <div class="container page">
      <div class="stepform">
        {!! Form::open(['route' => 'propiedades.store', 'id' => 'msform', 'name' => 'msform']) !!}

            @include('propiedades.fields')

        {!! Form::close() !!}
      </div>
  </div>
</div>


<script src="{{route('/')}}/js/stepform.js"></script>
<script src="{{route('/')}}/js/jquery.easing.min.js"></script>

<script>

    function submit() {
        document.msform.submit()
    }

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function getLocalidad(id){
        $('#localidad').html('');
        jQuery.post("<?php echo route('/')."/provincias/getLocalidad"; ?>",{ id:id },
            function(data){
                $('#localidad').html(data);
            });
    }

</script>
@endsection
