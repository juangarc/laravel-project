<?php

namespace App\Http\Controllers;

use App\DataTables\BieneficiarioDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateBieneficiarioRequest;
use App\Http\Requests\UpdateBieneficiarioRequest;
use App\Repositories\BieneficiarioRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use App\Models\Cupo;

class BieneficiarioController extends AppBaseController
{
    /** @var  BieneficiarioRepository */
    private $bieneficiarioRepository;

    public function __construct(BieneficiarioRepository $bieneficiarioRepo)
    {
        $this->bieneficiarioRepository = $bieneficiarioRepo;
    }

    /**
     * Display a listing of the Bieneficiario.
     *
     * @param BieneficiarioDataTable $bieneficiarioDataTable
     * @return Response
     */
    public function index(BieneficiarioDataTable $bieneficiarioDataTable)
    {
        return $bieneficiarioDataTable->render('bieneficiarios.index');
    }

    /**
     * Show the form for creating a new Bieneficiario.
     *
     * @return Response
     */
    public function create()
    {
        $cupo = Cupo::pluck('id');
        return view('bieneficiarios.create', ['cupo' => $cupo]);
    }

    /**
     * Store a newly created Bieneficiario in storage.
     *
     * @param CreateBieneficiarioRequest $request
     *
     * @return Response
     */
    public function store(CreateBieneficiarioRequest $request)
    {
        $input = $request->all();

        $bieneficiario = $this->bieneficiarioRepository->create($input);

        Flash::success('Bieneficiario saved successfully.');

        return redirect(route('bieneficiarios.index'));
    }

    /**
     * Display the specified Bieneficiario.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $bieneficiario = $this->bieneficiarioRepository->findWithoutFail($id);

        if (empty($bieneficiario)) {
            Flash::error('Bieneficiario not found');

            return redirect(route('bieneficiarios.index'));
        }

        return view('bieneficiarios.show')->with('bieneficiario', $bieneficiario);
    }

    /**
     * Show the form for editing the specified Bieneficiario.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $cupo = Cupo::pluck('id');
        $bieneficiario = $this->bieneficiarioRepository->findWithoutFail($id);

        if (empty($bieneficiario)) {
            Flash::error('Bieneficiario not found');

            return redirect(route('bieneficiarios.index'));
        }

        return view('bieneficiarios.edit', ['beneficiario' => $beneficiario, 'cupo' => $cupo]);
    }

    /**
     * Update the specified Bieneficiario in storage.
     *
     * @param  int              $id
     * @param UpdateBieneficiarioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBieneficiarioRequest $request)
    {
        $bieneficiario = $this->bieneficiarioRepository->findWithoutFail($id);

        if (empty($bieneficiario)) {
            Flash::error('Bieneficiario not found');

            return redirect(route('bieneficiarios.index'));
        }

        $bieneficiario = $this->bieneficiarioRepository->update($request->all(), $id);

        Flash::success('Bieneficiario updated successfully.');

        return redirect(route('bieneficiarios.index'));
    }

    /**
     * Remove the specified Bieneficiario from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $bieneficiario = $this->bieneficiarioRepository->findWithoutFail($id);

        if (empty($bieneficiario)) {
            Flash::error('Bieneficiario not found');

            return redirect(route('bieneficiarios.index'));
        }

        $this->bieneficiarioRepository->delete($id);

        Flash::success('Bieneficiario deleted successfully.');

        return redirect(route('bieneficiarios.index'));
    }
}
