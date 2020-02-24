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
            <?php
            $publicaciones = \App\Models\Propiedades::where('user_id', Auth::user()->id_cliente)->get();
            foreach ($publicaciones as $publicacione) {
                ?>
                <tr>
                    <td><img src="{{route('/')}}/images/prop/p1.jpg" alt=""></td>
                    <td>{{ $publicacione->titulo }}</td>
                    <td>{{ $publicacione->direccion }}</td>
                    <td>1</td>
                    <td>$ {{ $publicacione->precio }}</td>
                    <td><a href="{{route('/')}}/propiedades/{{$publicacione->id}}/edit"><i class="far fa-edit"></i></a></td>
                </tr>
                <?php
            }
            ?>

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
