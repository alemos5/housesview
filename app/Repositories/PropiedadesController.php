<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePropiedadesRequest;
use App\Http\Requests\UpdatePropiedadesRequest;
use App\Models\PropiedadEavValue;
use App\Repositories\PropiedadesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Auth;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

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

        return view('propiedades.index')
            ->with('propiedades', $propiedades);
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

//        var_dump($propiedades->id); die();
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
}
