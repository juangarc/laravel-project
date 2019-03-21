<?php

namespace App\Http\Controllers;

use App\DataTables\ExamenesDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateExamenesRequest;
use App\Http\Requests\UpdateExamenesRequest;
use App\Repositories\ExamenesRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use App\Models\TipoExamen;

class ExamenesController extends AppBaseController
{
    /** @var  ExamenesRepository */
    private $examenesRepository;

    public function __construct(ExamenesRepository $examenesRepo)
    {
        $this->examenesRepository = $examenesRepo;
    }

    /**
     * Display a listing of the Examenes.
     *
     * @param ExamenesDataTable $examenesDataTable
     * @return Response
     */
    public function index(ExamenesDataTable $examenesDataTable)
    {
        return $examenesDataTable->render('examenes.index');
    }

    /**
     * Show the form for creating a new Examenes.
     *
     * @return Response
     */
    public function create()
    {   
        $tipoExamen = TipoExamen::pluck('name', 'id');
        return view('examenes.create', ['tipoExamen' => $tipoExamen]);
    }

    /**
     * Store a newly created Examenes in storage.
     *
     * @param CreateExamenesRequest $request
     *
     * @return Response
     */
    public function store(CreateExamenesRequest $request)
    {
        $input = $request->all();

        $examenes = $this->examenesRepository->create($input);

        Flash::success('Examenes guardado exitosamente.');

        return redirect(route('examenes.index'));
    }

    /**
     * Display the specified Examenes.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $examenes = $this->examenesRepository->findWithoutFail($id);

        if (empty($examenes)) {
            Flash::error('Examenes not found');

            return redirect(route('examenes.index'));
        }

        return view('examenes.show')->with('examenes', $examenes);
    }

    /**
     * Show the form for editing the specified Examenes.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {   
        $tipoExamen = TipoExamen::pluck('name', 'id');
        $examenes = $this->examenesRepository->findWithoutFail($id);

        if (empty($examenes)) {
            Flash::error('Examenes not found');

            return redirect(route('examenes.index'));
        }

        return view('examenes.edit', ['examenes'=> $examenes , 'tipoExamen' => $tipoExamen]);
    }

    /**
     * Update the specified Examenes in storage.
     *
     * @param  int              $id
     * @param UpdateExamenesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateExamenesRequest $request)
    {
        $examenes = $this->examenesRepository->findWithoutFail($id);

        if (empty($examenes)) {
            Flash::error('Examenes not found');

            return redirect(route('examenes.index'));
        }

        $examenes = $this->examenesRepository->update($request->all(), $id);

        Flash::success('Examenes updated successfully.');

        return redirect(route('examenes.index'));
    }

    /**
     * Remove the specified Examenes from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $examenes = $this->examenesRepository->findWithoutFail($id);

        if (empty($examenes)) {
            Flash::error('Examenes not found');

            return redirect(route('examenes.index'));
        }

        $this->examenesRepository->delete($id);

        Flash::success('Examenes deleted successfully.');

        return redirect(route('examenes.index'));
    }
}
