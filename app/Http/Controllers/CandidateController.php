<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Candidate;

class CandidateController extends Controller{

	public function list(){
		$candidate= Candidate::all();
		return view('Candidates',['Candidates'=>$candidate]);
	}
}