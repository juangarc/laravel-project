<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\DataTables\ExamenInstitucionDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateExamenInstitucionRequest;
use App\Http\Requests\UpdateExamenInstitucionRequest;
use App\Repositories\ExamenInstitucionRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use App\Models\Examenes;
use App\Models\Instituciones;
use App\Models\ExamenInstitucion;
class ExamenInstitucionController extends AppBaseController
{
    /** @var  ExamenInstitucionRepository */
    private $examenInstitucionRepository;

    public function __construct(ExamenInstitucionRepository $examenInstitucionRepo)
    {
        $this->examenInstitucionRepository = $examenInstitucionRepo;
    }

    /**
     * Display a listing of the ExamenInstitucion.
     *
     * @param ExamenInstitucionDataTable $examenInstitucionDataTable
     * @return Response
     */
    public function index(ExamenInstitucionDataTable $examenInstitucionDataTable)
    {
        return $examenInstitucionDataTable->render('examen_institucions.index');
    }

    public function getInstitucion(Request $request, $id) {
        if($request->ajax()){
            $institucion = ExamenInstitucion::findInstitucion($id);
            return response()->json($institucion);
        }
    }
    /**
     * Show the form for creating a new ExamenInstitucion.
     *
     * @return Response
     */
    public function create()
    {
        $examenes = Examenes::pluck('name', 'id');
        $instituciones = Instituciones::pluck('name', 'id'); 
        return view('examen_institucions.create', ['examenes' => $examenes, 'instituciones' => $instituciones]);
    }

    /**
     * Store a newly created ExamenInstitucion in storage.
     *
     * @param CreateExamenInstitucionRequest $request
     *
     * @return Response
     */
    public function store(CreateExamenInstitucionRequest $request)
    {
        $input = $request->all();

        $examenInstitucion = $this->examenInstitucionRepository->create($input);

        Flash::success('Examen Institucion saved successfully.');

        return redirect(route('examenInstitucions.index'));
    }

    /**
     * Display the specified ExamenInstitucion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $examenInstitucion = $this->examenInstitucionRepository->findWithoutFail($id);

        if (empty($examenInstitucion)) {
            Flash::error('Examen Institucion not found');

            return redirect(route('examenInstitucions.index'));
        }

        return view('examen_institucions.show')->with('examenInstitucion', $examenInstitucion);
    }

    /**
     * Show the form for editing the specified ExamenInstitucion.
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
            Flash::error('Examen Institucion not found');

            return redirect(route('examenInstitucions.index'));
        }

        return view('examen_institucions.edit', ['examenInstitucion' => $examenInstitucion, 'examenes' => $examenes, 'instituciones' => $instituciones]);
    }

    /**
     * Update the specified ExamenInstitucion in storage.
     *
     * @param  int              $id
     * @param UpdateExamenInstitucionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateExamenInstitucionRequest $request)
    {
        $examenInstitucion = $this->examenInstitucionRepository->findWithoutFail($id);

        if (empty($examenInstitucion)) {
            Flash::error('Examen Institucion not found');

            return redirect(route('examenInstitucions.index'));
        }

        $examenInstitucion = $this->examenInstitucionRepository->update($request->all(), $id);

        Flash::success('Examen Institucion updated successfully.');

        return redirect(route('examenInstitucions.index'));
    }

    /**
     * Remove the specified ExamenInstitucion from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $examenInstitucion = $this->examenInstitucionRepository->findWithoutFail($id);

        if (empty($examenInstitucion)) {
            Flash::error('Examen Institucion not found');

            return redirect(route('examenInstitucions.index'));
        }

        $this->examenInstitucionRepository->delete($id);

        Flash::success('Examen Institucion deleted successfully.');

        return redirect(route('examenInstitucions.index'));
    }
}
