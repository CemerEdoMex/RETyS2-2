<?php

class Conexion
{
	public function get_conexion()
	{
		// Declaracion de las variables

		//$conn=oci_connect("RETYS2014","retys2014","10.10.124.12:1521/pdb1srv.edomex.gob.mx");
		//$conn=oci_connect('SYSTEM','aDm1n2020','localhost/orcl');
		$conn=oci_connect('SYSTEM','Lalo1516','localhost/lalodatabase');

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

