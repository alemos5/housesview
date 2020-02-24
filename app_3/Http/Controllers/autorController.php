<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateautorRequest;
use App\Http\Requests\UpdateautorRequest;
use App\Repositories\autorRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class autorController extends AppBaseController
{
    /** @var  autorRepository */
    private $autorRepository;

    public function __construct(autorRepository $autorRepo)
    {
        $this->autorRepository = $autorRepo;
    }

    /**
     * Display a listing of the autor.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
//        die("aqui");
        $this->autorRepository->pushCriteria(new RequestCriteria($request));
        $autors = $this->autorRepository->all();

        return view('autors.index')
            ->with('autors', $autors);
    }

    /**
     * Show the form for creating a new autor.
     *
     * @return Response
     */
    public function create()
    {
        return view('autors.create');
    }

    /**
     * Store a newly created autor in storage.
     *
     * @param CreateautorRequest $request
     *
     * @return Response
     */
    public function store(CreateautorRequest $request)
    {
        $input = $request->all();

        $autor = $this->autorRepository->create($input);

        Flash::success('Autor saved successfully.');

        return redirect(route('autors.index'));
    }

    /**
     * Display the specified autor.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $autor = $this->autorRepository->findWithoutFail($id);

        if (empty($autor)) {
            Flash::error('Autor not found');

            return redirect(route('autors.index'));
        }

        return view('autors.show')->with('autor', $autor);
    }

    /**
     * Show the form for editing the specified autor.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $autor = $this->autorRepository->findWithoutFail($id);

        if (empty($autor)) {
            Flash::error('Autor not found');

            return redirect(route('autors.index'));
        }

        return view('autors.edit')->with('autor', $autor);
    }

    /**
     * Update the specified autor in storage.
     *
     * @param int $id
     * @param UpdateautorRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateautorRequest $request)
    {
        $autor = $this->autorRepository->findWithoutFail($id);

        if (empty($autor)) {
            Flash::error('Autor not found');

            return redirect(route('autors.index'));
        }

        $autor = $this->autorRepository->update($request->all(), $id);

        Flash::success('Autor updated successfully.');

        return redirect(route('autors.index'));
    }

    /**
     * Remove the specified autor from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $autor = $this->autorRepository->findWithoutFail($id);

        if (empty($autor)) {
            Flash::error('Autor not found');

            return redirect(route('autors.index'));
        }

        $this->autorRepository->delete($id);

        Flash::success('Autor deleted successfully.');

        return redirect(route('autors.index'));
    }
}
