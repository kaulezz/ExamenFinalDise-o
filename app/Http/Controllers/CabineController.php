<?php

namespace App\Http\Controllers;
use App\Models\Cabin;

use Illuminate\Http\Request;

class CabineController extends Controller
{
    public function list(){
		$cabine= Cabin::all();
		return view('cabins',['cabins'=>$cabine]);
	}
}
