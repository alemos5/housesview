<div class="table-responsive">
    <table class="table" id="propiedadEavs-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Icono</th>
        <th>Grupo</th>
                <th colspan="3">Accion</th>
            </tr>
        </thead>
        <tbody>
        @foreach($propiedadEavs as $propiedadEavs)
            <tr>
                <td>{!! $propiedadEavs->attribute !!}</td>
            <td>{!! $propiedadEavs->icon !!}</td>
            <td>{!! $propiedadEavs->grupo_id !!}</td>
                <td>
                    {!! Form::open(['route' => ['propiedadEavs.destroy', $propiedadEavs->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('propiedadEavs.show', [$propiedadEavs->id]) !!}" class='btn btn-default btn-xs'><i class="fas fa-eye"></i></i></a>
                        <a href="{!! route('propiedadEavs.edit', [$propiedadEavs->id]) !!}" class='btn btn-default btn-xs'><i class="far fa-edit"></i></a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
