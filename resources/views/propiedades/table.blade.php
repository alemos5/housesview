<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"  type="text/javascript"></script>
<script async defer src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>


    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Usuario</th>
                <th>Titulo</th>
                <th>Vencimiento</th>
                <th>Ver Recorrido</th>
                <th>Subir Recorrido</th>
                <th>Enviar Correo</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
          @foreach($propiedades as $propiedades)
              <?php if ($propiedades->script) { ?>
              <tr style="background-color: #feebeb" >
              <?php }else { ?>
                    <tr>
               <?php } ?>

                   <td>{{$propiedades->id}}</td>
                   <td>
                    <?php
                       $anunciante = \App\Clientes::where('id_cliente', $propiedades->user_id)->first();
                       echo $anunciante['nombre'];
                       ?>

                   </td>
                <td>{!! $propiedades->titulo !!}</td>
                <td>
                    <?php
                      $orden = \App\Models\Ordenes::where('id', $propiedades->orden_id)->first();
                      echo $orden['fecha_hasta'];
                   ?>
               </td>
                <td class="text-center">
                  <button onclick="idIframeRecorrido({{$propiedades->id}}, '<?php echo $propiedades->script; ?>')" class="btn btn-primary" >
                    <i class="fas fa-vr-cardboard"></i>
                  </button>
                </td>
                <td  class="text-center">
                  <button onclick="IdaddRecorrido({{$propiedades->id}})" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                    <i class="fas fa-cloud-upload-alt"></i>
                  </button>
                </td>
                <td  class="text-center">
                  <button onclick="" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                    <i class="fas fa-envelope"></i>
                  </button>
                </td>
                <td>
                  {!! Form::open(['route' => ['propiedades.destroy', $propiedades->id], 'method' => 'delete']) !!}
                  <div class='btn-group'>
                      <a href="{!! route('propiedades.show', [$propiedades->id]) !!}" class='btn btn-default btn-xs'><i class="fas fa-eye"></i></a>
                      <a href="{!! route('propiedades.edit', [$propiedades->id]) !!}" class='btn btn-default btn-xs'><i class="fas fa-edit"></i></a>
                      {!! Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                  </div>
                  {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
              <th>Usuario</th>
              <th>Titulo</th>
              <th>Vencimiento</th>
              <th>Ver Recorrido</th>
              <th>Subir Recorrido</th>
              <th>Enviar Correo</th>
              <th>Accion</th>
            </tr>
        </tfoot>
    </table>


<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Agregar recorrido</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form method="POST" action="{{route('uploadFile')}}" accept-charset="UTF-8" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <label for="archivo"><b>Archivo: </b></label><br>
                    <input type="file" name="archivo" required>
                    <input type="hidden" id="idPropiedad" value="0" name="idPropiedad">
                    <input class="btn btn-success" type="submit" value="Enviar" >
                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Agregar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
            </div>

        </div>
    </div>
</div>


<!-- The Modal -->
<div class="modal" id="myModalRecorrido">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Recorrido</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div id="iframeRecorrido"></div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
            </div>

        </div>
    </div>
</div>

<script>
    function IdaddRecorrido(id)
    {
        $("#idPropiedad").val(id);
    }

    function idIframeRecorrido(id, url)
    {
        var urlFinal = "<?php echo URL::to('/').'/'; ?>"+url;
        //var url = _"<?php //echo URL::to('/').'recorrido/'; ?>"+id;
        // $('#iframeRecorrido').html('<iframe id="iframeRecorrido" src="'+urlFinal+'"></iframe>');
        window.open(urlFinal, '_blank');
    }

    $(document).ready(function() {
    $('#example').DataTable();
} );

</script>
