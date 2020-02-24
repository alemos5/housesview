<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePlanesRequest;
use App\Http\Requests\UpdatePlanesRequest;
use App\Mail\CompraPlan;
use App\Mail\CreatePropiedad;
use App\Repositories\PlanesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PlanesController extends AppBaseController
{
    /** @var  PlanesRepository */
    private $planesRepository;

    public function __construct(PlanesRepository $planesRepo)
    {
        $this->planesRepository = $planesRepo;
    }

    /**
     * Display a listing of the Planes.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->planesRepository->pushCriteria(new RequestCriteria($request));
        $planes = $this->planesRepository->all();

        return view('planes.index')
            ->with('planes', $planes);
    }

    /**
     * Show the form for creating a new Planes.
     *
     * @return Response
     */
    public function create()
    {
        return view('planes.create');
    }

    /**
     * Store a newly created Planes in storage.
     *
     * @param CreatePlanesRequest $request
     *
     * @return Response
     */
    public function store(CreatePlanesRequest $request)
    {
        $input = $request->all();

        $planes = $this->planesRepository->create($input);

        Flash::success('Planes saved successfully.');

        return redirect(route('planes.index'));
    }

    /**
     * Display the specified Planes.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $planes = $this->planesRepository->findWithoutFail($id);

        if (empty($planes)) {
            Flash::error('Planes not found');

            return redirect(route('planes.index'));
        }

        return view('planes.show')->with('planes', $planes);
    }

    /**
     * Show the form for editing the specified Planes.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $planes = $this->planesRepository->findWithoutFail($id);

        if (empty($planes)) {
            Flash::error('Planes not found');

            return redirect(route('planes.index'));
        }

        return view('planes.edit')->with('planes', $planes);
    }

    /**
     * Update the specified Planes in storage.
     *
     * @param  int              $id
     * @param UpdatePlanesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePlanesRequest $request)
    {
        $planes = $this->planesRepository->findWithoutFail($id);

        if (empty($planes)) {
            Flash::error('Planes not found');

            return redirect(route('planes.index'));
        }

        $planes = $this->planesRepository->update($request->all(), $id);

        Flash::success('Planes updated successfully.');

        return redirect(route('planes.index'));
    }

    /**
     * Remove the specified Planes from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $planes = $this->planesRepository->findWithoutFail($id);

        if (empty($planes)) {
            Flash::error('Planes not found');

            return redirect(route('planes.index'));
        }

        $this->planesRepository->delete($id);

        Flash::success('Planes deleted successfully.');

        return redirect(route('planes.index'));
    }

}
