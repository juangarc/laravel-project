<?php

namespace App\Http\Controllers;

use App\DataTables\InstitucionesDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateInstitucionesRequest;
use App\Http\Requests\UpdateInstitucionesRequest;
use App\Repositories\InstitucionesRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use App\Ciudad;

class InstitucionesController extends AppBaseController
{
    /** @var  InstitucionesRepository */
    private $institucionesRepository;

    public function __construct(InstitucionesRepository $institucionesRepo)
    {
        $this->institucionesRepository = $institucionesRepo;
    }

    /**
     * Display a listing of the Instituciones.
     *
     * @param InstitucionesDataTable $institucionesDataTable
     * @return Response
     */
    public function index(InstitucionesDataTable $institucionesDataTable)
    {
        return $institucionesDataTable->render('instituciones.index');
    }

    /**
     * Show the form for creating a new Instituciones.
     *
     * @return Response
     */
    public function create()
    {
        $ciudad = Ciudad::pluck('name', 'id');
        return view('instituciones.create', ['ciudad' => $ciudad]);
    }

    /**
     * Store a newly created Instituciones in storage.
     *
     * @param CreateInstitucionesRequest $request
     *
     * @return Response
     */
    public function store(CreateInstitucionesRequest $request)
    {
        $input = $request->all();

        $instituciones = $this->institucionesRepository->create($input);

        Flash::success('Instituciones guardado exitosamente.');

        return redirect(route('instituciones.index'));
    }

    /**
     * Display the specified Instituciones.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $instituciones = $this->institucionesRepository->findWithoutFail($id);

        if (empty($instituciones)) {
            Flash::error('Instituciones not found');

            return redirect(route('instituciones.index'));
        }

        return view('instituciones.show')->with('instituciones', $instituciones);
    }

    /**
     * Show the form for editing the specified Instituciones.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ciudad = Ciudad::pluck('name', 'id');
        $instituciones = $this->institucionesRepository->findWithoutFail($id);

        if (empty($instituciones)) {
            Flash::error('Instituciones not found');

            return redirect(route('instituciones.index'));
        }

        return view('instituciones.edit', ['instituciones' => $instituciones, 'ciudad' => $ciudad]);
    }

    /**
     * Update the specified Instituciones in storage.
     *
     * @param  int              $id
     * @param UpdateInstitucionesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateInstitucionesRequest $request)
    {
        $instituciones = $this->institucionesRepository->findWithoutFail($id);

        if (empty($instituciones)) {
            Flash::error('Instituciones not found');

            return redirect(route('instituciones.index'));
        }

        $instituciones = $this->institucionesRepository->update($request->all(), $id);

        Flash::success('Instituciones updated successfully.');

        return redirect(route('instituciones.index'));
    }

    /**
     * Remove the specified Instituciones from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $instituciones = $this->institucionesRepository->findWithoutFail($id);

        if (empty($instituciones)) {
            Flash::error('Instituciones not found');

            return redirect(route('instituciones.index'));
        }

        $this->institucionesRepository->delete($id);

        Flash::success('Instituciones deleted successfully.');

        return redirect(route('instituciones.index'));
    }
}
