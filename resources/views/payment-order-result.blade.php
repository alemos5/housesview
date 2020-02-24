@extends('layouts.app')
@section('content')

<?php
$plan = \App\Models\Planes::where('id', '=', $_GET['plan_id'])->first();
$planValor = $plan->p_instalacion+$plan->p_publicacion+$plan->p_m_i+$plan->p_publicacion_dos;
$planDuracions = \App\Models\PlanDuracions::where('plan_id', '=', $_GET['plan_id'])->get();
?>

<div class="bg-gray payment">
  <div class="container page">
    <div class="row">
        <div class="col-lg-12 text-left m-b-30">
            <h3>Resumen de tu compra.</h3>
            <p>Solo estamos a la espera de tu pago</p>
        </div>
        <div class="col-lg-3">

        </div>
        <div class="col-lg-6">
              <div class="alert alert-success">
                  La orden fue registrada correctamente
                  <?php
                  // echo "<hr>Plan: ".\App\Http\Controllers\OrdenesController::getOrdenActivo()."<hr>";
                  // echo json_encode($plan)."<hr>".json_encode($planDuracions);
                  ?>
              </div>
              <a href="https://www.mercadopago.com/mla/checkout/start?pref_id=156907953-3693c0d1-682a-4f07-b023-da70a8003c0c" class="btn btn-block btn-lg btn-success m-t-20">
                  Pagar
              </a>
        </div>
        <div class="col-lg-3">

        </div>
    </div>
  </div>
</div>
<input type="hidden" id="pla_duracion_id" name="pla_duracion_id" value="">
<input type="hidden" id="pla_duracion_valor" name="pla_duracion_valor" value="">

@endsection
