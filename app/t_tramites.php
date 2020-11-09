<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class t_tramites extends Model
{
 protected $primaryKey = 'IDTRAMITE';   
    	protected $table = 'TBGEM_CITRAMITE';
	    //protected $primaryKey = 'id_usu';
		protected $fillable = ['idtramite','COSTO_TRAM','TRAMOSERV','ENLINEA','Ambito','AMBITO_MUN_CLAVE','COSTO_TRAM','COSTO_CANTIDAD','Denominacion','PRINFIN_URL','PREGES_URL','CHAT_URL','PRINFIN','PREGES','CHAT','PRESENCIAL','PRINFIN_SEITS','TIPOTRAM','PREGES_SEITS'];


		 

		 
}
