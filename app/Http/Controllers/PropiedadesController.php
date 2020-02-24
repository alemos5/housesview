<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePropiedadesRequest;
use App\Http\Requests\UpdatePropiedadesRequest;
use App\Mail\CreatePropiedad;
use App\Mail\EmergencyCallReceived;
use App\Models\PropiedadEavValue;
use App\Models\Propiedades;
use App\Repositories\PropiedadesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Auth;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use DB;
use Mail;

class PropiedadesController extends AppBaseController
{
    /** @var  PropiedadesRepository */
    private $propiedadesRepository;

    public function __construct(PropiedadesRepository $propiedadesRepo)
    {
        $this->propiedadesRepository = $propiedadesRepo;
    }

    /**
     * Display a listing of the Propiedades.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->propiedadesRepository->pushCriteria(new RequestCriteria($request));
        $propiedades = $this->propiedadesRepository->all();

        if ($_POST) {
            var_dump($request->all()); die();
        }

        return view('propiedades.index')
            ->with('propiedades', $propiedades);
    }

    public function indexAdmin(Request $request)
    {
        $this->propiedadesRepository->pushCriteria(new RequestCriteria($request));
        $propiedades = $this->propiedadesRepository->all();

        if ($_POST) {
            var_dump($request->all()); die();
        }

        return view('propiedades.admin')
            ->with('propiedades', $propiedades);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function search(Request $request)
    {
        $this->propiedadesRepository->pushCriteria(new RequestCriteria($request));
//        $propiedades = $this->propiedadesRepository->all();

        $search = $this->getSearch($request);
        if($search) {
            $propiedades = DB::select('
                SELECT a.*, b.provincia, c.localidad, d.nombre FROM propiedades a
                    LEFT JOIN provincias b ON (a.provincias_id = b.id)
                    LEFT JOIN localidades c ON (a.localidads_id = c.id)
                    LEFT JOIN clientes d ON (a.user_id = d.id_cliente)
                WHERE
                    ' . $search . '
            ');
        }else{
            $propiedades = DB::select('
                SELECT a.*, b.provincia, c.localidad, d.nombre FROM propiedades a
                    LEFT JOIN provincias b ON (a.provincias_id = b.id)
                    LEFT JOIN localidades c ON (a.localidads_id = c.id)
                    LEFT JOIN clientes d ON (a.user_id = d.id_cliente)
            ');
        }

        $data['propiedad'] = array();
        foreach ($propiedades as $propiedad) {
            $data['propiedad'][] = array(
                'data'      => $propiedad,
                'amenities' => $this->getAmenities($propiedad->id)
            );
        }

        return view('propiedades.index' , $data);
    }




    public function map()
    {
      $propiedades = Propiedades::get();
        return view('propiedades.propiedadesmap', compact(
          'propiedades'
        ));
    }






    public function getSearch($request) {

        $search = "";
        if ($request->tipo_vivienda) {
            $search = "a.tipo_operacions_id =".$request->tipo_vivienda;
        }
        if ($request->tipo_inmueble) {
            if ($search) {
                $search .= ' AND a.tipo_propiedades_id ='.$request->tipo_inmueble;
            }else{
                $search = 'a.tipo_propiedades_id ='.$request->tipo_inmueble;
            }
        }
        if ($request->codigo) {
            if ($search) {
                $search .= ' AND a.id ='.$request->codigo;
            }else{
                $search = 'a.id ='.$request->codigo;
            }
        }
        if ($request->rango_precio_desde && $request->rango_precio_hasta) {
            if ($search) {
                $search .= ' AND (a.precio >= '.$request->rango_precio_desde .' AND a.precio <='.$request->rango_precio_hasta.')';
            }else{
                $search = ' a.precio >= '.$request->rango_precio_desde .' AND a.precio <='.$request->rango_precio_hasta;
            }
        }else{
            if ($request->rango_precio_desde) {
                if ($search) {
                    $search .= ' AND a.precio >= '.$request->rango_precio_desde;
                }else{
                    $search .= ' a.precio >= '.$request->rango_precio_desde;
                }
            }else{
                if ($request->rango_precio_hasta) {
                    if ($search) {
                        $search .= ' AND a.precio <= ' . $request->rango_precio_hasta;
                    } else {
                        $search .= ' a.precio <= ' . $request->rango_precio_hasta;
                    }
                }
            }
        }
        if ($request->direccion) {
            if ($search) {
                $search .= ' AND (a.direccion LIKE "%'.$request->direccion.'%" OR b.provincia LIKE "%'.$request->direccion.'%" OR c.localidad LIKE "%'.$request->direccion.'%")';
            }else{
                $search = '(a.direccion LIKE "%'.$request->direccion.'%" OR b.provincia LIKE "%'.$request->direccion.'%" OR c.localidad LIKE "%'.$request->direccion.'%")';
            }
        }
        if ($request->cant_ambiente) {
            if ($search) {
                $search .= ' AND a.cant_ambiente = '.$request->cant_ambiente;
            }else{
                $search .= 'a.cant_ambiente = '.$request->cant_ambiente;
            }
        }
        if ($request->tipo_vendedor) {
            if ($search) {
                $search .= ' AND a.tipo_duenio_id = '.$request->tipo_vendedor;
            }else{
                $search .= 'a.tipo_duenio_id = '.$request->tipo_vendedor;
            }
        }

        return $search;

    }

    public function getAmenities($propiedad_id) {
        $propiedades = DB::select('
            SELECT a.id, a.propiedad_eav_id as id_eav, c.grupo, b.attribute, b.icon, a.cantidad FROM propiedad_eav_value a
            LEFT JOIN propiedad_eavs b ON (a.propiedad_eav_id = b.id)
            LEFT JOIN propiedad_grupos c ON (b.grupo_id = c.id)
            WHERE a.propiedad_id = '.$propiedad_id.'
        ');
        return $propiedades;
    }

    /**
     * Show the form for creating a new Propiedades.
     *
     * @return Response
     */
    public function create()
    {
        return view('propiedades.create');
    }

    /**
     * Store a newly created Propiedades in storage.
     *
     * @param CreatePropiedadesRequest $request
     *
     * @return Response
     */
    public function store(CreatePropiedadesRequest $request)
    {
        $input = $request->all();
//        $input['user_id '] = Auth::user()->id_cliente;
//        echo Auth::user()->id_cliente; die();
        $ordenActiva = OrdenesController::getOrdenActivo();
        if ($ordenActiva) {
            $input['plan_id'] = $ordenActiva->plan_id;
            $input['orden_id'] = $ordenActiva->id;
        }
//        echo json_encode($input['plan_id']);
//die();
        $propiedades = $this->propiedadesRepository->create($input);

        Flash::success('Propiedades saved successfully.');

        for ($i=0; $i <= 20; $i++) {
            $attribute = new PropiedadEavValue;
            if (isset($_POST['am_'.$i])) {
                $attribute->propiedad_eav_id = $_POST['am_'.$i];
                $attribute->propiedad_id = $propiedades->id;
                $attribute->user_id = Auth::user()->id_cliente;
                $attribute->save();
            }
        }

        Mail::to('josearmandomarcano@gmail.com')->send(new CreatePropiedad($propiedades));
        return redirect(route('/')."/user/mispropiedades");
    }

    /**
     * Display the specified Propiedades.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $propiedades = $this->propiedadesRepository->findWithoutFail($id);

        if ($propiedades) {
            $propiedad = Propiedades::find($id);
            $propiedad->vista = $propiedades->vista + 1;
            $propiedad->save();
        }

        if (empty($propiedades)) {
            Flash::error('Propiedades not found');

            return redirect(route('propiedades.index'));
        }

        return view('propiedades.show')->with('propiedades', $propiedades);
    }

    /**
     * Show the form for editing the specified Propiedades.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $propiedades = $this->propiedadesRepository->findWithoutFail($id);

        if (empty($propiedades)) {
            Flash::error('Propiedades not found');

            return redirect(route('propiedades.index'));
        }

        return view('propiedades.edit')->with('propiedades', $propiedades);
    }

    /**
     * Update the specified Propiedades in storage.
     *
     * @param  int              $id
     * @param UpdatePropiedadesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePropiedadesRequest $request)
    {
        $propiedades = $this->propiedadesRepository->findWithoutFail($id);

        if (empty($propiedades)) {
            Flash::error('Propiedades not found');

            return redirect(route('propiedades.index'));
        }

        $propiedades = $this->propiedadesRepository->update($request->all(), $id);

        Flash::success('Propiedades updated successfully.');

        return redirect(route('propiedades.index'));
    }

    /**
     * Remove the specified Propiedades from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $propiedades = $this->propiedadesRepository->findWithoutFail($id);

        if (empty($propiedades)) {
            Flash::error('Propiedades not found');

            return redirect(route('propiedades.index'));
        }

        $this->propiedadesRepository->delete($id);

        Flash::success('Propiedades deleted successfully.');

        return redirect(route('propiedades.index'));
    }

    public function getPropiedadDestacadas($estatusOrden = 1, $limit = 3) {

        $propiedades = DB::select(
            "SELECT a.* FROM propiedades a
            LEFT JOIN ordenes b ON (a.orden_id = b.id)
            LEFT JOIN planes c ON (b.plan_id = c.id)
            WHERE b.estatus = ".$estatusOrden."
            AND c.destacado = 1
            ORDER BY a.muestra ASC
            LIMIT ".$limit.";"
        );
//        echo json_encode($propiedades); die();
        $destacados = [];
        foreach ($propiedades as $propiedad) {
            $destacados[] = $this->getIDPropiedad($propiedad->id);
            $muestra = $propiedad->muestra + 1;
            $updatePropiedad = DB::select(
                "UPDATE propiedades SET muestra='".$muestra."' WHERE id='".$propiedad->id."';"
            );
        }

        $limit = 6;
        $propiedadesGenerales = DB::select(
            "SELECT * FROM propiedades
            ORDER BY muestra ASC
            LIMIT ".$limit.";"
        );
//        echo json_encode($propiedades); die();
        $dataPropiedadesGenerales = [];
        foreach ($propiedadesGenerales as $propiedadesGeneral) {
            $dataPropiedadesGenerales[] = $this->getIDPropiedad($propiedadesGeneral->id);
            $muestra = $propiedadesGeneral->muestra + 1;
            $updatePropiedad = DB::select(
                "UPDATE propiedades SET muestra='".$muestra."' WHERE id='".$propiedadesGeneral->id."';"
            );
        }

        return view('front.home')
            ->with('destacados', $destacados)
            ->with('dataPropiedadesGenerales', $dataPropiedadesGenerales);
    }

    public function getIDPropiedad($id) {
        $propiedad = DB::select('
            SELECT a.*, b.provincia, c.localidad, d.nombre FROM propiedades a
                LEFT JOIN provincias b ON (a.provincias_id = b.id)
                LEFT JOIN localidades c ON (a.localidads_id = c.id)
                LEFT JOIN clientes d ON (a.user_id = d.id_cliente)
            WHERE
                a.id = '.$id.'
        ');
//        echo json_encode($propiedad); die();
        $data = array(
            'data'      => $propiedad,
            'amenities' => $this->getAmenities($propiedad[0]->id)
        );
        return $data;

    }

    public function testMail()
    {
        Mail::to('josearmandomarcano@gmail.com')->send(new EmergencyCallReceived());
    }

    public function uploadFiles(Request $request)
    {
        $id = $request->idPropiedad;
        $file = "/var/www/houseview/storage/app/"; //URL::to('/');
        $destion = "/var/www/houseview/public/recorrido/".$id; //URL::to('/');

        $file .= $request->file('archivo')->store('public');
       $nombreArchivo = $request->file('archivo');
       $nombreArchivo = $nombreArchivo->getClientOriginalName();
       $nombreArchivo = explode(".", $nombreArchivo);
       $nombreArchivo = $nombreArchivo[0];
       $url = "recorrido/".$id."/".$nombreArchivo;
//        die();
        //trazabilidad
        $salida = shell_exec('unzip '.$file." -d ".$destion);
//        echo "<pre>$salida</pre>";
//        echo 'unzip '.$file." -d ".$destion;
//        die();

        $propiedad = DB::select("
            UPDATE `propiedades` SET `script`='".$url."', `script_result`='".$salida."' WHERE `id`='".$id."';
        ");

        return redirect('propiedades/admin');
    }

}
