<div class="stepform">
    <form name="msform" id="msform"  action="{{route('/').'/propiedades'}}" method="POST">
    @csrf

    <!-- progressbar -->
        <ul id="progressbar">
            <li class="active">Tipo de Propiedad</li>
            <li>Datos de la propiedad</li>
            <li>Datos del vendedor</li>
            <li>Finalizar</li>
        </ul>
        <!-- fieldsets -->
        <fieldset class="step1 card">
            <h2 class="fs-title">¿Que tipo de operacion realizaras?</h2>
            <h3 class="fs-subtitle">Paso 1</h3>
            <div class="row">
                <div class="col-lg-4 cardstep">
                    <input type="radio" name="tipo_operacions_id" value="1" id="venta" >
                    <label for="venta">
                        <img src="{{route('/')}}/images/icons/1.png" alt="">
                        <h4>Venta</h4>
                    </label>
                </div>
                <div class="col-lg-4 cardstep">
                    <input type="radio" name="tipo_operacions_id" value="2" id="alquiler" >
                    <label for="alquiler">
                        <img src="{{route('/')}}/images/icons/2.png" alt="">
                        <h4>Alquiler</h4>
                    </label>

                </div>
                <div class="col-lg-4 cardstep">
                    <input type="radio" name="tipo_operacions_id" value="3" id="temporal" >
                    <label for="temporal">
                        <img src="{{route('/')}}/images/icons/3.png" alt="">
                        <h4>Temporal</h4>
                    </label>
                </div>
            </div>

            <input type="button" name="next" class="next action-button float-right" value="Siguiente" />

        </fieldset>
        <fieldset class="step2 card">
            <h2 class="fs-title">Ubicacion</h2>
            <h3 class="fs-subtitle">Paso 2</h3>
            <div class="row">
                <div class="col-lg-3">

                </div>
                <div class="col-lg-6">
                    <div class="">
                      <p>Tipo de propiedad</p>
                        <select class="form-control form-control-sm" name="tipo_propiedades_id">
                            <option value="">¿Que tipo de propiedad queres publicar?</option>
                            <option value="1">Casa</option>
                            <option value="2">Departamento</option>
                            <option value="3">PH</option>
                        </select>
                    </div>
                    <div class="">
                        <select class="form-control form-control-sm" name="tipo_duenio_id">
                            <option value="">¿Que tipo de dueño es?</option>
                            <option value="1">Dueño directo</option>
                            <option value="2">inmobiliaria</option>
                        </select>
                    </div>
                    <div class="">
                        <p>Ubicación</p>
                        <select onchange="getLocalidad(this.value)" class="form-control form-control-sm" name="provincias_id" id="provincia">
                            <option value="">Seleccione ...</option>
                            <?php
                            $provinvias = \App\Models\Provincias::all();
                            foreach ($provinvias as $provinvia) {
                            ?><option value="<?php echo $provinvia->id; ?>"><?php echo $provinvia->provincia; ?></option><?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="">
                        <select id="localidad" class="form-control form-control-sm" name="localidads_id">
                            <option value="">Seleccione ...</option>
                        </select>
                    </div>
                    {{--            <div class="">--}}
                    {{--              <select class="form-control form-control-sm" name="">--}}
                    {{--                <option value="">Barrio</option>--}}
                    {{--                <option value="">Almagro</option>--}}
                    {{--                <option value="">Chacarita</option>--}}
                    {{--                <option value="">Boedo</option>--}}
                    {{--              </select>--}}
                    {{--            </div>--}}
                    <div class="">
                        <input class="form-control" type="text" name="direccion" id="direccion"  placeholder="Direccion completa">
                    </div>
                    <div class="">
                      <button type="button" class="form-control btn btn-danger" id="btn">Validar Dirección</button>
                    </div>
                </div>
                <div>
                        <input class="form-control" type="hidden" id="latitude" name="latitude" readonly />
                        <input class="form-control" type="hidden" id="longitude" name="longitude" readonly />
                </div>
                <div id="map"></div>
                <div class="col-lg-3">

                </div>
            </div>

            <input type="button" name="next" class="next action-button float-right" value="Siguiente" />
            <input type="button" name="previous" class="previous action-button float-right"  value="Anterior" />
        </fieldset>
        <fieldset class="step3 card">
            <h2 class="fs-title">Datos de la Propiedad</h2>
            <h3 class="fs-subtitle">Paso 3</h3>
            <div class="row">
                <div class="col-lg-2">

                </div>
                <div class="col-lg-8">
                    <div class="">
                        <input class="form-control" type="text" name="titulo" placeholder="Titulo del anuncio">
                    </div>
                    <div class="">
                        <textarea name="name" rows="4" cols="50" placeholder="Detalles"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            Precio
                        </div>
                        <div class="col-lg-4">
                            <select class="form-control form-control-sm" name="moneda">
                                <option value="Indique la moneda">Moneda</option>
                                <option value="">$</option>
                                <option value="">U$D</option>
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <input class="form-control" type="text" name="precio" placeholder="Valor" value="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            Expensas
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" type="text" name="expensas" placeholder="Costo de expensas" value="">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-4">
                            Ambientes
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" type="text" name="cant_ambiente" value="" placeholder="Cantidad de Ambientes">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            Dormitorios
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" type="text" name="cant_dormitorio" value="" placeholder="Cantidad de Dormitorios">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            Baños
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" type="text" name="cant_banio" value="" placeholder="Cantidad de Baños">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            Cocheras
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" type="text" name="cant_cochera" value="" placeholder="Cantidad de Cocheras">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            Toilettes
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" type="text" name="cant_toilettes" value="" placeholder="Cantidad de Toilettes">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            Antiguedad
                        </div>
                        <div class="col-lg-8">
                          <select class="form-control form-control-sm m-b-10" name="tipo_antiguedas_id">
                              <option value="Indique la moneda">Selecicone opción</option>
                              <option value="1">En Construccion</option>
                              <option value="2">A Estrenar</option>
                              <option value="3">Antiguo</option>
                          </select>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-4">
                          Años
                      </div>
                      <div class="col-lg-8">
                          <input class="form-control" type="text" name="anios" value="" placeholder="Años de antiguedad">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-4">
                          Mentros²
                      </div>
                      <div class="col-lg-8">
                          <input class="form-control" type="text" name="metros" value="" placeholder="m²">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-4">
                          Metros² Totales
                      </div>
                      <div class="col-lg-8">
                          <input class="form-control" type="text" name="metros_totales" value="" placeholder="m² Totales">
                      </div>
                    </div>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
            <input type="button" name="next" class="next action-button float-right" value="Siguiente" />
            <input type="button" name="previous" class="previous action-button float-right"  value="Anterior" />
        </fieldset>
        <fieldset class="step4 card">
            <h2 class="fs-title">Caracteristicas</h2>
            <h3 class="fs-subtitle">¡Ultimo Paso!</h3>

            <?php
            $grupoEavs = \App\Models\PropiedadGrupos::all();
            foreach ($grupoEavs as $grupoEav) {
                echo "<br><b>".$grupoEav->grupo."</b><hr>";
                $propiedadesEavs = \App\Models\PropiedadEavs::where('grupo_id', '=', $grupoEav->id)->get();
                ?>
                <div class="row">
                <?php
                foreach ($propiedadesEavs as $propiedadesEav) {
                    ?>
                    <div class="col-lg-3">
                        <input type="checkbox" name="am_<?php echo $propiedadesEav->id; ?>" value="<?php echo $propiedadesEav->id; ?>" id="<?php echo $propiedadesEav->attribute; ?>">
                        <label for="<?php echo $propiedadesEav->attribute; ?>"><?php echo $propiedadesEav->attribute; ?></label>
                    </div>
                    <?php
                }
                ?>
                </div>
                <?php
            }
            ?>

            <input type="submit" name="" class="action-button float-right" value="Publicar">
            <input type="button" name="previous" class="next action-button float-right" value="Anterior">
        </fieldset>
        <input type="hidden" name="user_id" value="{{ Auth::user()->id_cliente }}">
        {{--            <button onclick="submit()">msform</button>--}}

    </form>
</div>
