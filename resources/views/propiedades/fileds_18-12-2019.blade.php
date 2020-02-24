





<!-- Tipo Operacions Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_operacions_id', 'Tipo Operacions Id:') !!}
    {!! Form::number('tipo_operacions_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Propiedades Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_propiedades_id', 'Tipo Propiedades Id:') !!}
    {!! Form::number('tipo_propiedades_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Provincias Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('provincias_id', 'Provincias Id:') !!}
    {!! Form::number('provincias_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Ciudads Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ciudads_id', 'Ciudads Id:') !!}
    {!! Form::number('ciudads_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Localidads Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('localidads_id', 'Localidads Id:') !!}
    {!! Form::number('localidads_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Direccion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('direccion', 'Direccion:') !!}
    {!! Form::textarea('direccion', null, ['class' => 'form-control']) !!}
</div>

<!-- Latitud Field -->
<div class="form-group col-sm-6">
    {!! Form::label('latitud', 'Latitud:') !!}
    {!! Form::text('latitud', null, ['class' => 'form-control']) !!}
</div>

<!-- Longitud Field -->
<div class="form-group col-sm-6">
    {!! Form::label('longitud', 'Longitud:') !!}
    {!! Form::text('longitud', null, ['class' => 'form-control']) !!}
</div>

<!-- Titulo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('titulo', 'Titulo:') !!}
    {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
</div>

<!-- Precio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('precio', 'Precio:') !!}
    {!! Form::number('precio', null, ['class' => 'form-control']) !!}
</div>

<!-- Moneda Field -->
<div class="form-group col-sm-6">
    {!! Form::label('moneda', 'Moneda:') !!}
    {!! Form::number('moneda', null, ['class' => 'form-control']) !!}
</div>

<!-- Expensas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('expensas', 'Expensas:') !!}
    {!! Form::number('expensas', null, ['class' => 'form-control']) !!}
</div>

<!-- Cant Ambiente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cant_ambiente', 'Cant Ambiente:') !!}
    {!! Form::number('cant_ambiente', null, ['class' => 'form-control']) !!}
</div>

<!-- Cant Dormitorio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cant_dormitorio', 'Cant Dormitorio:') !!}
    {!! Form::number('cant_dormitorio', null, ['class' => 'form-control']) !!}
</div>

<!-- Cant Banio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cant_banio', 'Cant Banio:') !!}
    {!! Form::number('cant_banio', null, ['class' => 'form-control']) !!}
</div>

<!-- Cant Cochera Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cant_cochera', 'Cant Cochera:') !!}
    {!! Form::number('cant_cochera', null, ['class' => 'form-control']) !!}
</div>

<!-- Cant Toilettes Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cant_toilettes', 'Cant Toilettes:') !!}
    {!! Form::number('cant_toilettes', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Antiguedas Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_antiguedas_id', 'Tipo Antiguedas Id:') !!}
    {!! Form::number('tipo_antiguedas_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Anios Field -->
<div class="form-group col-sm-6">
    {!! Form::label('anios', 'Anios:') !!}
    {!! Form::number('anios', null, ['class' => 'form-control']) !!}
</div>

<!-- Metros Field -->
<div class="form-group col-sm-6">
    {!! Form::label('metros', 'Metros:') !!}
    {!! Form::number('metros', null, ['class' => 'form-control']) !!}
</div>

<!-- Metros Totales Field -->
<div class="form-group col-sm-6">
    {!! Form::label('metros_totales', 'Metros Totales:') !!}
    {!! Form::number('metros_totales', null, ['class' => 'form-control']) !!}
</div>

<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('propiedades.index') !!}" class="btn btn-default">Cancel</a>
</div>
