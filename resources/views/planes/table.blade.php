<div class="table-responsive">
    <table class="table" id="planes-table">
        <thead>
            <tr>
                <th>Plan</th>
        <th>Recorrido</th>
        <th>Plazo D</th>
        <th>Visibilidad</th>
        <th>P Instalacion</th>
        <th>P Publicacion</th>
        <th>P M I</th>
        <th>P Publicacion Dos</th>
        <th>Destacado</th>
        <th>Descuento</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($planes as $planes)
            <tr>
                <td>{!! $planes->plan !!}</td>
            <td>{!! $planes->recorrido !!}</td>
            <td>{!! $planes->plazo_d !!}</td>
            <td>{!! $planes->visibilidad !!}</td>
            <td>{!! $planes->p_instalacion !!}</td>
            <td>{!! $planes->p_publicacion !!}</td>
            <td>{!! $planes->p_m_i !!}</td>
            <td>{!! $planes->p_publicacion_dos !!}</td>
            <td>
                <?php
                echo ($planes->destacado == 1)? "Destacado" : "No destacado";
                ?>
            </td>
            <td>{!! $planes->descuento !!}</td>
                <td>
                    {!! Form::open(['route' => ['planes.destroy', $planes->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('planes.show', [$planes->id]) !!}" class='btn btn-default btn-xs'><i class="fas fa-eye"></i></a>
                        <a href="{!! route('planes.edit', [$planes->id]) !!}" class='btn btn-default btn-xs'><i class="fas fa-edit"></i></a>
                        {!! Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
