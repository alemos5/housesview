@extends('layouts.app')
<link rel="stylesheet" href="{{route('/')}}/css/stepform.css">
<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD56Gih6iEiQPJ-PsSt27wn0JkaIxqqPqY&callback=initMap" type="text/javascript"></script>
@section('content')

<div class="bg-gray publicate">
  <div class="container page">
      <div class="stepform">
        {!! Form::model($propiedades, ['route' => ['propiedades.update', $propiedades->id], 'method' => 'patch', 'id' => 'msform', 'name' => 'msform']) !!}

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

<script>
/* This showResult function is used as the callback function*/

function showResult(result) {
    document.getElementById('latitude').value = result.geometry.location.lat();
    document.getElementById('longitude').value = result.geometry.location.lng();

    lat  = result.geometry.location.lat();
    lang = result.geometry.location.lng();

    var myLatlng = new google.maps.LatLng(lat,lang);
    var mapOptions = {
      zoom: 16,
      center: myLatlng
    }
    var map = new google.maps.Map(document.getElementById("map"), mapOptions);

    var marker = new google.maps.Marker({
        position: myLatlng,
        title:"Hello World!"
    });

    // To add the marker to the map, call setMap();
    marker.setMap(map);



}

function getLatitudeLongitude(callback, address) {
    // If adress is not supplied, use default value 'Ferrol, Galicia, Spain'
    address = address || 'Ferrol, Galicia, Spain';
    // Initialize the Geocoder
    geocoder = new google.maps.Geocoder();
    if (geocoder) {
        geocoder.geocode({
            'address': address
        }, function (results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                callback(results[0]);
            }
        });
    }
}

var button = document.getElementById('btn');

button.addEventListener("click", function () {
    var direccion = document.getElementById('direccion').value;
    var provincia = document.getElementById('provincia').selectedOptions[0].text
    var localidad = document.getElementById('localidad').selectedOptions[0].text
    var direccioncompleta = (provincia + ' ' + localidad + ' ' + direccion);
    getLatitudeLongitude(showResult, direccioncompleta);


});
</script>
@endsection
