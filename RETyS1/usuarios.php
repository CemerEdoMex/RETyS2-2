<?php
  	require_once('../Connections/conexion.php'); 

		// Crear instancia de conexion
		$instancia = new Conexion();
		$conexion = $instancia->get_conexion();

		$txtusuario = $_POST['txtuser'];
		$txtpassw = $_POST['txtpwd'];

		session_start();

		$_SESSION['user_reg'] = $txtusuario;
		$_SESSION['pasw_reg'] = $txtpassw;
		

		$sentenciasql = oci_parse($conexion, "SELECT IDTRAMITE from tbgem_citramite");

		oci_execute($sentenciasql);

		$buscar = 0;

		while ($fila = oci_fetch_array($sentenciasql, OCI_ASSOC+OCI_RETURN_NULLS)) {
				$buscar = 1;
				//$_SESSION['nombreusuario'] = $fila['NOMBRE']."<br>";
				//$nombreusuario = $_SESSION['nombreusuario'];
				//echo $fila['USUARIO']."<br>";
				//echo $fila['PASSWORD']."<br>";
				//$_SESSION['clave_reg'] = $fila['CVEREG'];
				//$_SESSION['cveunidad2017'] = $fila['CVEU2017'];
				//$_SESSION['cveunidad2018'] = $fila['CVEU2018'];
				echo $fila['IDTRAMITE'];
			}
		

		//echo $txtusuario;

		oci_close($conexion);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" name="viewport" content="width=device-width, initial-scale=1.0" content="charset=utf-8" />
    <title>SISTEMA DE CONTROL DE ACUERDOS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
      .sobre {
        position:relative;
        top:0px;
        left:0px;
        border:none;
      }
      .container{margin-top:100px;}    
    </style>
</head>
<html>
<body>

        <div align="center">
          <img class = "sobre" src="../imagenes/plecaRC2017.jpg" style="max-width:100%;height:auto;"/>
        </div>
        <div align="center">
          <img class = "sobre" src="../imagenes/pleca2017.jpg" style="max-width:100%;height:auto;"/>
        </div>

        <div class="container">
			<form class="form-horizontal" action="paginas/menu.php" method="post">
					<div class="jumbotron text-center">
					  <p>Acceso al Sistema...</p>
					  	<?php

							if ($buscar == 0)
								{
								echo "Los Datos insertados son INCORRECTOS ........, <a href=../index.html> VOLVER A INTENTAR";
								}
							else
								{
								echo "<br>";
								echo "Bienvenido   Usuario:    ORACLE LOCAL"; 
								echo "<br>";
								echo "<a href=./menu.php> ACCESO AUTORIZADO";
								}
						?>

					</div>
			</form>
		</div>

<p>&nbsp;</p>
</body>
</html>
