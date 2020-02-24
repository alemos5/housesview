<div class="table-responsive">
    <table class="table" id="ordenes-table">
        <thead>
            <tr>
                <th>Plan Id</th>
        <th>Plan Valor</th>
        <th>Plan Duracion Id</th>
        <th>Plan Duracion Valor</th>
        <th>Orden</th>
        <th>User Id</th>
        <th>Estatus</th>
        <th>Valor</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($ordenes as $ordenes)
            <tr>
                <td>{!! $ordenes->plan_id !!}</td>
            <td>{!! $ordenes->plan_valor !!}</td>
            <td>{!! $ordenes->plan_duracion_id !!}</td>
            <td>{!! $ordenes->plan_duracion_valor !!}</td>
            <td>{!! $ordenes->orden !!}</td>
            <td>{!! $ordenes->user_id !!}</td>
            <td>{!! $ordenes->estatus !!}</td>
            <td>{!! $ordenes->valor !!}</td>
                <td>
                    {!! Form::open(['route' => ['ordenes.destroy', $ordenes->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('ordenes.show', [$ordenes->id]) !!}" class='btn btn-default btn-xs'><i class="far fa-eye"></i></a>
                        <a href="{!! route('ordenes.edit', [$ordenes->id]) !!}" class='btn btn-default btn-xs'><i class="far fa-edit"></i></a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
