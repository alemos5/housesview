<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePropiedadEavValueRequest;
use App\Http\Requests\UpdatePropiedadEavValueRequest;
use App\Repositories\PropiedadEavValueRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PropiedadEavValueController extends AppBaseController
{
    /** @var  PropiedadEavValueRepository */
    private $propiedadEavValueRepository;

    public function __construct(PropiedadEavValueRepository $propiedadEavValueRepo)
    {
        $this->propiedadEavValueRepository = $propiedadEavValueRepo;
    }

    /**
     * Display a listing of the PropiedadEavValue.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->propiedadEavValueRepository->pushCriteria(new RequestCriteria($request));
        $propiedadEavValues = $this->propiedadEavValueRepository->all();

        return view('propiedad_eav_values.index')
            ->with('propiedadEavValues', $propiedadEavValues);
    }

    /**
     * Show the form for creating a new PropiedadEavValue.
     *
     * @return Response
     */
    public function create()
    {
        return view('propiedad_eav_values.create');
    }

    /**
     * Store a newly created PropiedadEavValue in storage.
     *
     * @param CreatePropiedadEavValueRequest $request
     *
     * @return Response
     */
    public function store(CreatePropiedadEavValueRequest $request)
    {
        $input = $request->all();

        $propiedadEavValue = $this->propiedadEavValueRepository->create($input);

        Flash::success('Propiedad Eav Value saved successfully.');

        return redirect(route('propiedadEavValues.index'));
    }

    /**
     * Display the specified PropiedadEavValue.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $propiedadEavValue = $this->propiedadEavValueRepository->findWithoutFail($id);

        if (empty($propiedadEavValue)) {
            Flash::error('Propiedad Eav Value not found');

            return redirect(route('propiedadEavValues.index'));
        }

        return view('propiedad_eav_values.show')->with('propiedadEavValue', $propiedadEavValue);
    }

    /**
     * Show the form for editing the specified PropiedadEavValue.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $propiedadEavValue = $this->propiedadEavValueRepository->findWithoutFail($id);

        if (empty($propiedadEavValue)) {
            Flash::error('Propiedad Eav Value not found');

            return redirect(route('propiedadEavValues.index'));
        }

        return view('propiedad_eav_values.edit')->with('propiedadEavValue', $propiedadEavValue);
    }

    /**
     * Update the specified PropiedadEavValue in storage.
     *
     * @param  int              $id
     * @param UpdatePropiedadEavValueRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePropiedadEavValueRequest $request)
    {
        $propiedadEavValue = $this->propiedadEavValueRepository->findWithoutFail($id);

        if (empty($propiedadEavValue)) {
            Flash::error('Propiedad Eav Value not found');

            return redirect(route('propiedadEavValues.index'));
        }

        $propiedadEavValue = $this->propiedadEavValueRepository->update($request->all(), $id);

        Flash::success('Propiedad Eav Value updated successfully.');

        return redirect(route('propiedadEavValues.index'));
    }

    /**
     * Remove the specified PropiedadEavValue from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $propiedadEavValue = $this->propiedadEavValueRepository->findWithoutFail($id);

        if (empty($propiedadEavValue)) {
            Flash::error('Propiedad Eav Value not found');

            return redirect(route('propiedadEavValues.index'));
        }

        $this->propiedadEavValueRepository->delete($id);

        Flash::success('Propiedad Eav Value deleted successfully.');

        return redirect(route('propiedadEavValues.index'));
    }
}
