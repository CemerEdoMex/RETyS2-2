<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mtregistro extends Model
{
      protected $primaryKey = 'id_tramiteoservicio';   
    	protected $table = 'tipo_registro';
	    //protected $primaryKey = 'id_usu';
		protected $fillable = ['id_tramiteoservicio','Modalidad', 'nombre_ref'];
}
