<div class="table-responsive">
    <table class="table" id="propiedades-table">
        <thead>
            <tr>
                <th>Tipo Operacions Id</th>
        <th>Tipo Propiedades Id</th>
        <th>Provincias Id</th>
        <th>Ciudads Id</th>
        <th>Localidads Id</th>
        <th>Direccion</th>
        <th>Latitud</th>
        <th>Longitud</th>
        <th>Titulo</th>
        <th>Precio</th>
        <th>Moneda</th>
        <th>Expensas</th>
        <th>Cant Ambiente</th>
        <th>Cant Dormitorio</th>
        <th>Cant Banio</th>
        <th>Cant Cochera</th>
        <th>Cant Toilettes</th>
        <th>Tipo Antiguedas Id</th>
        <th>Anios</th>
        <th>Metros</th>
        <th>Metros Totales</th>
        <th>User Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($propiedades as $propiedades)
            <tr>
                <td>{!! $propiedades->tipo_operacions_id !!}</td>
            <td>{!! $propiedades->tipo_propiedades_id !!}</td>
            <td>{!! $propiedades->provincias_id !!}</td>
            <td>{!! $propiedades->ciudads_id !!}</td>
            <td>{!! $propiedades->localidads_id !!}</td>
            <td>{!! $propiedades->direccion !!}</td>
            <td>{!! $propiedades->latitud !!}</td>
            <td>{!! $propiedades->longitud !!}</td>
            <td>{!! $propiedades->titulo !!}</td>
            <td>{!! $propiedades->precio !!}</td>
            <td>{!! $propiedades->moneda !!}</td>
            <td>{!! $propiedades->expensas !!}</td>
            <td>{!! $propiedades->cant_ambiente !!}</td>
            <td>{!! $propiedades->cant_dormitorio !!}</td>
            <td>{!! $propiedades->cant_banio !!}</td>
            <td>{!! $propiedades->cant_cochera !!}</td>
            <td>{!! $propiedades->cant_toilettes !!}</td>
            <td>{!! $propiedades->tipo_antiguedas_id !!}</td>
            <td>{!! $propiedades->anios !!}</td>
            <td>{!! $propiedades->metros !!}</td>
            <td>{!! $propiedades->metros_totales !!}</td>
            <td>{!! $propiedades->user_id !!}</td>
                <td>
                    {!! Form::open(['route' => ['propiedades.destroy', $propiedades->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('propiedades.show', [$propiedades->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('propiedades.edit', [$propiedades->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
