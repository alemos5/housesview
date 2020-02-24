<div class="table-responsive">
    <table class="table" id="localidades-table">
        <thead>
            <tr>
                <th>Id Privincia</th>
        <th>Localidad</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($localidades as $localidades)
            <tr>
                <td>{!! $localidades->id_privincia !!}</td>
            <td>{!! $localidades->localidad !!}</td>
                <td>
                    {!! Form::open(['route' => ['localidades.destroy', $localidades->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('localidades.show', [$localidades->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('localidades.edit', [$localidades->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
