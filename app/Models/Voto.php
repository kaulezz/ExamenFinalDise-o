<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//Generated By PlantUML Command
class Voto extends Model{
public function cabin(){ 
    return $this->belongsTo('App\Models\Cabin');
 }
 public function candidate(){ 
    return $this->belongsTo('App\Models\Candidate');
 }
}