<!-- Plan Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('plan_id', 'Plan Id:') !!}

<?php
//        echo json_encode($planDuracions->plan_id); die();

        ?>

    <select name="plan_id">
        <?php
//        echo json_encode($planDuracions); die();
        $planes = \App\Models\Planes::all();
        foreach ($planes as $plan) {
            if (isset($planDuracions)) {
                if ($plan->id == $planDuracions->plan_id) {
//                    echo $planDuracions->plan_id; die();
                    ?>
                    <option selected="selected" value="<?php echo $plan->id; ?>"><?php echo $plan->plan; ?></option>
                    <?php
                }else{
                    ?>
                    <option value="<?php echo $plan->id; ?>"><?php echo $plan->plan; ?></option>
                    <?php
                }
            }else{
                ?>
                <option value="<?php echo $plan->id; ?>"><?php echo $plan->plan; ?></option>
                <?php
            }
        }
        ?>
    </select>

{{--    {!! Form::number('plan_id', null, ['class' => 'form-control']) !!}--}}
</div>

<!-- Cantidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cantidad', 'Cantidad:') !!}
    {!! Form::number('cantidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Valor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valor', 'Valor:') !!}
    {!! Form::number('valor', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('planDuracions.index') !!}" class="btn btn-default">Cancel</a>
</div>
