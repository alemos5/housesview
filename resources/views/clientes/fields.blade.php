<!-- Direccion 2 Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('direccion_2', 'Direccion 2:') !!}
    {!! Form::textarea('direccion_2', null, ['class' => 'form-control']) !!}
</div>

<!-- Direccion 3 Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('direccion_3', 'Direccion 3:') !!}
    {!! Form::textarea('direccion_3', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Pais Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_pais', 'Id Pais:') !!}
    {!! Form::text('id_pais', null, ['class' => 'form-control']) !!}
</div>

<!-- Code Cliente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('code_cliente', 'Code Cliente:') !!}
    {!! Form::text('code_cliente', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Compania Field -->
<div class="form-group col-sm-6">
    {!! Form::label('compania', 'Compania:') !!}
    {!! Form::text('compania', null, ['class' => 'form-control']) !!}
</div>

<!-- Direccion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('direccion', 'Direccion:') !!}
    {!! Form::textarea('direccion', null, ['class' => 'form-control']) !!}
</div>

<!-- Pais Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pais', 'Pais:') !!}
    {!! Form::text('pais', null, ['class' => 'form-control']) !!}
</div>

<!-- Ciudad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ciudad', 'Ciudad:') !!}
    {!! Form::text('ciudad', null, ['class' => 'form-control']) !!}
</div>

<!-- Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado', 'Estado:') !!}
    {!! Form::text('estado', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefono Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono', 'Telefono:') !!}
    {!! Form::text('telefono', null, ['class' => 'form-control']) !!}
</div>

<!-- Fax Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fax', 'Fax:') !!}
    {!! Form::text('fax', null, ['class' => 'form-control']) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Ci Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ci', 'Ci:') !!}
    {!! Form::text('ci', null, ['class' => 'form-control']) !!}
</div>

<!-- Suscripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('suscripcion', 'Suscripcion:') !!}
    {!! Form::number('suscripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Servicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('servicio', 'Servicio:') !!}
    {!! Form::text('servicio', null, ['class' => 'form-control']) !!}
</div>

<!-- Promocion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('promocion', 'Promocion:') !!}
    {!! Form::text('promocion', null, ['class' => 'form-control']) !!}
</div>

<!-- Publi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('publi', 'Publi:') !!}
    {!! Form::text('publi', null, ['class' => 'form-control']) !!}
</div>

<!-- Catologo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('catologo', 'Catologo:') !!}
    {!! Form::text('catologo', null, ['class' => 'form-control']) !!}
</div>

<!-- Otro Catalogo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('otro_catalogo', 'Otro Catalogo:') !!}
    {!! Form::text('otro_catalogo', null, ['class' => 'form-control']) !!}
</div>

<!-- Correo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('correo', 'Correo:') !!}
    {!! Form::number('correo', null, ['class' => 'form-control']) !!}
</div>

<!-- Pass Conf Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pass_conf', 'Pass Conf:') !!}
    {!! Form::text('pass_conf', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha', 'Fecha:') !!}
    {!! Form::date('fecha', null, ['class' => 'form-control','id'=>'fecha']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#fecha').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Estatus Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estatus', 'Estatus:') !!}
    {!! Form::text('estatus', null, ['class' => 'form-control']) !!}
</div>

<!-- Tarifa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tarifa', 'Tarifa:') !!}
    {!! Form::number('tarifa', null, ['class' => 'form-control']) !!}
</div>

<!-- Seguro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('seguro', 'Seguro:') !!}
    {!! Form::number('seguro', null, ['class' => 'form-control']) !!}
</div>

<!-- Bodega Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bodega', 'Bodega:') !!}
    {!! Form::number('bodega', null, ['class' => 'form-control']) !!}
</div>

<!-- Costo Consolidacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('costo_consolidacion', 'Costo Consolidacion:') !!}
    {!! Form::number('costo_consolidacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Impuestos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('impuestos', 'Impuestos:') !!}
    {!! Form::number('impuestos', null, ['class' => 'form-control']) !!}
</div>

<!-- Otros Field -->
<div class="form-group col-sm-6">
    {!! Form::label('otros', 'Otros:') !!}
    {!! Form::number('otros', null, ['class' => 'form-control']) !!}
</div>

<!-- Referido Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('referido', 'Referido:') !!}
    {!! Form::textarea('referido', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Cliente Padre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_cliente_padre', 'Id Cliente Padre:') !!}
    {!! Form::number('id_cliente_padre', null, ['class' => 'form-control']) !!}
</div>

<!-- Codigo Cliente Hijo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo_cliente_hijo', 'Codigo Cliente Hijo:') !!}
    {!! Form::text('codigo_cliente_hijo', null, ['class' => 'form-control']) !!}
</div>

<!-- Observacion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('observacion', 'Observacion:') !!}
    {!! Form::textarea('observacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Tarifa Orden Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tarifa_orden', 'Tarifa Orden:') !!}
    {!! Form::number('tarifa_orden', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Agencia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_agencia', 'Id Agencia:') !!}
    {!! Form::number('id_agencia', null, ['class' => 'form-control']) !!}
</div>

<!-- Maximo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('maximo', 'Maximo:') !!}
    {!! Form::number('maximo', null, ['class' => 'form-control']) !!}
</div>

<!-- Rol Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rol', 'Rol:') !!}
    {!! Form::text('rol', null, ['class' => 'form-control']) !!}
</div>

<!-- Customer Stripe Field -->
<div class="form-group col-sm-6">
    {!! Form::label('customer_stripe', 'Customer Stripe:') !!}
    {!! Form::text('customer_stripe', null, ['class' => 'form-control']) !!}
</div>

<!-- Remember Token Field -->
<div class="form-group col-sm-6">
    {!! Form::label('remember_token', 'Remember Token:') !!}
    {!! Form::text('remember_token', null, ['class' => 'form-control']) !!}
</div>

<!-- Request Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('request', 'Request:') !!}
    {!! Form::textarea('request', null, ['class' => 'form-control']) !!}
</div>

<!-- Response Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('response', 'Response:') !!}
    {!! Form::textarea('response', null, ['class' => 'form-control']) !!}
</div>

<!-- Cliente Envio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cliente_envio', 'Cliente Envio:') !!}
    {!! Form::number('cliente_envio', null, ['class' => 'form-control']) !!}
</div>

<!-- Img Field -->
<div class="form-group col-sm-6">
    {!! Form::label('img', 'Img:') !!}
    {!! Form::text('img', null, ['class' => 'form-control']) !!}
</div>

<!-- Apellido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apellido', 'Apellido:') !!}
    {!! Form::text('apellido', null, ['class' => 'form-control']) !!}
</div>

<!-- Horario Atencion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('horario_atencion', 'Horario Atencion:') !!}
    {!! Form::text('horario_atencion', null, ['class' => 'form-control']) !!}
</div>

<!-- Whatsapp Field -->
<div class="form-group col-sm-6">
    {!! Form::label('whatsapp', 'Whatsapp:') !!}
    {!! Form::text('whatsapp', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('clientes.index') !!}" class="btn btn-default">Cancel</a>
</div>
