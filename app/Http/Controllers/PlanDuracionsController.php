<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePlanDuracionsRequest;
use App\Http\Requests\UpdatePlanDuracionsRequest;
use App\Repositories\PlanDuracionsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PlanDuracionsController extends AppBaseController
{
    /** @var  PlanDuracionsRepository */
    private $planDuracionsRepository;

    public function __construct(PlanDuracionsRepository $planDuracionsRepo)
    {
        $this->planDuracionsRepository = $planDuracionsRepo;
    }

    /**
     * Display a listing of the PlanDuracions.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->planDuracionsRepository->pushCriteria(new RequestCriteria($request));
        $planDuracions = $this->planDuracionsRepository->all();

        return view('plan_duracions.index')
            ->with('planDuracions', $planDuracions);
    }

    /**
     * Show the form for creating a new PlanDuracions.
     *
     * @return Response
     */
    public function create()
    {
        return view('plan_duracions.create');
    }

    /**
     * Store a newly created PlanDuracions in storage.
     *
     * @param CreatePlanDuracionsRequest $request
     *
     * @return Response
     */
    public function store(CreatePlanDuracionsRequest $request)
    {
        $input = $request->all();

        $planDuracions = $this->planDuracionsRepository->create($input);

        Flash::success('Plan Duracions saved successfully.');

        return redirect(route('planDuracions.index'));
    }

    /**
     * Display the specified PlanDuracions.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $planDuracions = $this->planDuracionsRepository->findWithoutFail($id);

        if (empty($planDuracions)) {
            Flash::error('Plan Duracions not found');

            return redirect(route('planDuracions.index'));
        }

        return view('plan_duracions.show')->with('planDuracions', $planDuracions);
    }

    /**
     * Show the form for editing the specified PlanDuracions.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $planDuracions = $this->planDuracionsRepository->findWithoutFail($id);

        if (empty($planDuracions)) {
            Flash::error('Plan Duracions not found');

            return redirect(route('planDuracions.index'));
        }

        return view('plan_duracions.edit')->with('planDuracions', $planDuracions);
    }

    /**
     * Update the specified PlanDuracions in storage.
     *
     * @param  int              $id
     * @param UpdatePlanDuracionsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePlanDuracionsRequest $request)
    {
        $planDuracions = $this->planDuracionsRepository->findWithoutFail($id);

        if (empty($planDuracions)) {
            Flash::error('Plan Duracions not found');

            return redirect(route('planDuracions.index'));
        }

        $planDuracions = $this->planDuracionsRepository->update($request->all(), $id);

        Flash::success('Plan Duracions updated successfully.');

        return redirect(route('planDuracions.index'));
    }

    /**
     * Remove the specified PlanDuracions from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $planDuracions = $this->planDuracionsRepository->findWithoutFail($id);

        if (empty($planDuracions)) {
            Flash::error('Plan Duracions not found');

            return redirect(route('planDuracions.index'));
        }

        $this->planDuracionsRepository->delete($id);

        Flash::success('Plan Duracions deleted successfully.');

        return redirect(route('planDuracions.index'));
    }
}
