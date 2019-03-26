<?php

namespace App\Http\Controllers;

use App\DataTables\Servicio_ExamenDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateServicio_ExamenRequest;
use App\Http\Requests\UpdateServicio_ExamenRequest;
use App\Repositories\Servicio_ExamenRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use App\Models\Examen_Institucion;
use App\Models\Servicio;

class Servicio_ExamenController extends AppBaseController
{
    /** @var  Servicio_ExamenRepository */
    private $servicioExamenRepository;

    public function __construct(Servicio_ExamenRepository $servicioExamenRepo)
    {
        $this->servicioExamenRepository = $servicioExamenRepo;
    }

    /**
     * Display a listing of the Servicio_Examen.
     *
     * @param Servicio_ExamenDataTable $servicioExamenDataTable
     * @return Response
     */
    public function index(Servicio_ExamenDataTable $servicioExamenDataTable)
    {
        return $servicioExamenDataTable->render('servicio__examens.index');
    }

    /**
     * Show the form for creating a new Servicio_Examen.
     *
     * @return Response
     */
    public function create()
    {
        $examen_institucion = Examen_Institucion::pluck('id');
        $servicio = Servicio::pluck('identificacion', 'id');
        return view('servicio__examens.create', ['examen_institucion' => $examen_institucion, 'servicio' => $servicio]);
    }

    /**
     * Store a newly created Servicio_Examen in storage.
     *
     * @param CreateServicio_ExamenRequest $request
     *
     * @return Response
     */
    public function store(CreateServicio_ExamenRequest $request)
    {
        $input = $request->all();

        $servicioExamen = $this->servicioExamenRepository->create($input);

        Flash::success('Servicio  Examen saved successfully.');

        return redirect(route('servicioExamens.index'));
    }

    /**
     * Display the specified Servicio_Examen.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $servicioExamen = $this->servicioExamenRepository->findWithoutFail($id);

        if (empty($servicioExamen)) {
            Flash::error('Servicio  Examen not found');

            return redirect(route('servicioExamens.index'));
        }

        return view('servicio__examens.show')->with('servicioExamen', $servicioExamen);
    }

    /**
     * Show the form for editing the specified Servicio_Examen.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $examen_institucion = Examen_Institucion::pluck('id');
        $servicio = Servicio::pluck('identificacion', 'id');
        $servicioExamen = $this->servicioExamenRepository->findWithoutFail($id);

        if (empty($servicioExamen)) {
            Flash::error('Servicio  Examen not found');

            return redirect(route('servicioExamens.index'));
        }

        return view('servicio__examens.edit', ['servicioExamen' => $servicioExamen, 'examen_institucion' => $examen_institucion, 'servicio' => $servicio]);
    }

    /**
     * Update the specified Servicio_Examen in storage.
     *
     * @param  int              $id
     * @param UpdateServicio_ExamenRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateServicio_ExamenRequest $request)
    {
        $servicioExamen = $this->servicioExamenRepository->findWithoutFail($id);

        if (empty($servicioExamen)) {
            Flash::error('Servicio  Examen not found');

            return redirect(route('servicioExamens.index'));
        }

        $servicioExamen = $this->servicioExamenRepository->update($request->all(), $id);

        Flash::success('Servicio  Examen updated successfully.');

        return redirect(route('servicioExamens.index'));
    }

    /**
     * Remove the specified Servicio_Examen from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $servicioExamen = $this->servicioExamenRepository->findWithoutFail($id);

        if (empty($servicioExamen)) {
            Flash::error('Servicio  Examen not found');

            return redirect(route('servicioExamens.index'));
        }

        $this->servicioExamenRepository->delete($id);

        Flash::success('Servicio  Examen deleted successfully.');

        return redirect(route('servicioExamens.index'));
    }
}
