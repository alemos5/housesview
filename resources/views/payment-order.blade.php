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
        <h3>Ya falta poco!</h3>
        <p>Selecciona el periodo de tu plan.</p>
      </div>
      <div class="col-lg-8">
        <div class="card card-outline-danger">
              <div class="card-body">
                <div class="text-left m-b-30">
                  <strong>Seleccionaste el plan: {{$plan->plan}}</strong>
                </div>
                <div class="row m-b-10">
                <?php
                foreach ($planDuracions as $planDuracion) {
                    ?>
                    <div class="col-lg-2 monthplan">
                        <button
                            onclick="costDuracion({{$planDuracion->id}}, {{$planDuracion->valor}}, {{$planValor}})"
                            type="button" name="button" class="btn waves-effect waves-light btn-outline-danger">
                            <span>{{$planDuracion->cantidad}} mes</span>
                            <p>AR$ {{$planDuracion->valor}}</p>
                            <span class="mont">/mes</span>
                        </button>
                    </div>
                    <?php
                }
                ?>
                  <div class="col-lg-4 monthplan m-t-10">
                      <strong class="">Total:</strong><br>
                      <strong>
                          AR$&nbsp;<label id="valor_total"> <?php echo number_format($planValor, 2, ',', '.'); ?></label>
                          <input type="hidden" name="valor_total_text" id="valor_total_text">
                      </strong>
                  </div>
                </div>
              </div>
              <div class="card-header">
                  <h5 class="m-b-0 text-white">Buena elección! estas ahorrando un <strong>{{$plan->descuento}}%</strong>! </h5></div>
          </div>
      </div>
      <div class="col-lg-4">
        <div class="card">
              <div class="card-body">
                <div class="text-left m-b-30">
                  <strong>Resumen de compra</strong>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                      {{$plan->plan}}
                  </div>
                  <div class="col-lg-6 text-right">
                      AR$&nbsp;<label id="valor_total_plan"> <?php echo number_format($planValor, 2, ',', '.'); ?></label>
                      <input type="hidden" name="valor_total_plan_text" id="valor_total_plan_text">
                  </div>
                  <div class="col-lg-12">
                      <button class="btn btn-block btn-lg btn-success m-t-20" onclick="registerOrder()">Continua con la compra </button>
{{--                    <a  onclick="registerOrder()" href="https://www.mercadopago.com/mla/checkout/start?pref_id=156907953-3693c0d1-682a-4f07-b023-da70a8003c0c" class="btn btn-block btn-lg btn-success m-t-20">--}}
{{--                        Pagar--}}
{{--                    </a>--}}
                    <p style="font-size:11px" class="text-center m-t-20">Al continuar aceptas nuestros Términos del Servicio -TOS. Procesaremos tu información personal para completar la orden y para otros propósitos de acuerdo con nuestra Política de Privacidad.</p>
                    <img src="{{route('/')}}/images/mediosdepago.png" alt="" style="width: 100%;" class="m-t-30">
                  </div>
                </div>
              </div>
          </div>
      </div>
    </div>
  </div>
</div>
<input type="hidden" id="pla_duracion_id" name="pla_duracion_id" value="">
<input type="hidden" id="pla_duracion_valor" name="pla_duracion_valor" value="">
<script>
    function costDuracion(pla_duracion_id, valor, plan_valor) {
        // alert(pla_duracion_id+' / '+valor);
        var calculo = 0;
        calculo = parseFloat(valor) + parseFloat(plan_valor);
        $('#valor_total').html(calculo.toLocaleString('es-AR'));
        $('#valor_total_text').val(calculo);
        $('#valor_total_plan').html(calculo.toLocaleString('es-AR'));
        $('#valor_total_plan_text').val(calculo);
        $('#pla_duracion_id').val(pla_duracion_id);
        $('#pla_duracion_valor').val(valor);
    }



    function registerOrder() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url:"{{URL::to('/') }}/ordenes/storeAjax",
            data:{
                'plan_id': <?php echo $plan->id; ?>,
                'plan_valor': "<?php echo $planValor; ?>",
                'plan_duracion_id': $('#pla_duracion_id').val(),
                'plan_duracion_valor': $('#pla_duracion_valor').val(),
                'total': $('#valor_total_plan_text').val()
            },
            type:'post',
            success: function (response) {
                //alert(response);
                window.location.replace("{{URL::to('/') }}/payment-order-result?plan_id=<?php echo $plan->id; ?>");
            }
        });
    }

</script>
@endsection
