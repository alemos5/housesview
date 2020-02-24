<div class="table-responsive">
    <table class="table" id="planDuracions-table">
        <thead>
            <tr>
                <th>Plan Id</th>
        <th>Cantidad</th>
        <th>Valor</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($planDuracions as $planDuracions)
            <tr>
                <td>{!! $planDuracions->plan_id !!}</td>
            <td>{!! $planDuracions->cantidad !!}</td>
            <td>{!! $planDuracions->valor !!}</td>
                <td>
                    {!! Form::open(['route' => ['planDuracions.destroy', $planDuracions->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('planDuracions.show', [$planDuracions->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('planDuracions.edit', [$planDuracions->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
