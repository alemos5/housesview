<!-- Id Privincia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_privincia', 'Id Privincia:') !!}
    {!! Form::number('id_privincia', null, ['class' => 'form-control']) !!}
</div>

<!-- Localidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('localidad', 'Localidad:') !!}
    {!! Form::text('localidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('localidades.index') !!}" class="btn btn-default">Cancel</a>
</div>
