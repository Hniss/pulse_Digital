<?php

use Illuminate\Support\Facades\Route;
use Carbon\Carbon;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/corbon', function () {
    return view('corbon');
});

Route::post('/Carbon', function(){
	$value1 = $_POST['v1'];
	$value2 = $_POST['v2'];
		echo("<br>");

	echo("value1:  ".$value1);
	
	echo("<br>");
	
	echo("value2:  ".$value2);
	
	$val = Carbon::now();
	
	$val1 = $val->subYears(5);	
	echo("<br> -------showing val1 and val2 ------------- <br>");
	echo("val1 : ".$val1);


	$val2 = $val->addYears(10);
	echo("<br>");
	echo("val2 : ".$val2);


	echo("<br> -------Sub Days------------- <br>");
	echo($val->subDays(10)->diffForHumans());
	
	echo("<br> ---------Diff with val1----------- <br>");
	echo($val->diffForHumans($val1));
	
	echo("<br> ---------Diff with val2----------- <br>");
	echo($val->diffForHumans($val2));

	echo("<br> ---------Parse constant value----------- <br>");
	echo(Carbon::parse('2021-08-03')->diffForHumans('2021-09-03'));

	echo("<br> ---------Parse with val1 and val2 ----------- <br>");
	echo(Carbon::parse($val1)->diffForHumans($val2));


	echo("<br> ---------Using Carbon with form value -----------");
	echo("<br> ---------differance ----------- <br>");
	echo(Carbon::parse($value1)->diffForHumans($value2));

	echo("<br> ---------add month to value 1  ----------- <br>");
	echo(Carbon::parse($value1)->addMonth());

	echo("<br> ---------sub 3 days to value 2  ----------- <br>");
	echo(Carbon::parse($value2)->subDays(3));



});
