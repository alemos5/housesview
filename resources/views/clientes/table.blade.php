<div class="table-responsive">
    <table class="table" id="clientes-table">
        <thead>
            <tr>
                <th>Direccion 2</th>
        <th>Direccion 3</th>
        <th>Id Pais</th>
        <th>Code Cliente</th>
        <th>Nombre</th>
        <th>Compania</th>
        <th>Direccion</th>
        <th>Pais</th>
        <th>Ciudad</th>
        <th>Estado</th>
        <th>Telefono</th>
        <th>Fax</th>
        <th>Password</th>
        <th>Email</th>
        <th>Ci</th>
        <th>Suscripcion</th>
        <th>Servicio</th>
        <th>Promocion</th>
        <th>Publi</th>
        <th>Catologo</th>
        <th>Otro Catalogo</th>
        <th>Correo</th>
        <th>Pass Conf</th>
        <th>Fecha</th>
        <th>Estatus</th>
        <th>Tarifa</th>
        <th>Seguro</th>
        <th>Bodega</th>
        <th>Costo Consolidacion</th>
        <th>Impuestos</th>
        <th>Otros</th>
        <th>Referido</th>
        <th>Id Cliente Padre</th>
        <th>Codigo Cliente Hijo</th>
        <th>Observacion</th>
        <th>Tarifa Orden</th>
        <th>Id Agencia</th>
        <th>Maximo</th>
        <th>Rol</th>
        <th>Customer Stripe</th>
        <th>Remember Token</th>
        <th>Request</th>
        <th>Response</th>
        <th>Cliente Envio</th>
        <th>Img</th>
        <th>Apellido</th>
        <th>Horario Atencion</th>
        <th>Whatsapp</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($clientes as $clientes)
            <tr>
                <td>{!! $clientes->direccion_2 !!}</td>
            <td>{!! $clientes->direccion_3 !!}</td>
            <td>{!! $clientes->id_pais !!}</td>
            <td>{!! $clientes->code_cliente !!}</td>
            <td>{!! $clientes->nombre !!}</td>
            <td>{!! $clientes->compania !!}</td>
            <td>{!! $clientes->direccion !!}</td>
            <td>{!! $clientes->pais !!}</td>
            <td>{!! $clientes->ciudad !!}</td>
            <td>{!! $clientes->estado !!}</td>
            <td>{!! $clientes->telefono !!}</td>
            <td>{!! $clientes->fax !!}</td>
            <td>{!! $clientes->password !!}</td>
            <td>{!! $clientes->email !!}</td>
            <td>{!! $clientes->ci !!}</td>
            <td>{!! $clientes->suscripcion !!}</td>
            <td>{!! $clientes->servicio !!}</td>
            <td>{!! $clientes->promocion !!}</td>
            <td>{!! $clientes->publi !!}</td>
            <td>{!! $clientes->catologo !!}</td>
            <td>{!! $clientes->otro_catalogo !!}</td>
            <td>{!! $clientes->correo !!}</td>
            <td>{!! $clientes->pass_conf !!}</td>
            <td>{!! $clientes->fecha !!}</td>
            <td>{!! $clientes->estatus !!}</td>
            <td>{!! $clientes->tarifa !!}</td>
            <td>{!! $clientes->seguro !!}</td>
            <td>{!! $clientes->bodega !!}</td>
            <td>{!! $clientes->costo_consolidacion !!}</td>
            <td>{!! $clientes->impuestos !!}</td>
            <td>{!! $clientes->otros !!}</td>
            <td>{!! $clientes->referido !!}</td>
            <td>{!! $clientes->id_cliente_padre !!}</td>
            <td>{!! $clientes->codigo_cliente_hijo !!}</td>
            <td>{!! $clientes->observacion !!}</td>
            <td>{!! $clientes->tarifa_orden !!}</td>
            <td>{!! $clientes->id_agencia !!}</td>
            <td>{!! $clientes->maximo !!}</td>
            <td>{!! $clientes->rol !!}</td>
            <td>{!! $clientes->customer_stripe !!}</td>
            <td>{!! $clientes->remember_token !!}</td>
            <td>{!! $clientes->request !!}</td>
            <td>{!! $clientes->response !!}</td>
            <td>{!! $clientes->cliente_envio !!}</td>
            <td>{!! $clientes->img !!}</td>
            <td>{!! $clientes->apellido !!}</td>
            <td>{!! $clientes->horario_atencion !!}</td>
            <td>{!! $clientes->whatsapp !!}</td>
                <td>
                    {!! Form::open(['route' => ['clientes.destroy', $clientes->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('clientes.show', [$clientes->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('clientes.edit', [$clientes->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
