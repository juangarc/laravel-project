<?php

namespace App\Http\Controllers;

use App\DataTables\TipoExamenDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateTipoExamenRequest;
use App\Http\Requests\UpdateTipoExamenRequest;
use App\Repositories\TipoExamenRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class TipoExamenController extends AppBaseController
{
    /** @var  TipoExamenRepository */
    private $tipoExamenRepository;

    public function __construct(TipoExamenRepository $tipoExamenRepo)
    {
        $this->tipoExamenRepository = $tipoExamenRepo;
    }

    /**
     * Display a listing of the TipoExamen.
     *
     * @param TipoExamenDataTable $tipoExamenDataTable
     * @return Response
     */
    public function index(TipoExamenDataTable $tipoExamenDataTable)
    {
        return $tipoExamenDataTable->render('tipo_examens.index');
    }

    /**
     * Show the form for creating a new TipoExamen.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipo_examens.create');
    }

    /**
     * Store a newly created TipoExamen in storage.
     *
     * @param CreateTipoExamenRequest $request
     *
     * @return Response
     */
    public function store(CreateTipoExamenRequest $request)
    {
        $input = $request->all();

        $tipoExamen = $this->tipoExamenRepository->create($input);

        Flash::success('Tipo Examen guardado exitosamente.');

        return redirect(route('tipoExamens.index'));
    }

    /**
     * Display the specified TipoExamen.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoExamen = $this->tipoExamenRepository->findWithoutFail($id);

        if (empty($tipoExamen)) {
            Flash::error('Tipo Examen not found');

            return redirect(route('tipoExamens.index'));
        }

        return view('tipo_examens.show')->with('tipoExamen', $tipoExamen);
    }

    /**
     * Show the form for editing the specified TipoExamen.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoExamen = $this->tipoExamenRepository->findWithoutFail($id);

        if (empty($tipoExamen)) {
            Flash::error('Tipo Examen not found');

            return redirect(route('tipoExamens.index'));
        }

        return view('tipo_examens.edit')->with('tipoExamen', $tipoExamen);
    }

    /**
     * Update the specified TipoExamen in storage.
     *
     * @param  int              $id
     * @param UpdateTipoExamenRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipoExamenRequest $request)
    {
        $tipoExamen = $this->tipoExamenRepository->findWithoutFail($id);

        if (empty($tipoExamen)) {
            Flash::error('Tipo Examen not found');

            return redirect(route('tipoExamens.index'));
        }

        $tipoExamen = $this->tipoExamenRepository->update($request->all(), $id);

        Flash::success('Tipo Examen updated successfully.');

        return redirect(route('tipoExamens.index'));
    }

    /**
     * Remove the specified TipoExamen from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoExamen = $this->tipoExamenRepository->findWithoutFail($id);

        if (empty($tipoExamen)) {
            Flash::error('Tipo Examen not found');

            return redirect(route('tipoExamens.index'));
        }

        $this->tipoExamenRepository->delete($id);

        Flash::success('Tipo Examen deleted successfully.');

        return redirect(route('tipoExamens.index'));
    }
}
