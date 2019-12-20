<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Voto;

class VotoController extends Controller{

	public function list(){
		$votos= Voto::all();
		return view('Votos',['Votos'=>$votos]);
}}