<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//Generated By PlantUML Command
class Candidate extends Model{

    public function votos(){
        return $this->hasMany('App\Models\Voto');
    }
}