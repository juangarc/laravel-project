<?php

namespace App\Http\Controllers;

use App\DataTables\TipoEspecialidadDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateTipoEspecialidadRequest;
use App\Http\Requests\UpdateTipoEspecialidadRequest;
use App\Repositories\TipoEspecialidadRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class TipoEspecialidadController extends AppBaseController
{
    /** @var  TipoEspecialidadRepository */
    private $tipoEspecialidadRepository;

    public function __construct(TipoEspecialidadRepository $tipoEspecialidadRepo)
    {
        $this->tipoEspecialidadRepository = $tipoEspecialidadRepo;
    }

    /**
     * Display a listing of the TipoEspecialidad.
     *
     * @param TipoEspecialidadDataTable $tipoEspecialidadDataTable
     * @return Response
     */
    public function index(TipoEspecialidadDataTable $tipoEspecialidadDataTable)
    {
        return $tipoEspecialidadDataTable->render('tipo_especialidads.index');
    }

    /**
     * Show the form for creating a new TipoEspecialidad.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipo_especialidads.create');
    }

    /**
     * Store a newly created TipoEspecialidad in storage.
     *
     * @param CreateTipoEspecialidadRequest $request
     *
     * @return Response
     */
    public function store(CreateTipoEspecialidadRequest $request)
    {
        $input = $request->all();

        $tipoEspecialidad = $this->tipoEspecialidadRepository->create($input);

        Flash::success('Tipo Especialidad guardado exitosamente.');

        return redirect(route('tipoEspecialidads.index'));
    }

    /**
     * Display the specified TipoEspecialidad.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoEspecialidad = $this->tipoEspecialidadRepository->findWithoutFail($id);

        if (empty($tipoEspecialidad)) {
            Flash::error('Tipo Especialidad not found');

            return redirect(route('tipoEspecialidads.index'));
        }

        return view('tipo_especialidads.show')->with('tipoEspecialidad', $tipoEspecialidad);
    }

    /**
     * Show the form for editing the specified TipoEspecialidad.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoEspecialidad = $this->tipoEspecialidadRepository->findWithoutFail($id);

        if (empty($tipoEspecialidad)) {
            Flash::error('Tipo Especialidad not found');

            return redirect(route('tipoEspecialidads.index'));
        }

        return view('tipo_especialidads.edit')->with('tipoEspecialidad', $tipoEspecialidad);
    }

    /**
     * Update the specified TipoEspecialidad in storage.
     *
     * @param  int              $id
     * @param UpdateTipoEspecialidadRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipoEspecialidadRequest $request)
    {
        $tipoEspecialidad = $this->tipoEspecialidadRepository->findWithoutFail($id);

        if (empty($tipoEspecialidad)) {
            Flash::error('Tipo Especialidad not found');

            return redirect(route('tipoEspecialidads.index'));
        }

        $tipoEspecialidad = $this->tipoEspecialidadRepository->update($request->all(), $id);

        Flash::success('Tipo Especialidad updated successfully.');

        return redirect(route('tipoEspecialidads.index'));
    }

    /**
     * Remove the specified TipoEspecialidad from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoEspecialidad = $this->tipoEspecialidadRepository->findWithoutFail($id);

        if (empty($tipoEspecialidad)) {
            Flash::error('Tipo Especialidad not found');

            return redirect(route('tipoEspecialidads.index'));
        }

        $this->tipoEspecialidadRepository->delete($id);

        Flash::success('Tipo Especialidad deleted successfully.');

        return redirect(route('tipoEspecialidads.index'));
    }
}
