<div class="table-responsive">
    <table class="table" id="favoritos-table">
        <thead>
            <tr>
                <th>Propiedad Id</th>
        <th>User Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($favoritos as $favoritos)
            <tr>
                <td>{!! $favoritos->propiedad_id !!}</td>
            <td>{!! $favoritos->user_id !!}</td>
                <td>
                    {!! Form::open(['route' => ['favoritos.destroy', $favoritos->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('favoritos.show', [$favoritos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('favoritos.edit', [$favoritos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
