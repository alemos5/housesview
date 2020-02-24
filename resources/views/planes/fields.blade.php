<!-- Plan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('plan', 'Plan:') !!}
    {!! Form::text('plan', null, ['class' => 'form-control']) !!}
</div>

<!-- Recorrido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('recorrido', 'Recorrido:') !!}
    {!! Form::number('recorrido', null, ['class' => 'form-control']) !!}

</div>

<!-- Plazo D Field -->
<div class="form-group col-sm-6">
    {!! Form::label('plazo_d', 'Plazo D:') !!}
    {!! Form::number('plazo_d', null, ['class' => 'form-control']) !!}
</div>

<!-- Visibilidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('visibilidad', 'Visibilidad:') !!}
    {!! Form::number('visibilidad', null, ['class' => 'form-control']) !!}
</div>

<!-- P Instalacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('p_instalacion', 'P Instalacion:') !!}
    {!! Form::number('p_instalacion', null, ['class' => 'form-control']) !!}
</div>

<!-- P Publicacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('p_publicacion', 'P Publicacion:') !!}
    {!! Form::number('p_publicacion', null, ['class' => 'form-control']) !!}
</div>

<!-- P M I Field -->
<div class="form-group col-sm-6">
    {!! Form::label('p_m_i', 'P M I:') !!}
    {!! Form::number('p_m_i', null, ['class' => 'form-control']) !!}
</div>

<!-- P Publicacion Dos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('p_publicacion_dos', 'P Publicacion Dos:') !!}
    {!! Form::number('p_publicacion_dos', null, ['class' => 'form-control']) !!}
</div>

<!-- Destacado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('destacado', 'Destacado:') !!}
{{--    {!! Form::number('destacado', null, ['class' => 'form-control']) !!}--}}
    <select name="destacado">
        <option value="0">No destacado</option>
        <option value="1">Destacado</option>
    </select>
</div>

<!-- Descuento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descuento', 'Descuento:') !!}
    {!! Form::number('descuento', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
    <a href="{!! route('planes.index') !!}" class="btn btn-default">Cancelar</a>
</div>
