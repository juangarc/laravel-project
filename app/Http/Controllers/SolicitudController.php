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

   public function sendEmail($id){

    $solicitud = $this->solicitudRepository->findWithoutFail($id);

    // if (empty($solicitud)) {
    //     Flash::error('Solicitud not found');

    //     return redirect(route('solicituds.index'));
    // }

    Mail::to('gustin1220@gmail.com')->send(new SolicitudMail($solicitud));

    return redirect(route('solicituds.index'));
    

   }

//    public function sendEmail(){ 
//     $solicitud = new\App\Models\Solicitud([
//         'nombre' => "cliente",
//         'fechacita' =>'09/20/2019',
//         'hora' => '19:00:00'
//     ]);
//     Mail::to('gustin1220@gmail.com')->send(new SolicitudMail($solicitud));
     //Mail::to($receivers)->send();
    //$data = Solicitud::all();
    //   $data = array(
    //       'nombre' => "nombre",
    //       'fechaincio' => 'fecha_inicio',
    //       //'estado',
    //       'Institucion' => 'id_institucion',
    //       'Examen ' => 'id_examen',
    //       'costo' => 'id_examen_institucion',
    //       'fechacita' => 'fecha_cita',
    //       'progreso' => 'progreso',
    //       'observaciones antes de' => 'observacion',
    //       'hora de examne' => 'hora'
    //   );
    // $receivers = "andres.gustin@correounivalle.edu.co";
    // Mail::to($receivers)->send(new SolicitudMail($call));

    //  Mail::send('emails.aprobado', $data, function($message){

    //      $message->from('gustin1220@gmail.com', 'Informacion de su solicitud');

    //      $message->to('gustin1220@gmail.com')->subject('test email Solicitud');

    // });
    //}
//         /**
//      * Update the specified Solicitud in storage.
//      * @param  int              $id
//      * @return Response
//      */
// public function sendEmail(){
//     $id = 0;   
//     $solicitudes = Solicitud::findOrFail($id);

//     $solicitudes_get_id=$solicitudes->id;
    
//     $results =  \DB::select("SELECT date fecha_inicio,fecha:cita ,name,  FROM solicitudes left join cupos on cupos.cod_cliente = cliente.id WHERE $solicitudes_get_id");

//     foreach ( $results as $client) {

//         $ident = $client->identificacion;
//         $nombre = $client->nombre;
//         $price = $client->apellido;
//         $email = $client->correo;     
//      }	
     
//      $data = array(
//         'id'=>$solicitudes_get_id,
//         'ident'=> $ident,
//         'nombre'=> $nombre,
//         'apellido'=>$apellido,
//         'email'=> $email,
//         'identification'=> $identification,


//      );
//       Mail::send('emails.aprobado', $data, function($message){

//          $message->from('gustin1220@gmail.com', 'Informacion de su solicitud');

//       $message->to('gustin1220@gmail.com')->subject('test email Solicitud');

//      });


    //  Mail::send('gustin1220@gmail.com', $data, function($msj) use ($data) {
                    
    //      $pdf = PDF::loadView('emails.cotizacion',$data);  
    //      $msj->subject('Cotización');
    //      $msj->to($data['email']);
                            
    //      $msj->attachData($pdf->output(), 'cotizacion.pdf');
    //  }); 
    //  return redirect ('/Solicitud')->with('message','enviar');
}
