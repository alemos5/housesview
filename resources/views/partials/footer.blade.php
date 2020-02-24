<footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <img src="{{route('/')}}/images/logov2.png" alt="" class="logo">
        <p>Encontrá propiedades e inmuebles en venta y alquiler, casas, departamentos, terrenos, locales, oficinas, quintas, PH, cocheras y más</p>
      </div>
      <div class="col-lg-3">
        <h4>Paginas</h4>
        <p>Propiedades</p>
        <p>Publicar</p>
        <p>Buscar</p>
        <p>Contactanos</p>
      </div>
      <div class="col-lg-3">
        <h4>Mi Cuenta</h4>
        <p>Piblicar</p>
        <p>Precios</p>
        <p>Mis Propieades</p>
        <p>Contactos</p>
      </div>
      <div class="col-lg-3">
        <h4>VisitHouse</h4>
        <p>Contactanos</p>
        <p>Politicas de Privacidad</p>
        <p>Politicas de Pagos</p>
        <p>Terminos y condiciones</p>
      </div>
    </div>
  </div>
</footer>
<script type="text/javascript">
    $(document).ready(function () {
      $(".filters :checkbox").change(function() {
        $(".pageresultlist > li").hide();
          $(".filters :checkbox:checked").each(function() {
          $(".pageresultlist ." + $(this).val()).show();
          });
      });

    });
</script>
