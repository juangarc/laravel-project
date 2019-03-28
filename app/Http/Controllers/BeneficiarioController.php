<?php

namespace App\Http\Controllers;

use App\DataTables\BeneficiarioDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateBeneficiarioRequest;
use App\Http\Requests\UpdateBeneficiarioRequest;
use App\Repositories\BeneficiarioRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use App\Models\Cupo;

class BeneficiarioController extends AppBaseController
{
    /** @var  BeneficiarioRepository */
    private $beneficiarioRepository;

    public function __construct(BeneficiarioRepository $beneficiarioRepo)
    {
        $this->beneficiarioRepository = $beneficiarioRepo;
    }

    /**
     * Display a listing of the Beneficiario.
     *
     * @param BeneficiarioDataTable $beneficiarioDataTable
     * @return Response
     */
    public function index(BeneficiarioDataTable $beneficiarioDataTable)
    {
        return $beneficiarioDataTable->render('beneficiarios.index');
    }

    /**
     * Show the form for creating a new Beneficiario.
     *
     * @return Response
     */
    public function create()
    {
        $cupo = Cupo::pluck('serial', 'id');
        return view('beneficiarios.create', ['cupo' => $cupo]);
    }

    /**
     * Store a newly created Beneficiario in storage.
     *
     * @param CreateBeneficiarioRequest $request
     *
     * @return Response
     */
    public function store(CreateBeneficiarioRequest $request)
    {
        $input = $request->all();

        $beneficiario = $this->beneficiarioRepository->create($input);

        Flash::success('Beneficiario saved successfully.');

        return redirect(route('beneficiarios.index'));
    }

    /**
     * Display the specified Beneficiario.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $beneficiario = $this->beneficiarioRepository->findWithoutFail($id);

        if (empty($beneficiario)) {
            Flash::error('Beneficiario not found');

            return redirect(route('beneficiarios.index'));
        }

        return view('beneficiarios.show')->with('beneficiario', $beneficiario);
    }

    /**
     * Show the form for editing the specified Beneficiario.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $cupo = Cupo::pluck('serial', 'id');
        $beneficiario = $this->beneficiarioRepository->findWithoutFail($id);

        if (empty($beneficiario)) {
            Flash::error('Beneficiario not found');

            return redirect(route('beneficiarios.index'));
        }

        return view('beneficiarios.edit', ['beneficiario' => $beneficiario, 'cupo' => $cupo]);
    }

    /**
     * Update the specified Beneficiario in storage.
     *
     * @param  int              $id
     * @param UpdateBeneficiarioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBeneficiarioRequest $request)
    {
        $beneficiario = $this->beneficiarioRepository->findWithoutFail($id);

        if (empty($beneficiario)) {
            Flash::error('Beneficiario not found');

            return redirect(route('beneficiarios.index'));
        }

        $beneficiario = $this->beneficiarioRepository->update($request->all(), $id);

        Flash::success('Beneficiario updated successfully.');

        return redirect(route('beneficiarios.index'));
    }

    /**
     * Remove the specified Beneficiario from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $beneficiario = $this->beneficiarioRepository->findWithoutFail($id);

        if (empty($beneficiario)) {
            Flash::error('Beneficiario not found');

            return redirect(route('beneficiarios.index'));
        }

        $this->beneficiarioRepository->delete($id);

        Flash::success('Beneficiario deleted successfully.');

        return redirect(route('beneficiarios.index'));
    }
}
