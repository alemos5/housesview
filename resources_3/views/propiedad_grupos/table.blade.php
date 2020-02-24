<div class="table-responsive">
    <table class="table" id="propiedadGrupos-table">
        <thead>
            <tr>
                <th>Grupo</th>
        <th>User Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($propiedadGrupos as $propiedadGrupos)
            <tr>
                <td>{!! $propiedadGrupos->grupo !!}</td>
            <td>{!! $propiedadGrupos->user_id !!}</td>
                <td>
                    {!! Form::open(['route' => ['propiedadGrupos.destroy', $propiedadGrupos->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('propiedadGrupos.show', [$propiedadGrupos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('propiedadGrupos.edit', [$propiedadGrupos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
