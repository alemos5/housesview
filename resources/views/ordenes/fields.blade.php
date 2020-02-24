<!-- Plan Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('plan_id', 'Plan Id:') !!}
    {!! Form::number('plan_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Plan Valor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('plan_valor', 'Plan Valor:') !!}
    {!! Form::number('plan_valor', null, ['class' => 'form-control']) !!}
</div>

<!-- Plan Duracion Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('plan_duracion_id', 'Plan Duracion Id:') !!}
    {!! Form::number('plan_duracion_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Plan Duracion Valor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('plan_duracion_valor', 'Plan Duracion Valor:') !!}
    {!! Form::number('plan_duracion_valor', null, ['class' => 'form-control']) !!}
</div>

<!-- Orden Field -->
<div class="form-group col-sm-6">
    {!! Form::label('orden', 'Orden:') !!}
    {!! Form::text('orden', null, ['class' => 'form-control']) !!}
</div>

<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Estatus Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estatus', 'Estatus:') !!}
    {!! Form::number('estatus', null, ['class' => 'form-control']) !!}
</div>

<!-- Valor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valor', 'Valor:') !!}
    {!! Form::number('valor', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('ordenes.index') !!}" class="btn btn-default">Cancel</a>
</div>
