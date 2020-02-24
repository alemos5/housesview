<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePropiedadGruposRequest;
use App\Http\Requests\UpdatePropiedadGruposRequest;
use App\Repositories\PropiedadGruposRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PropiedadGruposController extends AppBaseController
{
    /** @var  PropiedadGruposRepository */
    private $propiedadGruposRepository;

    public function __construct(PropiedadGruposRepository $propiedadGruposRepo)
    {
        $this->propiedadGruposRepository = $propiedadGruposRepo;
    }

    /**
     * Display a listing of the PropiedadGrupos.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->propiedadGruposRepository->pushCriteria(new RequestCriteria($request));
        $propiedadGrupos = $this->propiedadGruposRepository->all();

        return view('propiedad_grupos.index')
            ->with('propiedadGrupos', $propiedadGrupos);
    }

    /**
     * Show the form for creating a new PropiedadGrupos.
     *
     * @return Response
     */
    public function create()
    {
        return view('propiedad_grupos.create');
    }

    /**
     * Store a newly created PropiedadGrupos in storage.
     *
     * @param CreatePropiedadGruposRequest $request
     *
     * @return Response
     */
    public function store(CreatePropiedadGruposRequest $request)
    {
        $input = $request->all();

        $propiedadGrupos = $this->propiedadGruposRepository->create($input);

        Flash::success('Propiedad Grupos saved successfully.');

        return redirect(route('propiedadGrupos.index'));
    }

    /**
     * Display the specified PropiedadGrupos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $propiedadGrupos = $this->propiedadGruposRepository->findWithoutFail($id);

        if (empty($propiedadGrupos)) {
            Flash::error('Propiedad Grupos not found');

            return redirect(route('propiedadGrupos.index'));
        }

        return view('propiedad_grupos.show')->with('propiedadGrupos', $propiedadGrupos);
    }

    /**
     * Show the form for editing the specified PropiedadGrupos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $propiedadGrupos = $this->propiedadGruposRepository->findWithoutFail($id);

        if (empty($propiedadGrupos)) {
            Flash::error('Propiedad Grupos not found');

            return redirect(route('propiedadGrupos.index'));
        }

        return view('propiedad_grupos.edit')->with('propiedadGrupos', $propiedadGrupos);
    }

    /**
     * Update the specified PropiedadGrupos in storage.
     *
     * @param  int              $id
     * @param UpdatePropiedadGruposRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePropiedadGruposRequest $request)
    {
        $propiedadGrupos = $this->propiedadGruposRepository->findWithoutFail($id);

        if (empty($propiedadGrupos)) {
            Flash::error('Propiedad Grupos not found');

            return redirect(route('propiedadGrupos.index'));
        }

        $propiedadGrupos = $this->propiedadGruposRepository->update($request->all(), $id);

        Flash::success('Propiedad Grupos updated successfully.');

        return redirect(route('propiedadGrupos.index'));
    }

    /**
     * Remove the specified PropiedadGrupos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $propiedadGrupos = $this->propiedadGruposRepository->findWithoutFail($id);

        if (empty($propiedadGrupos)) {
            Flash::error('Propiedad Grupos not found');

            return redirect(route('propiedadGrupos.index'));
        }

        $this->propiedadGruposRepository->delete($id);

        Flash::success('Propiedad Grupos deleted successfully.');

        return redirect(route('propiedadGrupos.index'));
    }
}
