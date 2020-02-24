<!-- Attribute Field -->
<div class="form-group col-sm-6">
    {!! Form::label('attribute', 'Nombre:') !!}
    {!! Form::text('attribute', null, ['class' => 'form-control']) !!}
</div>

<!-- Icon Field -->
<div class="form-group col-sm-6">
    {!! Form::label('icon', 'Icono:') !!} <a href="https://fontawesome.com/icons" target="_blank">Ver Todos</a>
    {!! Form::text('icon', null, ['class' => 'form-control']) !!}
</div>

<!-- Grupo Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('grupo_id', 'Grupo Id:') !!}
    {!! Form::number('grupo_id', null, ['class' => 'form-control']) !!}
</div>

<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
    <a href="{!! route('propiedadEavs.index') !!}" class="btn btn-default">Cancel</a>
</div>
