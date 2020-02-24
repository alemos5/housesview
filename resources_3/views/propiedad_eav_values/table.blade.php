<div class="table-responsive">
    <table class="table" id="propiedadEavValues-table">
        <thead>
            <tr>
                <th>Propiedad Eav Id</th>
        <th>Propiedad Id</th>
        <th>User Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($propiedadEavValues as $propiedadEavValue)
            <tr>
                <td>{!! $propiedadEavValue->propiedad_eav_id !!}</td>
            <td>{!! $propiedadEavValue->propiedad_id !!}</td>
            <td>{!! $propiedadEavValue->user_id !!}</td>
                <td>
                    {!! Form::open(['route' => ['propiedadEavValues.destroy', $propiedadEavValue->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('propiedadEavValues.show', [$propiedadEavValue->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('propiedadEavValues.edit', [$propiedadEavValue->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
