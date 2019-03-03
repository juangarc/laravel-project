<?php

namespace App\Http\Controllers;

use App\DataTables\TipoAusentismoDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateTipoAusentismoRequest;
use App\Http\Requests\UpdateTipoAusentismoRequest;
use App\Repositories\TipoAusentismoRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class TipoAusentismoController extends AppBaseController
{
    /** @var  TipoAusentismoRepository */
    private $tipoAusentismoRepository;

    public function __construct(TipoAusentismoRepository $tipoAusentismoRepo)
    {
        $this->tipoAusentismoRepository = $tipoAusentismoRepo;
    }

    /**
     * Display a listing of the TipoAusentismo.
     *
     * @param TipoAusentismoDataTable $tipoAusentismoDataTable
     * @return Response
     */
    public function index(TipoAusentismoDataTable $tipoAusentismoDataTable)
    {
        return $tipoAusentismoDataTable->render('tipo_ausentismos.index');
    }

    /**
     * Show the form for creating a new TipoAusentismo.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipo_ausentismos.create');
    }

    /**
     * Store a newly created TipoAusentismo in storage.
     *
     * @param CreateTipoAusentismoRequest $request
     *
     * @return Response
     */
    public function store(CreateTipoAusentismoRequest $request)
    {
        $input = $request->all();

        $tipoAusentismo = $this->tipoAusentismoRepository->create($input);

        Flash::success('Tipo Ausentismo saved successfully.');

        return redirect(route('tipoAusentismos.index'));
    }

    /**
     * Display the specified TipoAusentismo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoAusentismo = $this->tipoAusentismoRepository->findWithoutFail($id);

        if (empty($tipoAusentismo)) {
            Flash::error('Tipo Ausentismo not found');

            return redirect(route('tipoAusentismos.index'));
        }

        return view('tipo_ausentismos.show')->with('tipoAusentismo', $tipoAusentismo);
    }

    /**
     * Show the form for editing the specified TipoAusentismo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoAusentismo = $this->tipoAusentismoRepository->findWithoutFail($id);

        if (empty($tipoAusentismo)) {
            Flash::error('Tipo Ausentismo not found');

            return redirect(route('tipoAusentismos.index'));
        }

        return view('tipo_ausentismos.edit')->with('tipoAusentismo', $tipoAusentismo);
    }

    /**
     * Update the specified TipoAusentismo in storage.
     *
     * @param  int              $id
     * @param UpdateTipoAusentismoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipoAusentismoRequest $request)
    {
        $tipoAusentismo = $this->tipoAusentismoRepository->findWithoutFail($id);

        if (empty($tipoAusentismo)) {
            Flash::error('Tipo Ausentismo not found');

            return redirect(route('tipoAusentismos.index'));
        }

        $tipoAusentismo = $this->tipoAusentismoRepository->update($request->all(), $id);

        Flash::success('Tipo Ausentismo updated successfully.');

        return redirect(route('tipoAusentismos.index'));
    }

    /**
     * Remove the specified TipoAusentismo from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoAusentismo = $this->tipoAusentismoRepository->findWithoutFail($id);

        if (empty($tipoAusentismo)) {
            Flash::error('Tipo Ausentismo not found');

            return redirect(route('tipoAusentismos.index'));
        }

        $this->tipoAusentismoRepository->delete($id);

        Flash::success('Tipo Ausentismo deleted successfully.');

        return redirect(route('tipoAusentismos.index'));
    }
}
