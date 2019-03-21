<?php

namespace App\Http\Controllers;

use App\DataTables\ProrrogaDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateProrrogaRequest;
use App\Http\Requests\UpdateProrrogaRequest;
use App\Repositories\ProrrogaRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ProrrogaController extends AppBaseController
{
    /** @var  ProrrogaRepository */
    private $prorrogaRepository;

    public function __construct(ProrrogaRepository $prorrogaRepo)
    {
        $this->prorrogaRepository = $prorrogaRepo;
    }

    /**
     * Display a listing of the Prorroga.
     *
     * @param ProrrogaDataTable $prorrogaDataTable
     * @return Response
     */
    public function index(ProrrogaDataTable $prorrogaDataTable)
    {
        return $prorrogaDataTable->render('prorrogas.index');
    }

    /**
     * Show the form for creating a new Prorroga.
     *
     * @return Response
     */
    public function create()
    {
        return view('prorrogas.create');
    }

    /**
     * Store a newly created Prorroga in storage.
     *
     * @param CreateProrrogaRequest $request
     *
     * @return Response
     */
    public function store(CreateProrrogaRequest $request)
    {
        $input = $request->all();

        $prorroga = $this->prorrogaRepository->create($input);

        Flash::success('Prorroga guardado exitosamente.');

        return redirect(route('prorrogas.index'));
    }

    /**
     * Display the specified Prorroga.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $prorroga = $this->prorrogaRepository->findWithoutFail($id);

        if (empty($prorroga)) {
            Flash::error('Prorroga not found');

            return redirect(route('prorrogas.index'));
        }

        return view('prorrogas.show')->with('prorroga', $prorroga);
    }

    /**
     * Show the form for editing the specified Prorroga.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $prorroga = $this->prorrogaRepository->findWithoutFail($id);

        if (empty($prorroga)) {
            Flash::error('Prorroga not found');

            return redirect(route('prorrogas.index'));
        }

        return view('prorrogas.edit')->with('prorroga', $prorroga);
    }

    /**
     * Update the specified Prorroga in storage.
     *
     * @param  int              $id
     * @param UpdateProrrogaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProrrogaRequest $request)
    {
        $prorroga = $this->prorrogaRepository->findWithoutFail($id);

        if (empty($prorroga)) {
            Flash::error('Prorroga not found');

            return redirect(route('prorrogas.index'));
        }

        $prorroga = $this->prorrogaRepository->update($request->all(), $id);

        Flash::success('Prorroga updated successfully.');

        return redirect(route('prorrogas.index'));
    }

    /**
     * Remove the specified Prorroga from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $prorroga = $this->prorrogaRepository->findWithoutFail($id);

        if (empty($prorroga)) {
            Flash::error('Prorroga not found');

            return redirect(route('prorrogas.index'));
        }

        $this->prorrogaRepository->delete($id);

        Flash::success('Prorroga deleted successfully.');

        return redirect(route('prorrogas.index'));
    }
}
