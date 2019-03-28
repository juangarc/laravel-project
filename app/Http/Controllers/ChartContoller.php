<?php
 
 namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ausentismo;
use Charts;
use DB;

class ChartContoller extends Controller
{
    public function index()
    {
    	$users = Ausentismo::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))
    				->get();
        $chart = Charts::database($users, 'bar', 'highcharts')
			      ->title("Evaluacion de ausentismos")
			      ->elementLabel("Total Ausentismos")
			      ->dimensions(1000, 500)
			      ->responsive(false)
			      ->groupByMonth(date('Y'), true);
	  
		$pie  =	 Charts::create('pie', 'highcharts')
				    ->title('My nice chart')
				    ->labels(['First', 'Second', 'Third'])
				    ->values([5,10,20])
				    ->dimensions(1000,500)
					->responsive(false);
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
        return view('chart',compact('chart','pie', 'donut', 'geo'));
    }
}
