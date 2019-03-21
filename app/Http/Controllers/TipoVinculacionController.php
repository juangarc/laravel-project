<?php

namespace App\Http\Controllers;

use App\DataTables\TipoVinculacionDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateTipoVinculacionRequest;
use App\Http\Requests\UpdateTipoVinculacionRequest;
use App\Repositories\TipoVinculacionRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class TipoVinculacionController extends AppBaseController
{
    /** @var  TipoVinculacionRepository */
    private $tipoVinculacionRepository;

    public function __construct(TipoVinculacionRepository $tipoVinculacionRepo)
    {
        $this->tipoVinculacionRepository = $tipoVinculacionRepo;
    }

    /**
     * Display a listing of the TipoVinculacion.
     *
     * @param TipoVinculacionDataTable $tipoVinculacionDataTable
     * @return Response
     */
    public function index(TipoVinculacionDataTable $tipoVinculacionDataTable)
    {
        return $tipoVinculacionDataTable->render('tipo_vinculacions.index');
    }

    /**
     * Show the form for creating a new TipoVinculacion.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipo_vinculacions.create');
    }

    /**
     * Store a newly created TipoVinculacion in storage.
     *
     * @param CreateTipoVinculacionRequest $request
     *
     * @return Response
     */
    public function store(CreateTipoVinculacionRequest $request)
    {
        $input = $request->all();

        $tipoVinculacion = $this->tipoVinculacionRepository->create($input);

        Flash::success('Tipo Vinculacion guardado exitosamente.');

        return redirect(route('tipoVinculacions.index'));
    }

    /**
     * Display the specified TipoVinculacion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoVinculacion = $this->tipoVinculacionRepository->findWithoutFail($id);

        if (empty($tipoVinculacion)) {
            Flash::error('Tipo Vinculacion not found');

            return redirect(route('tipoVinculacions.index'));
        }

        return view('tipo_vinculacions.show')->with('tipoVinculacion', $tipoVinculacion);
    }

    /**
     * Show the form for editing the specified TipoVinculacion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoVinculacion = $this->tipoVinculacionRepository->findWithoutFail($id);

        if (empty($tipoVinculacion)) {
            Flash::error('Tipo Vinculacion not found');

            return redirect(route('tipoVinculacions.index'));
        }

        return view('tipo_vinculacions.edit')->with('tipoVinculacion', $tipoVinculacion);
    }

    /**
     * Update the specified TipoVinculacion in storage.
     *
     * @param  int              $id
     * @param UpdateTipoVinculacionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipoVinculacionRequest $request)
    {
        $tipoVinculacion = $this->tipoVinculacionRepository->findWithoutFail($id);

        if (empty($tipoVinculacion)) {
            Flash::error('Tipo Vinculacion not found');

            return redirect(route('tipoVinculacions.index'));
        }

        $tipoVinculacion = $this->tipoVinculacionRepository->update($request->all(), $id);

        Flash::success('Tipo Vinculacion updated successfully.');

        return redirect(route('tipoVinculacions.index'));
    }

    /**
     * Remove the specified TipoVinculacion from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoVinculacion = $this->tipoVinculacionRepository->findWithoutFail($id);

        if (empty($tipoVinculacion)) {
            Flash::error('Tipo Vinculacion not found');

            return redirect(route('tipoVinculacions.index'));
        }

        $this->tipoVinculacionRepository->delete($id);

        Flash::success('Tipo Vinculacion deleted successfully.');

        return redirect(route('tipoVinculacions.index'));
    }
}
