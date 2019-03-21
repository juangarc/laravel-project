<?php

namespace App\Http\Controllers;

use App\DataTables\CupoDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateCupoRequest;
use App\Http\Requests\UpdateCupoRequest;
use App\Repositories\CupoRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use App\Models\cliente;
use App\Models\Producto;

class CupoController extends AppBaseController
{
    /** @var  CupoRepository */
    private $cupoRepository;

    public function __construct(CupoRepository $cupoRepo)
    {
        $this->cupoRepository = $cupoRepo;
    }

    /**
     * Display a listing of the Cupo.
     *
     * @param CupoDataTable $cupoDataTable
     * @return Response
     */
    public function index(CupoDataTable $cupoDataTable)
    {
        return $cupoDataTable->render('cupos.index');
    }

    /**
     * Show the form for creating a new Cupo.
     *
     * @return Response
     */
    public function create()
    {
        $cliente = Cliente::pluck('nombre', 'id');
        $producto = Producto::pluck('nombre' , 'id');
        return view('cupos.create', ['cliente' => $cliente, 'producto' => $producto]);
    }

    /**
     * Store a newly created Cupo in storage.
     *
     * @param CreateCupoRequest $request
     *
     * @return Response
     */
    public function store(CreateCupoRequest $request)
    {
        $input = $request->all();

        $cupo = $this->cupoRepository->create($input);

        Flash::success('Cupo guardado exitosamente.');

        return redirect(route('cupos.index'));
    }

    /**
     * Display the specified Cupo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $cupo = $this->cupoRepository->findWithoutFail($id);

        if (empty($cupo)) {
            Flash::error('Cupo not found');

            return redirect(route('cupos.index'));
        }

        return view('cupos.show')->with('cupo', $cupo);
    }

    /**
     * Show the form for editing the specified Cupo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $cupo = $this->cupoRepository->findWithoutFail($id);
        $cliente = Cliente::pluck('nombre', 'id');
        $producto = Producto::pluck('nombre' , 'id');

        if (empty($cupo)) {
            Flash::error('Cupo not found');

            return redirect(route('cupos.index'));
        }

        return view('cupos.edit', ['cupo' => $cupo, 'cliente' => $cliente, 'producto' => $producto]);
    }

    /**
     * Update the specified Cupo in storage.
     *
     * @param  int              $id
     * @param UpdateCupoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCupoRequest $request)
    {
        $cupo = $this->cupoRepository->findWithoutFail($id);

        if (empty($cupo)) {
            Flash::error('Cupo not found');

            return redirect(route('cupos.index'));
        }

        $cupo = $this->cupoRepository->update($request->all(), $id);

        Flash::success('Cupo updated successfully.');

        return redirect(route('cupos.index'));
    }

    /**
     * Remove the specified Cupo from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $cupo = $this->cupoRepository->findWithoutFail($id);

        if (empty($cupo)) {
            Flash::error('Cupo not found');

            return redirect(route('cupos.index'));
        }

        $this->cupoRepository->delete($id);

        Flash::success('Cupo eliminado con éxito.');

        return redirect(route('cupos.index'));
    }
}
