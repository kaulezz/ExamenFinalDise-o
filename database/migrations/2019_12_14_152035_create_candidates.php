<?php 
use Illuminate\Support\Facades\Schema;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
//Generated By PlantUML Command
class CreateCandidates extends Migration{
	public function up(){ 
 		Schema::create('candidates', function (Blueprint $table) { 
			$table->bigIncrements('id');
			$table->string('name');
			$table->string('lastname');
			$table->timestamps();
		});
 	} 
	public function down(){
 
	} 
}