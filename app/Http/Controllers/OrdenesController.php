<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOrdenesRequest;
use App\Http\Requests\UpdateOrdenesRequest;
use App\Mail\CompraPlan;
use App\Models\Ordenes;
use App\Models\PlanDuracions;
use App\Models\Planes;
use App\Models\Propiedades;
use App\Repositories\OrdenesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\User;
use Auth;
use Mail;

class OrdenesController extends AppBaseController
{
    /** @var  OrdenesRepository */
    private $ordenesRepository;

    public function __construct(OrdenesRepository $ordenesRepo)
    {
        $this->ordenesRepository = $ordenesRepo;
    }

    /**
     * Display a listing of the Ordenes.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->ordenesRepository->pushCriteria(new RequestCriteria($request));
        $ordenes = $this->ordenesRepository->all();

        return view('ordenes.index')
            ->with('ordenes', $ordenes);
    }

    /**
     * Show the form for creating a new Ordenes.
     *
     * @return Response
     */
    public function create()
    {
        return view('ordenes.create');
    }

    /**
     * Store a newly created Ordenes in storage.
     *
     * @param CreateOrdenesRequest $request
     *
     * @return Response
     */
    public function store(CreateOrdenesRequest $request)
    {
        $input = $request->all();

        $ordenes = $this->ordenesRepository->create($input);

        Flash::success('Ordenes saved successfully.');

        return redirect(route('ordenes.index'));
    }

    public function storeAjax(Request $request) {
        //return json_encode($request->all());
//        echo Auth::id(); die();

        $planDuracion = PlanDuracions::where('id', '=', $request->plan_duracion_id)->first();
        $plan = Planes::where('id', $planDuracion->plan_id)->first();
//        echo json_encode($planDuracion);
//        die();
        $orden = new Ordenes;
        $orden->plan_id = $request->plan_id;
        $orden->plan_valor = $request->plan_valor;
        $orden->plan_duracion_id = $request->plan_duracion_id;
        $orden->plan_duracion_valor = $request->plan_duracion_valor;
        $orden->user_id = Auth::id();
        $orden->estatus = 0;
        $orden->valor = $request->total;
        $fecha_actual = date('Y-m-d H:i:s');
        $orden->fecha_hasta = date("Y-m-d H:i:s",strtotime($fecha_actual."+ ".$planDuracion->cantidad." month"));
        $orden->estatus = 0;

        $orden->save();

//        echo json_encode($orden); die();
        Mail::to('josearmandomarcano@gmail.com')->send(new CompraPlan($plan, $planDuracion, $orden));

        return response('ok', 200);
    }

    /**
     * Display the specified Ordenes.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ordenes = $this->ordenesRepository->findWithoutFail($id);

        if (empty($ordenes)) {
            Flash::error('Ordenes not found');

            return redirect(route('ordenes.index'));
        }

        return view('ordenes.show')->with('ordenes', $ordenes);
    }

    /**
     * Show the form for editing the specified Ordenes.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ordenes = $this->ordenesRepository->findWithoutFail($id);

        if (empty($ordenes)) {
            Flash::error('Ordenes not found');

            return redirect(route('ordenes.index'));
        }

        return view('ordenes.edit')->with('ordenes', $ordenes);
    }

    /**
     * Update the specified Ordenes in storage.
     *
     * @param  int              $id
     * @param UpdateOrdenesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOrdenesRequest $request)
    {
        $ordenes = $this->ordenesRepository->findWithoutFail($id);

        if (empty($ordenes)) {
            Flash::error('Ordenes not found');

            return redirect(route('ordenes.index'));
        }

        $ordenes = $this->ordenesRepository->update($request->all(), $id);

        Flash::success('Ordenes updated successfully.');

        return redirect(route('ordenes.index'));
    }

    /**
     * Remove the specified Ordenes from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ordenes = $this->ordenesRepository->findWithoutFail($id);

        if (empty($ordenes)) {
            Flash::error('Ordenes not found');

            return redirect(route('ordenes.index'));
        }

        $this->ordenesRepository->delete($id);

        Flash::success('Ordenes deleted successfully.');

        return redirect(route('ordenes.index'));
    }

    public static function isOrderPagar() {
        $orden = Ordenes::where('user_id', '=', auth()->id())
            ->where('estatus', '=', '0')
            ->first();;
        if ($orden) {
            return $orden;
        }
        return false;
    }

    public static function getOrdenActivo() {

        $fechaActual = date("Y-m-d H:i:s");

        $ordenes = Ordenes::where('user_id', '=', auth()->id())
            ->where('fecha_hasta', '<=', $fechaActual)
            ->where('estatus', '=', '1')
            ->get();

        if ($ordenes) {

            foreach ($ordenes as $orden) {
                $propiedades = Propiedades::where('plan_id', '=', $orden->plan_id)->where('estatus', '=', '0')->get();
                $planDuracion = PlanDuracions::where('id', '=', $orden->plan_duracion_id)->first();
                echo var_dump(count($propiedades)).var_dump($planDuracion->cantidad)."<hr>";
                if (count($propiedades) < $planDuracion->cantidad) {
                    return $orden;
                }
            }
            return false;
        }
        return false;
    }

}
