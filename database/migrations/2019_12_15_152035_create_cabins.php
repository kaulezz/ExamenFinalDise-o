<?php 
use Illuminate\Support\Facades\Schema;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
//Generated By PlantUML Command
class CreateCabins extends Migration{
	public function up(){ 
 		Schema::create('cabins', function (Blueprint $table) { 
			$table->bigIncrements('id');
			$table->string('location');
			$table->integer('code');
			$table->bigInteger('id_elector')->unsigned();
			$table->timestamps();  
			$table->foreign('id_elector')->references('id')->on('electors')->onDelete('cascade');
			
		});	
 	} 
	public function down(){
 
	} 
}