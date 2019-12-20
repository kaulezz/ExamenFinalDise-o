<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Elector;

class ElectorController extends Controller{

	public function chek(){
	}
	public function list(){
		$elector= Elector::all();
		return view('Electors',['Electors'=>$elector]);
	}
}