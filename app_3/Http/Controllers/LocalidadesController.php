<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLocalidadesRequest;
use App\Http\Requests\UpdateLocalidadesRequest;
use App\Repositories\LocalidadesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class LocalidadesController extends AppBaseController
{
    /** @var  LocalidadesRepository */
    private $localidadesRepository;

    public function __construct(LocalidadesRepository $localidadesRepo)
    {
        $this->localidadesRepository = $localidadesRepo;
    }

    /**
     * Display a listing of the Localidades.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->localidadesRepository->pushCriteria(new RequestCriteria($request));
        $localidades = $this->localidadesRepository->all();

        return view('localidades.index')
            ->with('localidades', $localidades);
    }

    /**
     * Show the form for creating a new Localidades.
     *
     * @return Response
     */
    public function create()
    {
        return view('localidades.create');
    }

    /**
     * Store a newly created Localidades in storage.
     *
     * @param CreateLocalidadesRequest $request
     *
     * @return Response
     */
    public function store(CreateLocalidadesRequest $request)
    {
        $input = $request->all();

        $localidades = $this->localidadesRepository->create($input);

        Flash::success('Localidades saved successfully.');

        return redirect(route('localidades.index'));
    }

    /**
     * Display the specified Localidades.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $localidades = $this->localidadesRepository->findWithoutFail($id);

        if (empty($localidades)) {
            Flash::error('Localidades not found');

            return redirect(route('localidades.index'));
        }

        return view('localidades.show')->with('localidades', $localidades);
    }

    /**
     * Show the form for editing the specified Localidades.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $localidades = $this->localidadesRepository->findWithoutFail($id);

        if (empty($localidades)) {
            Flash::error('Localidades not found');

            return redirect(route('localidades.index'));
        }

        return view('localidades.edit')->with('localidades', $localidades);
    }

    /**
     * Update the specified Localidades in storage.
     *
     * @param  int              $id
     * @param UpdateLocalidadesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLocalidadesRequest $request)
    {
        $localidades = $this->localidadesRepository->findWithoutFail($id);

        if (empty($localidades)) {
            Flash::error('Localidades not found');

            return redirect(route('localidades.index'));
        }

        $localidades = $this->localidadesRepository->update($request->all(), $id);

        Flash::success('Localidades updated successfully.');

        return redirect(route('localidades.index'));
    }

    /**
     * Remove the specified Localidades from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $localidades = $this->localidadesRepository->findWithoutFail($id);

        if (empty($localidades)) {
            Flash::error('Localidades not found');

            return redirect(route('localidades.index'));
        }

        $this->localidadesRepository->delete($id);

        Flash::success('Localidades deleted successfully.');

        return redirect(route('localidades.index'));
    }
}
