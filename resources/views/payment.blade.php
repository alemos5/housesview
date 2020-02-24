@extends('layouts.app')
@section('content')
<div class="bg-gray payment">
  <div class="container page">
    <div class="row">
      <div class="col-lg-12 text-left m-b-30">
        <h3>¿Cuantas propiedades desaes publicar?</h3>
        <p>Selecciona la opcion que mas de adecue a tu necesidad.</p>
      </div>
      <div class="col-lg-12">
        <div class="card">
              <div class="card-body">
                  <div class="table-responsive m-t-20">
                      <table class="table stylish-table text-center">
                          <thead>
                          <tr>
                              <th>Plan</th>
                              <th>Recorridos</th>
                              <th>Plazo/D</th>
                              <th>Visibilidad</th>
                              <!-- <th>P/Instalacion</th>
                              <th>P/Publicacion</th> -->
                              <th>Precio Instalacion + Primer mes</th>
                              <th>Precio desde el mes 2</th>
                              <th>Comprar</th>
                          </tr>
                          </thead>
                          <tbody>
                          <?php
                            $planes = \App\Models\Planes::all();
                            foreach ($planes as $plan) {
                                ?>
                                  <tr>
                                      <td><strong>{{ $plan->plan }}</strong> </td>
                                      <td>{{ $plan->recorrido }}</td>
                                      <td>{{ $plan->plazo_d }}</td>
                                      <td>
                                         <?php
                                         if ($plan->visibilidad) {
                                             echo "Estandar";
                                         }else{
                                             echo "Destacado";
                                         }
                                         ?>
                                      </td>
                                      <!-- <td>${{ $plan->p_instalacion }}</td>
                                      <td>${{ $plan->p_publicacion }}</td> -->
                                      <td>${{ $plan->p_m_i }}</td>
                                      <td>${{ $plan->p_publicacion_dos }}</td>
                                      <td><a class="btn waves-effect waves-light btn-danger" href="{{route('payment-order')}}?plan_id={{$plan->id}}">Comprar</a></td>
                                  </tr>
                                <?php
                            }
                          ?>
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
        <div class="col-lg-12 text-center">
          <p>Una vez realizado el pago te contactaremos para coordinar la visita de nuestros fotografos para crear el recorrido virtual de tu propiedad.</p>
        </div>
    </div>
  </div>
</div>

@endsection
