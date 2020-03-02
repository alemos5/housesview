@extends('layouts.app')
@section('content')

<?php

MercadoPago\SDK::setAccessToken('APP_USR-3085580077256129-101913-2f4b60650f736fc62285fef4a9745e01-156907953');
$preference = new MercadoPago\Preference();



$plan = \App\Models\Planes::where('id', '=', $_GET['plan_id'])->first();
$planValor = $plan->p_instalacion+$plan->p_publicacion+$plan->p_m_i+$plan->p_publicacion_dos;
$orden = \App\Models\Ordenes::where('plan_id', $plan->id)->where('user_id', Auth::user()->id_cliente)->where('estatus', 0)->first();
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
//                   echo json_encode($plan)."<hr>".json_encode($planDuracions);

                  // Crea un ítem en la preferencia
                  $item = new MercadoPago\Item();
                  $item->title = $plan->plan;
                  $item->quantity = 1;
                  $item->unit_price = $orden->valor;
                  $preference->items = array($item);
                  $preference->back_urls = array(
                      "success" => "https://visithouse.com.ar/ordenes/success/".$orden->id,
                      "failure" => "https://visithouse.com.ar/ordenes/failure/".$orden->id,
                      "pending" => "https://visithouse.com.ar/ordenes/pending/".$orden->id
                  );
                  $preference->auto_return = "approved";
                  $preference->save();

                  ?>
              </div>
{{--              <a href="https://www.mercadopago.com/mla/checkout/start?pref_id=156907953-3693c0d1-682a-4f07-b023-da70a8003c0c" class="btn btn-block btn-lg btn-success m-t-20">--}}
{{--                  Pagar--}}
{{--              </a>--}}
            <form action="/procesar-pago" method="POST">
                <script
                    src="https://www.mercadopago.com.ar/integrations/v1/web-payment-checkout.js"
                    data-preference-id="<?php echo $preference->id; ?>">
                </script>
            </form>
        </div>
        <div class="col-lg-3">

        </div>
    </div>
  </div>
</div>
<input type="hidden" id="pla_duracion_id" name="pla_duracion_id" value="">
<input type="hidden" id="pla_duracion_valor" name="pla_duracion_valor" value="">

@endsection
