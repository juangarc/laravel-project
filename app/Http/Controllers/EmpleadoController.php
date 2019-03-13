<?php

namespace App\Http\Controllers;

use App\DataTables\EmpleadoDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateEmpleadoRequest;
use App\Http\Requests\UpdateEmpleadoRequest;
use App\Repositories\EmpleadoRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use App\Models\Cargo;
use App\Models\TipoVinculacion;
use App\Models\Sede;

class EmpleadoController extends AppBaseController
{
    /** @var  EmpleadoRepository */
    private $empleadoRepository;

    public function __construct(EmpleadoRepository $empleadoRepo)
    {
        $this->empleadoRepository = $empleadoRepo;
    }

    /**
     * Display a listing of the Empleado.
     *
     * @param EmpleadoDataTable $empleadoDataTable
     * @return Response
     */
    public function index(EmpleadoDataTable $empleadoDataTable)
    {
        return $empleadoDataTable->render('empleados.index');
    }

    /**
     * Show the form for creating a new Empleado.
     *
     * @return Response
     */
    public function create()
    {
        $cargo = Cargo::pluck('name', 'id');
        $tipoVinculacion = TipoVinculacion::pluck('name' , 'id');
        $sede = Sede::pluck('name', 'id');
        return view('empleados.create', ['cargo' => $cargo, 'sede' => $sede, 'tipoVinculacion' => $tipoVinculacion]);
    }

    /**
     * Store a newly created Empleado in storage.
     *
     * @param CreateEmpleadoRequest $request
     *
     * @return Response
     */
    public function store(CreateEmpleadoRequest $request)
    {
        $input = $request->all();

        $empleado = $this->empleadoRepository->create($input);

        Flash::success('Empleado saved successfully.');

        return redirect(route('empleados.index'));
    }

    /**
     * Display the specified Empleado.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $empleado = $this->empleadoRepository->findWithoutFail($id);

        if (empty($empleado)) {
            Flash::error('Empleado not found');

            return redirect(route('empleados.index'));
        }

        return view('empleados.show')->with('empleado', $empleado);
    }

    /**
     * Show the form for editing the specified Empleado.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $cargo = Cargo::pluck('name', 'id');
        $tipoVinculacion = TipoVinculacion::pluck('name' , 'id');
        $sede = Sede::pluck('name', 'id');
        $empleado = $this->empleadoRepository->findWithoutFail($id);

        if (empty($empleado)) {
            Flash::error('Empleado not found');

            return redirect(route('empleados.index'));
        }

        return view('empleados.edit', ['empleado' => $empleado, 'cargo' => $cargo, 'sede' => $sede, 'tipoVinculacion' => $tipoVinculacion]);
    }

    /**
     * Update the specified Empleado in storage.
     *
     * @param  int              $id
     * @param UpdateEmpleadoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEmpleadoRequest $request)
    {
        $empleado = $this->empleadoRepository->findWithoutFail($id);

        if (empty($empleado)) {
            Flash::error('Empleado not found');

            return redirect(route('empleados.index'));
        }

        $empleado = $this->empleadoRepository->update($request->all(), $id);

        Flash::success('Empleado updated successfully.');

        return redirect(route('empleados.index'));
    }

    /**
     * Remove the specified Empleado from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $empleado = $this->empleadoRepository->findWithoutFail($id);

        if (empty($empleado)) {
            Flash::error('Empleado not found');

            return redirect(route('empleados.index'));
        }

        $this->empleadoRepository->delete($id);

        Flash::success('Empleado deleted successfully.');

        return redirect(route('empleados.index'));
    }
}
