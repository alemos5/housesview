<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProvinciasRequest;
use App\Http\Requests\UpdateProvinciasRequest;
use App\Models\Localidades;
use App\Repositories\ProvinciasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ProvinciasController extends AppBaseController
{
    /** @var  ProvinciasRepository */
    private $provinciasRepository;

    public function __construct(ProvinciasRepository $provinciasRepo)
    {
        $this->provinciasRepository = $provinciasRepo;
    }

    /**
     * Display a listing of the Provincias.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->provinciasRepository->pushCriteria(new RequestCriteria($request));
        $provincias = $this->provinciasRepository->all();

        return view('provincias.index')
            ->with('provincias', $provincias);
    }

    /**
     * Show the form for creating a new Provincias.
     *
     * @return Response
     */
    public function create()
    {
        return view('provincias.create');
    }

    /**
     * Store a newly created Provincias in storage.
     *
     * @param CreateProvinciasRequest $request
     *
     * @return Response
     */
    public function store(CreateProvinciasRequest $request)
    {

        $input = $request->all();

        $provincias = $this->provinciasRepository->create($input);

        Flash::success('Provincias saved successfully.');

        return redirect(route('provincias.index'));
    }

    /**
     * Display the specified Provincias.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $provincias = $this->provinciasRepository->findWithoutFail($id);

        if (empty($provincias)) {
            Flash::error('Provincias not found');

            return redirect(route('provincias.index'));
        }

        return view('provincias.show')->with('provincias', $provincias);
    }

    /**
     * Show the form for editing the specified Provincias.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $provincias = $this->provinciasRepository->findWithoutFail($id);

        if (empty($provincias)) {
            Flash::error('Provincias not found');

            return redirect(route('provincias.index'));
        }

        return view('provincias.edit')->with('provincias', $provincias);
    }

    /**
     * Update the specified Provincias in storage.
     *
     * @param  int              $id
     * @param UpdateProvinciasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProvinciasRequest $request)
    {
        $provincias = $this->provinciasRepository->findWithoutFail($id);

        if (empty($provincias)) {
            Flash::error('Provincias not found');

            return redirect(route('provincias.index'));
        }

        $provincias = $this->provinciasRepository->update($request->all(), $id);

        Flash::success('Provincias updated successfully.');

        return redirect(route('provincias.index'));
    }

    /**
     * Remove the specified Provincias from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $provincias = $this->provinciasRepository->findWithoutFail($id);

        if (empty($provincias)) {
            Flash::error('Provincias not found');

            return redirect(route('provincias.index'));
        }

        $this->provinciasRepository->delete($id);

        Flash::success('Provincias deleted successfully.');

        return redirect(route('provincias.index'));
    }

    public function getLocalidad()
    {
        $id = $_POST['id'];
        $localidades = Localidades::where('id_privincia', $id)->get();
        $option = "<option value=''>Seleccione...</option>";
        foreach ($localidades as $localidad) {
            $option .= "<option value='".$localidad->id."'>".$localidad->localidad."</option>";
        }
        echo $option;
    }

}
