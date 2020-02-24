<div class="table-responsive">
    <table class="table" id="provincias-table">
        <thead>
            <tr>
                <th>Provincia</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($provincias as $provincias)
            <tr>
                <td>{!! $provincias->provincia !!}</td>
                <td>
                    {!! Form::open(['route' => ['provincias.destroy', $provincias->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('provincias.show', [$provincias->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('provincias.edit', [$provincias->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
