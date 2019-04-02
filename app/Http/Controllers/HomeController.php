<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ausentismo;
use App\Models\Sede;
use Charts;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Ausentismo::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))
                    ->get();          
                    
                    // Heroku $users = Ausentismo::where(DB::raw("(to_char(created_at,'YYYY'))"),date('Y'))
                    // ->get();          
        $sede = DB::table('empleados')
        ->join('sedes', 'sedes.id','=', 'empleados.id_sede')
        ->select('empleados.*', 'sedes.name as nameSede')->get();
        $total = DB::table('ausentismos')
        ->join('empleados', 'empleados.id','=', 'ausentismos.id_empleado')
        ->join('sedes', 'sedes.id','=', 'ausentismos.id_empleado')
        ->select('ausentismos.*', 'sedes.name as nameSede')->get();

        $chart = Charts::database($users, 'bar', 'highcharts')
			      ->title("Evaluacion de ausentismos")
			      ->elementLabel("Total Ausentismos")
			      ->dimensions(500, 500)
			      ->responsive(true)
			      ->groupByMonth(date('Y'), true);
	  
		$pie  =	 Charts::database($total, 'pie', 'highcharts')
				    ->title('Total de ausentismos por Sede')
				    ->elementLabel("Total Ausentismos Por sede")
                    ->dimensions(1000,500)
                    ->groupBy('nameSede')
                    ->responsive(true);
		$donut = Charts::create('donut', 'highcharts')
					->title('My nice chart')
					->labels(['First', 'Second', 'Third'])
					->values([5,10,20])
					->dimensions(1000,500)
					->responsive(false);

		$geo = 	Charts::create('geo', 'highcharts')
					->title('My nice chart')
					->elementLabel('My nice label')
					->labels(['CO', 'US'])
					->colors(['#C5CAE9', '#283593'])
					->values([5,10,20])
					->dimensions(1000,500)
					->responsive(false);
        return view('home',compact('chart','pie', 'donut', 'geo'));
    }
}
