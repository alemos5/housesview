@extends('layouts.app')
@section('content')
<div class="bg-gray payment">
  <div class="container page">
    <h2 class="title">Tus Propiedades</h2>
    <div class="row">
      <div class="col-lg-12">
        <table id="example" class="table table-striped table-bordered mispropiedades" style="width:100%">
        <thead>
            <tr>
                <th width="100">Foto</th>
                <th>Nombre</th>
                <th>Visitas</th>
                <th>Contactos</th>
                <th>Precio</th>
                <th>Editar</th>
            </tr>
        </thead>
        <tbody>
            <tr>
              <td><img src="{{route('/')}}/images/prop/p1.jpg" alt=""></td>
              <td>Sarmiento 347</td>
              <td>600</td>
              <td>80</td>
              <td>$2500 /mes</td>
              <td><a href="{{route('/')}}/user/publicate"><i class="far fa-edit"></i></a></td>
            </tr>
            <tr>
                <td>  <img src="{{route('/')}}/images/prop/p1.jpg" alt=""></td>
                <td>Directorio 2500</td>
                <td>2000</td>
                <td>63</td>
                <td>$6000 /mes</td>
                <td><a href="{{route('/')}}/user/publicate"><i class="far fa-edit"></i></a></td>
            </tr>
        </tbody>
        <!-- <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot> -->
    </table>
      </div>
    </div>
  </div>
</div>

@endsection
