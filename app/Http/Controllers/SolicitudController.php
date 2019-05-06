<?php

namespace App\Http\Controllers;

use App\Mail\SolicitudMail;
use App\DataTables\SolicitudDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateSolicitudRequest;
use App\Http\Requests\UpdateSolicitudRequest;
use App\Repositories\SolicitudRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use App\Models\Instituciones;
use App\Models\Cupo;
use App\Models\Examenes;
use App\Models\ExamenInstitucion;
use App\Models\Solicitud;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use DB;
use Session;

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
        $instituciones = Instituciones::pluck('name', 'id');
        $cupo = Cupo::pluck('serial' , 'id');
        $examenes = Examenes::pluck('name', 'id');
        $exameninstitucion = ExamenInstitucion::pluck('valor_previser', 'id');
        return view('solicituds.create', ['instituciones' => $instituciones, 'cupo' => $cupo,
         'examenes' => $examenes,'exameninstitucion' => $exameninstitucion]);
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
        $solicitudes = DB::table('solicituds')
      ->join('cupos', 'cupos.id','=', 'solicituds.id_serial')
      ->join('clientes', 'clientes.id','=', 'cupos.cod_cliente')
      ->where('cupos.cod_cliente','=',$id)
      ->select('clientes.id','clientes.correo as correoCliente', 'fecha_cita', 'hora')->get();

      $comment = 'Su Solicitud de cita fue aprobada';
      $toEmail = $solicitudes[0]->correoCliente;
      Mail::to($toEmail)->send(new SolicitudMail($comment));

        $instituciones = Instituciones::pluck('name', 'id');
        $cupo = Cupo::pluck('serial' , 'id');
        $examenes = Examenes::pluck('name', 'id');
        $exameninstitucion = ExamenInstitucion::pluck('valor_previser', 'id');
        $solicitud = $this->solicitudRepository->findWithoutFail($id);

        if (empty($solicitud)) {
            Flash::error('Solicitud not found');

            return redirect(route('solicituds.index'));
        }
        return view('solicituds.edit',['solicitud' => $solicitud , 'instituciones' => $instituciones, 'cupo' => $cupo,
        'examenes' => $examenes,'exameninstitucion' => $exameninstitucion]);
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
       
        // Mail::to('gustin1220@gmail.com')->send(new SolicitudMail);

        // Flash::success('Solicitud updated successfully.');

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
       $employ = Cupo::where('serial', '=', $id)->first()->toArray();
    //    var_dump($employ);
       echo json_encode($employ);
   }



   public function sendEmail(){
    //   $solicitudes = DB::table('solicituds')
    //   ->join('cupos', 'cupos.id','=', 'solicituds.id_cupo')
    //   ->join('clientes', 'clientes.id','=', 'cupos.cod_cliente')
    //   ->where('cupos.cod_cliente','=',$id)
    //   ->select('clientes.id','clientes.correo as correoCliente')->get();
    //      $solicitud = $this->solicitudRepository->findWithoutFail($id);

    //     $data = array(
    //         'nombre' => "nombre",
    //         'fechaincio' => 'fecha_inicio'
    //     );
    //       Mail::send('emails.aprobado', $data, function($message){

    //         $message->from('gustin1220@gmail.com', 'Informacion de su solicitud');

    //         $message->to('gustin1220@gmail.com')->subject('test email Solicitud');

    //    });     
    $comment = 'Hi, This test feedback.';
    $toEmail = "codejonville@gmail.com";
    Mail::to($toEmail)->send(new SolicitudMail($comment));
    
    return 'Email has been sent to '. $toEmail;
   }
}
