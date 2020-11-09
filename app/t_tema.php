<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class t_tema extends Model
{
     protected $primaryKey = 'IDCLASIFICACION';   
    	protected $table = 'TBGEM_CITRAM_CLAS';
	    //protected $primaryKey = 'id_usu';
		protected $fillable = ['IDCLASIFICACION','IDTRAMITE'];


		 public function scopeTema($query,$id_tem){

		 	if(trim($id_tem) != "") {
						
						$query->where(\DB::raw('IDCLASIFICACION','$id_tem');
					}
				

		 }
}
