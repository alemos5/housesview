<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePropiedadEavsRequest;
use App\Http\Requests\UpdatePropiedadEavsRequest;
use App\Repositories\PropiedadEavsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PropiedadEavsController extends AppBaseController
{
    /** @var  PropiedadEavsRepository */
    private $propiedadEavsRepository;

    public function __construct(PropiedadEavsRepository $propiedadEavsRepo)
    {
        $this->propiedadEavsRepository = $propiedadEavsRepo;
    }

    /**
     * Display a listing of the PropiedadEavs.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->propiedadEavsRepository->pushCriteria(new RequestCriteria($request));
        $propiedadEavs = $this->propiedadEavsRepository->all();

        return view('propiedad_eavs.index')
            ->with('propiedadEavs', $propiedadEavs);
    }

    /**
     * Show the form for creating a new PropiedadEavs.
     *
     * @return Response
     */
    public function create()
    {
        return view('propiedad_eavs.create');
    }

    /**
     * Store a newly created PropiedadEavs in storage.
     *
     * @param CreatePropiedadEavsRequest $request
     *
     * @return Response
     */
    public function store(CreatePropiedadEavsRequest $request)
    {
        $input = $request->all();

        $propiedadEavs = $this->propiedadEavsRepository->create($input);

        Flash::success('Propiedad Eavs saved successfully.');

        return redirect(route('propiedadEavs.index'));
    }

    /**
     * Display the specified PropiedadEavs.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $propiedadEavs = $this->propiedadEavsRepository->findWithoutFail($id);

        if (empty($propiedadEavs)) {
            Flash::error('Propiedad Eavs not found');

            return redirect(route('propiedadEavs.index'));
        }

        return view('propiedad_eavs.show')->with('propiedadEavs', $propiedadEavs);
    }

    /**
     * Show the form for editing the specified PropiedadEavs.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $propiedadEavs = $this->propiedadEavsRepository->findWithoutFail($id);

        if (empty($propiedadEavs)) {
            Flash::error('Propiedad Eavs not found');

            return redirect(route('propiedadEavs.index'));
        }

        return view('propiedad_eavs.edit')->with('propiedadEavs', $propiedadEavs);
    }

    /**
     * Update the specified PropiedadEavs in storage.
     *
     * @param  int              $id
     * @param UpdatePropiedadEavsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePropiedadEavsRequest $request)
    {
        $propiedadEavs = $this->propiedadEavsRepository->findWithoutFail($id);

        if (empty($propiedadEavs)) {
            Flash::error('Propiedad Eavs not found');

            return redirect(route('propiedadEavs.index'));
        }

        $propiedadEavs = $this->propiedadEavsRepository->update($request->all(), $id);

        Flash::success('Propiedad Eavs updated successfully.');

        return redirect(route('propiedadEavs.index'));
    }

    /**
     * Remove the specified PropiedadEavs from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $propiedadEavs = $this->propiedadEavsRepository->findWithoutFail($id);

        if (empty($propiedadEavs)) {
            Flash::error('Propiedad Eavs not found');

            return redirect(route('propiedadEavs.index'));
        }

        $this->propiedadEavsRepository->delete($id);

        Flash::success('Propiedad Eavs deleted successfully.');

        return redirect(route('propiedadEavs.index'));
    }
}
