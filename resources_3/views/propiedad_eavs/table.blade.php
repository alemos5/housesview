<div class="table-responsive">
    <table class="table" id="propiedadEavs-table">
        <thead>
            <tr>
                <th>Attribute</th>
        <th>Grupo Id</th>
        <th>User Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($propiedadEavs as $propiedadEavs)
            <tr>
                <td>{!! $propiedadEavs->attribute !!}</td>
            <td>{!! $propiedadEavs->grupo_id !!}</td>
            <td>{!! $propiedadEavs->user_id !!}</td>
                <td>
                    {!! Form::open(['route' => ['propiedadEavs.destroy', $propiedadEavs->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('propiedadEavs.show', [$propiedadEavs->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('propiedadEavs.edit', [$propiedadEavs->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
