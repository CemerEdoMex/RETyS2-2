<?php

class Conexion
{
	public function get_conexion()
	{
		// Declaracion de las variables

		//$conn=oci_connect("prub","1234","10.33.64.190/xe");
		$conn=oci_connect('SYSTEM','Angel170820','localhost/angeldata');

		If (!$conn){
	        	echo 'Error en la conexión a la Base de Datos...';
        		$m = oci_error();
    			trigger_error(htmlentities($m['message']), E_USER_ERROR);
			}
    	//else{	
        //		echo 'CONECCION EXITOSA A Oracle LOCAL Mi File';
    	//	}
 
		return $conn;
	}
}
?>
