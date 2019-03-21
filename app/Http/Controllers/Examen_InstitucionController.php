<?php

namespace App\Http\Controllers;

use App\DataTables\Examen_InstitucionDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateExamen_InstitucionRequest;
use App\Http\Requests\UpdateExamen_InstitucionRequest;
use App\Repositories\Examen_InstitucionRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use App\Models\Examenes;
use App\Models\Instituciones;

class Examen_InstitucionController extends AppBaseController
{
    /** @var  Examen_InstitucionRepository */
    private $examenInstitucionRepository;

    public function __construct(Examen_InstitucionRepository $examenInstitucionRepo)
    {
        $this->examenInstitucionRepository = $examenInstitucionRepo;
    }

    /**
     * Display a listing of the Examen_Institucion.
     *
     * @param Examen_InstitucionDataTable $examenInstitucionDataTable
     * @return Response
     */
    public function index(Examen_InstitucionDataTable $examenInstitucionDataTable)
    {
        return $examenInstitucionDataTable->render('examen__institucions.index');
    }

    /**
     * Show the form for creating a new Examen_Institucion.
     *
     * @return Response
     */
    public function create()
    {
        $examenes = Examenes::pluck('name', 'id');
        $instituciones = Instituciones::pluck('name', 'id');
        return view('examen__institucions.create', ['examenes' => $examenes, 'instituciones' => $instituciones]);
    }

    /**
     * Store a newly created Examen_Institucion in storage.
     *
     * @param CreateExamen_InstitucionRequest $request
     *
     * @return Response
     */
    public function store(CreateExamen_InstitucionRequest $request)
    {
        $input = $request->all();

        $examenInstitucion = $this->examenInstitucionRepository->create($input);

        Flash::success('Examen  Institucion guardado exitosamente.');

        return redirect(route('examenInstitucions.index'));
    }

    /**
     * Display the specified Examen_Institucion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $examenInstitucion = $this->examenInstitucionRepository->findWithoutFail($id);

        if (empty($examenInstitucion)) {
            Flash::error('Examen  Institucion not found');

            return redirect(route('examenInstitucions.index'));
        }

        return view('examen__institucions.show')->with('examenInstitucion', $examenInstitucion);
    }

    /**
     * Show the form for editing the specified Examen_Institucion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $examenes = Examenes::pluck('name', 'id');
        $instituciones = Instituciones::pluck('name', 'id');
        $examenInstitucion = $this->examenInstitucionRepository->findWithoutFail($id);

        if (empty($examenInstitucion)) {
            Flash::error('Examen  Institucion not found');

            return redirect(route('examenInstitucions.index'));
        }

        return view('examen__institucions.edit', ['examenInstitucion' => $examenInstitucion, 'examenes' => $examenes, 'instituciones' => $instituciones]);
    }

    /**
     * Update the specified Examen_Institucion in storage.
     *
     * @param  int              $id
     * @param UpdateExamen_InstitucionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateExamen_InstitucionRequest $request)
    {
        $examenInstitucion = $this->examenInstitucionRepository->findWithoutFail($id);

        if (empty($examenInstitucion)) {
            Flash::error('Examen  Institucion not found');

            return redirect(route('examenInstitucions.index'));
        }

        $examenInstitucion = $this->examenInstitucionRepository->update($request->all(), $id);

        Flash::success('Examen  Institucion updated successfully.');

        return redirect(route('examenInstitucions.index'));
    }

    /**
     * Remove the specified Examen_Institucion from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $examenInstitucion = $this->examenInstitucionRepository->findWithoutFail($id);

        if (empty($examenInstitucion)) {
            Flash::error('Examen  Institucion not found');

            return redirect(route('examenInstitucions.index'));
        }

        $this->examenInstitucionRepository->delete($id);

        Flash::success('Examen  Institucion deleted successfully.');

        return redirect(route('examenInstitucions.index'));
    }
}
