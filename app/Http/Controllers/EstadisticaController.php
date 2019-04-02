<?php

namespace App\Http\Controllers;

use App\DataTables\EstadisticaDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateEstadisticaRequest;
use App\Http\Requests\UpdateEstadisticaRequest;
use App\Repositories\EstadisticaRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use DB;

class EstadisticaController extends AppBaseController
{
    /** @var  EstadisticaRepository */
    private $estadisticaRepository;

    public function __construct(EstadisticaRepository $estadisticaRepo)
    {
        $this->estadisticaRepository = $estadisticaRepo;
    }

    /**
     * Display a listing of the Estadistica.
     *
     * @param EstadisticaDataTable $estadisticaDataTable
     * @return Response
     */
    public function index(EstadisticaDataTable $estadisticaDataTable)
    {
        return $estadisticaDataTable->render('estadisticas.index');
    }

    /**
     * Show the form for creating a new Estadistica.
     *
     * @return Response
     */
    public function create()
    {
        $k = 240000;
        //ia
        $tasaAccidentalidad = DB::table('ausentismos')
        ->where('ausentismos.id_tipoausentismo','=', '3')
        ->select('ausentismos.id')->count();
        $numeroTrabajadores = DB::table('empleados')
        ->select('empleados.*')->count();
        $totalTasaAccidentalidad = ($tasaAccidentalidad /$numeroTrabajadores) *100;
        
        //is


        //if
        $totalFrecuenciaAccidentes = ($tasaAccidentalidad/240)*$k;

        return view('estadisticas.create', ['tasaAccidentalidad' => $tasaAccidentalidad, 
        'totalTasaAccidentalidad' => $totalTasaAccidentalidad, 
        'totalFrecuenciaAccidentes' => $totalFrecuenciaAccidentes]);
    }

    /**
     * Store a newly created Estadistica in storage.
     *
     * @param CreateEstadisticaRequest $request
     *
     * @return Response
     */
    public function store(CreateEstadisticaRequest $request)
    {
        $input = $request->all();

        $estadistica = $this->estadisticaRepository->create($input);

        Flash::success('Estadistica saved successfully.');

        return redirect(route('estadisticas.index'));
    }

    /**
     * Display the specified Estadistica.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $estadistica = $this->estadisticaRepository->findWithoutFail($id);

        if (empty($estadistica)) {
            Flash::error('Estadistica not found');

            return redirect(route('estadisticas.index'));
        }

        return view('estadisticas.show')->with('estadistica', $estadistica);
    }

    /**
     * Show the form for editing the specified Estadistica.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $estadistica = $this->estadisticaRepository->findWithoutFail($id);

        if (empty($estadistica)) {
            Flash::error('Estadistica not found');

            return redirect(route('estadisticas.index'));
        }

        return view('estadisticas.edit')->with('estadistica', $estadistica);
    }

    /**
     * Update the specified Estadistica in storage.
     *
     * @param  int              $id
     * @param UpdateEstadisticaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEstadisticaRequest $request)
    {
        $estadistica = $this->estadisticaRepository->findWithoutFail($id);

        if (empty($estadistica)) {
            Flash::error('Estadistica not found');

            return redirect(route('estadisticas.index'));
        }

        $estadistica = $this->estadisticaRepository->update($request->all(), $id);

        Flash::success('Estadistica updated successfully.');

        return redirect(route('estadisticas.index'));
    }

    /**
     * Remove the specified Estadistica from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $estadistica = $this->estadisticaRepository->findWithoutFail($id);

        if (empty($estadistica)) {
            Flash::error('Estadistica not found');

            return redirect(route('estadisticas.index'));
        }

        $this->estadisticaRepository->delete($id);

        Flash::success('Estadistica deleted successfully.');

        return redirect(route('estadisticas.index'));
    }
}
