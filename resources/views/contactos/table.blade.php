<div class="table-responsive">
    <table class="table" id="contactos-table">
        <thead>
            <tr>
                <th>Propiedad Id</th>
        <th>User Id</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Telefono</th>
        <th>Comentario</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($contactos as $contactos)
            <tr>
                <td>{!! $contactos->propiedad_id !!}</td>
            <td>{!! $contactos->user_id !!}</td>
            <td>{!! $contactos->nombre !!}</td>
            <td>{!! $contactos->email !!}</td>
            <td>{!! $contactos->telefono !!}</td>
            <td>{!! $contactos->comentario !!}</td>
                <td>
                    {!! Form::open(['route' => ['contactos.destroy', $contactos->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('contactos.show', [$contactos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('contactos.edit', [$contactos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
