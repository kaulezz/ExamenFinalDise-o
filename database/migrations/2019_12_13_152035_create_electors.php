<?php 
use Illuminate\Support\Facades\Schema;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
//Generated By PlantUML Command
class CreateElectors extends Migration{
	public function up(){ 
 		Schema::create('electors', function (Blueprint $table) { 
			$table->bigIncrements('id');
			$table->string('name');
			$table->string('dni');
			$table->string('lastname');
			$table->timestamps();
		});
		
 	} 
	public function down(){
 
	} 
}