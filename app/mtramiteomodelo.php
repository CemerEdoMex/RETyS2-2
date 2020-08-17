<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mtramiteomodelo extends Model
{
      protected $primaryKey = 'id_registro';   
    	protected $table = 'tramite_o_servicio';
	    //protected $primaryKey = 'id_usu';
		protected $fillable = ['id_registro','id_tramiteoservicio', 'orden_gobierno', 'dependencia','nombre','palabra_clave','descripcion','documentos_req','f_legal','doc_obtener','vigencia','metodo_tramite','tiempo_respuesta','costo','grupo','categoria','oficinas','telefono','pasos','responsable_tramite'];
           


           public function scopeBuscar($query,$buscar){
           	if (trim('buscar')!= "") {
           		$query->where(\DB::raw("CONCAT(nombre,'',descripcion,'',palabra_clave)"),"LIKE", "%$buscar%" );
           			
           		# code...
           	}
           }

		public function scopeTipo($query, $tipo){

				if($tipo != "") {
						$query->where('id_tramiteoservicio', $tipo);
					}
				
			}
}
