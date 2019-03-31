<?php

namespace App\Http\Controllers;

use App\DataTables\SolicitudDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateSolicitudRequest;
use App\Http\Requests\UpdateSolicitudRequest;
use App\Repositories\SolicitudRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use App\Models\cliente;
use App\Models\Instituciones;
use App\Models\TipoExamen;
use App\Models\Examenes;

class SolicitudController extends AppBaseController
{
    /** @var  SolicitudRepository */
    private $solicitudRepository;

    public function __construct(SolicitudRepository $solicitudRepo)
    {
        $this->solicitudRepository = $solicitudRepo;
    }

    /**
     * Display a listing of the Solicitud.
     *
     * @param SolicitudDataTable $solicitudDataTable
     * @return Response
     */
    public function index(SolicitudDataTable $solicitudDataTable)
    {
        return $solicitudDataTable->render('solicituds.index');
    }

    /**
     * Show the form for creating a new Solicitud.
     *
     * @return Response
     */
    public function create()
    {
        $cliente = Cliente::pluck('nombre', 'id');
        $instituciones = Instituciones::pluck('name', 'id');
        $tipoExamen = TipoExamen::pluck('name', 'id');
        $examenes = Examenes::pluck('name', 'id');
        return view('solicituds.create', ['cliente' => $cliente, 'instituciones' => $instituciones, 'tipoExamen' => $tipoExamen, 'examenes' => $examenes]);
    }

    /**
     * Store a newly created Solicitud in storage.
     *
     * @param CreateSolicitudRequest $request
     *
     * @return Response
     */
    public function store(CreateSolicitudRequest $request)
    {
        $input = $request->all();

        $solicitud = $this->solicitudRepository->create($input);

        Flash::success('Solicitud saved successfully.');

        return redirect(route('solicituds.index'));
    }

    /**
     * Display the specified Solicitud.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $solicitud = $this->solicitudRepository->findWithoutFail($id);

        if (empty($solicitud)) {
            Flash::error('Solicitud not found');

            return redirect(route('solicituds.index'));
        }

        return view('solicituds.show')->with('solicitud', $solicitud);
    }

    /**
     * Show the form for editing the specified Solicitud.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $cliente = Cliente::pluck('nombre', 'id');
        $instituciones = Instituciones::pluck('name', 'id');
        $tipoExamen = TipoExamen::pluck('name', 'id');
        $examenes = Examenes::pluck('name', 'id');
        $solicitud = $this->solicitudRepository->findWithoutFail($id);

        if (empty($solicitud)) {
            Flash::error('Solicitud not found');

            return redirect(route('solicituds.index'));
        }

        return view('solicituds.edit', ['solicitud' => $solicitud, 'cliente' => $cliente, 'instituciones' => $instituciones, 'tipoExamen' => $tipoExamen, 'examenes' => $examenes]);
    }

    /**
     * Update the specified Solicitud in storage.
     *
     * @param  int              $id
     * @param UpdateSolicitudRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSolicitudRequest $request)
    {
        $solicitud = $this->solicitudRepository->findWithoutFail($id);

        if (empty($solicitud)) {
            Flash::error('Solicitud not found');

            return redirect(route('solicituds.index'));
        }

        $solicitud = $this->solicitudRepository->update($request->all(), $id);

        Flash::success('Solicitud updated successfully.');

        return redirect(route('solicituds.index'));
    }

    /**
     * Remove the specified Solicitud from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $solicitud = $this->solicitudRepository->findWithoutFail($id);

        if (empty($solicitud)) {
            Flash::error('Solicitud not found');

            return redirect(route('solicituds.index'));
        }

        $this->solicitudRepository->delete($id);

        Flash::success('Solicitud deleted successfully.');

        return redirect(route('solicituds.index'));
    }

    
    public function showDataEmploy ($id)
    {
       $employ = Cliente::where('identificacion', '=', $id)->first()->toArray();
    //    var_dump($employ);
       echo json_encode($employ);
   }
}
