<?php

namespace App\Http\Controllers;

use App\DataTables\AusentismoDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateAusentismoRequest;
use App\Http\Requests\UpdateAusentismoRequest;
use App\Repositories\AusentismoRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use App\Models\Empleado;
use App\Models\TipoAusentismo;


class AusentismoController extends AppBaseController
{
    /** @var  AusentismoRepository */
    private $ausentismoRepository;

    public function __construct(AusentismoRepository $ausentismoRepo)
    {
        $this->ausentismoRepository = $ausentismoRepo;
    }

    /**
     * Display a listing of the Ausentismo.
     *
     * @param AusentismoDataTable $ausentismoDataTable
     * @return Response
     */
    public function index(AusentismoDataTable $ausentismoDataTable)
    {
        return $ausentismoDataTable->render('ausentismos.index');
    }

    /**
     * Show the form for creating a new Ausentismo.
     *
     * @return Response
     */
    public function create()
    {
        $empleado = Empleado::all();
        $tipoausentismos = Tipoausentismo::all();
        return view('ausentismos.create')->with(['tipoausentismos' => $tipoausentismos]);
    }

    /**
     * Store a newly created Ausentismo in storage.
     *
     * @param CreateAusentismoRequest $request
     *
     * @return Response
     */
    public function store(CreateAusentismoRequest $request)
    {
        $input = $request->all();

        $ausentismo = $this->ausentismoRepository->create($input);

        Flash::success('Ausentismo guardado exitosamente.');

        return redirect(route('ausentismos.index'));
    }

    /**
     * Display the specified Ausentismo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ausentismo = $this->ausentismoRepository->findWithoutFail($id);

        if (empty($ausentismo)) {
            Flash::error('Ausentismo not found');

            return redirect(route('ausentismos.index'));
        }

        return view('ausentismos.show')->with('ausentismo', $ausentismo);
    }

    /**
     * Show the form for editing the specified Ausentismo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoausentismos = Tipoausentismo::all();
        $ausentismo = $this->ausentismoRepository->findWithoutFail($id);
        $tipoAusentismo = Tipoausentismo::find($ausentismo->id_tipoausentismo);
        $empleado = Empleado::find($ausentismo->id_empleado);

        if (empty($ausentismo)) { 
            Flash::error('Ausentismo not found');

            return redirect(route('ausentismos.index'));
        }
       // var_dump($tipoAusentismo["name"]);
        return view('ausentismos.edit', ['ausentismo' => $ausentismo , 'tipoausentismos' => $tipoausentismos, 
        'empleado' => $empleado, 'tipoAusentismo' => $tipoAusentismo]);
    }

    /**
     * Update the specified Ausentismo in storage.
     *
     * @param  int              $id
     * @param UpdateAusentismoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAusentismoRequest $request)
    {
        $ausentismo = $this->ausentismoRepository->findWithoutFail($id);

        if (empty($ausentismo)) {
            Flash::error('Ausentismo not found');

            return redirect(route('ausentismos.index'));
        }

        $ausentismo = $this->ausentismoRepository->update($request->all(), $id);

        Flash::success('Ausentismo updated successfully.');

        return redirect(route('ausentismos.index'));
    }

    /**
     * Remove the specified Ausentismo from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ausentismo = $this->ausentismoRepository->findWithoutFail($id);

        if (empty($ausentismo)) {
            Flash::error('Ausentismo not found');

            return redirect(route('ausentismos.index'));
        }

        $this->ausentismoRepository->delete($id);

        Flash::success('Ausentismo eliminado con éxito.');

        return redirect(route('ausentismos.index'));
    }

    public function showDataEmploy ($id)
    {
       $employ = Empleado::where('identificacion', '=', $id)->first()->toArray();
    //    var_dump($employ);
       echo json_encode($employ);
   }

   public function showDataEmployName ($name) {
       $employ = Empleado::where('name', 'like', "%$name%")->get()->toArray();
       echo json_encode($employ);

   }
}
