<?php
  	require_once('../Connections/conexion.php');

		// Crear instancia de conexion
		$instancia = new Conexion();
		$conexion = $instancia->get_conexion();

		$idtramserv = $_GET['idtramserv'];

		//session_start();


		$sentenciasql = oci_parse($conexion, "SELECT IDTRAMITE,IDCVEUA,DENOMINACION,DESCRIPCION,FLEGAL,DOCOBTENER,NOMBRE_CORTO,ENLINEA,AMBITO,PRESENCIAL,TRESP_MIN,TRESP_HOR,TRESP_DIA,TRESP_ANIO,TRESP_MES from tbgem_citramite where idtramite = '".$idtramserv."'");
		//$sentenciasql = oci_parse($conexion, "SELECT nombre,usuario,password,cvereg,cveu2017,cveu2018 FROM tblusuarios WHERE usuario = '".$txtusuario."' and password = '".$txtpassw."'");

		oci_execute($sentenciasql);

		//echo $idtramserv;

		while ($fila = oci_fetch_array($sentenciasql, OCI_ASSOC+OCI_RETURN_NULLS)) {
				$varidtramite = $fila['IDTRAMITE'];
				$varidcveua = $fila['IDCVEUA'];
				$vardenominacion = $fila['DENOMINACION'];
				$vardescrip = $fila['DESCRIPCION'];
				$varflegal = $fila['FLEGAL'];
				$vardocobtener = rtrim($fila['DOCOBTENER']);
				$varnomcorto =  $fila['NOMBRE_CORTO'];

				if ($fila['ENLINEA'] = 1) {
					$varenlineasino = utf8_decode('En Línea');
				} else {
					$varenlineasino = '';
				}

				if ($fila['AMBITO'] = 3) {
					$varambito = 'Estatal';
				} elseif ($fila['AMBITO'] = 4) {
					$varambito = 'Municipal';
				} else {
					$varambito = 'Federal';
				}

				if ($fila['PRESENCIAL'] = 1) {
					$varpresencial = 'Presencial';
				} else {
					$varpresencial = '';
				}

				if ($fila['TRESP_MIN'] > 0 or $fila['TRESP_HORA'] = 0 or $fila['TRESP_DIA'] = 0 or $fila['TRESP_MES'] = 0 or $fila['TRESP_ANIO'] = 0){
					$vartiemporesp = $fila['TRESP_MIN'] .' Minuto(s)';
				} elseif ($fila['TRESP_MIN'] = 0 or $fila['TRESP_HORA'] > 0 or $fila['TRESP_DIA'] = 0 or $fila['TRESP_MES'] = 0 or $fila['TRESP_ANIO'] = 0) {
					$vartiemporesp = $fila['TRESP_HORA'] .' Hora(s)';
				} elseif ($fila['TRESP_MIN'] = 0 or $fila['TRESP_HORA'] > 0 or $fila['TRESP_DIA'] = 0 or $fila['TRESP_MES'] = 0 or $fila['TRESP_ANIO'] = 0) {
					$vartiemporesp = $fila['TRESP_DIA'] .' Día(s)';
				} elseif ($fila['TRESP_MIN'] = 0 or $fila['TRESP_HORA'] > 0 or $fila['TRESP_DIA'] = 0 or $fila['TRESP_MES'] = 0 or $fila['TRESP_ANIO'] = 0) {
					$vartiemporesp = $fila['TRESP_MES'] .' Mes(es)';
				} elseif ($fila['TRESP_MIN'] = 0 or $fila['TRESP_HORA'] > 0 or $fila['TRESP_DIA'] = 0 or $fila['TRESP_MES'] = 0 or $fila['TRESP_ANIO'] = 0) {
					$vartiemporesp = $fila['TRESP_ANIO'] .' Año(s)';
				} else {
					$vartiemporesp = 'No aplica';
				}

				//$varpresencial = $_SESSION['presencial'];

				//echo utf8_encode($fila['IDTRAMITE']."<br>");
				//echo utf8_encode($fila['DENOMINACION']."<br>");
			}

		$sentenciasql = oci_parse($conexion, "SELECT DEPENDENCIA,DIR_GRAL,UNIDADADM,TITULAR,CORREOE,CALLE,NOEXTINT,COLONIA,CP,LADA1,LADA2,LADA3,TELEFONO1,TELEFONO2,TELEFONO3,EXT,FAX  from tbgem_ciunidadesadm where IDCVEUA = '".$varidcveua."'");

		oci_execute($sentenciasql);

		while ($fila = oci_fetch_array($sentenciasql, OCI_ASSOC+OCI_RETURN_NULLS)) {
				$vardep = $fila['DEPENDENCIA'];
				$vardirgral = $fila['DIR_GRAL'];
				$varunidadadm = $fila['UNIDADADM'];
				$vartitular = $fila['TITULAR'];
				$varcorreoe = $fila['CORREOE'];
				$varcalle = $fila['CALLE'];
				$varnoextint = $fila['NOEXTINT'];
				$varcolonia = $fila['COLONIA'];
				$varcp = $fila['CP'];
				$varlada1 = $fila['LADA1'];
				$varlada2 = $fila['LADA2'];
				$varlada3 = $fila['LADA3'];
				$vartelefono1 = $fila['TELEFONO1'];
				$vartelefono2 = $fila['TELEFONO2'];
				$vartelefono3 = $fila['TELEFONO3'];
				$varext = $fila['EXT'];
				$varfax = $fila['FAX'];
				//echo utf8_encode($fila['IDTRAMITE']."<br>");
				//echo utf8_encode($fila['DENOMINACION']."<br>");
			}


//select idtramite,tipon,idreqtram,descripcion from tbgem_cireq_tram where idtramite = 5252 and tipon > 1 order by idtramite asc, tipon, idreqtram;

		$vardescripcion = utf8_decode("En esta parte del sistema se tiene que colocar la descripcion del trámite o servicio");

		oci_close($conexion);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fichas Informativas</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<style>
	* {box-sizing: border-box
	}
	body {font-family: "Lato", sans-serif;}


   td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

   tr:nth-child(even) {
      background-color: #dddddd;
    }

	#requisitos {
	  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	  border-collapse: collapse;
	  width: 100%;
	}

	#requisitos td, #requisitos th {
	  border: 1px solid #ddd;
	  padding: 8px;
	}

	#requisitos tr:nth-child(even){background-color: #f2f2f2;}

	#requisitos tr:hover {background-color: #ddd;}

	#requisitos th {
	  padding-top: 12px;
	  padding-bottom: 12px;
	  text-align: left;
	  background-color: #4CAF50;
	  color: white;
	}

	.button {
	  border: none;
	  color: white;
	  padding: 15px 32px;
	  text-align: center;
	  text-decoration: none;
	  display: inline-block;
	  font-size: 16px;
	  margin: 4px 2px;
	  cursor: pointer;
	  border-radius: 15px;
	}

	.button1 {background-color: #A9A9A9;} /* Gris Oscuro */

	</style>
</head>
<html>
<body>

		<div>
		  <h6>
		  	<p style="background:#341050; color:white; font-weight:bold; padding:10px;  solid #a3a1a0; margin-top:40px; margin-bottom:1px; text-align:center; font-size:30px; border-radius:10px;">
		  		<?php
		  			echo utf8_encode($vardenominacion);
		  		?>
		  	</p>
		  	<p style="color: #7c7b7b; font-size:20px; padding: 30px; border: 10px solid #d8d8d8; text-align:center; border-radius: 6px;">
		  		<?php
		  			echo utf8_encode($vardescrip->load());
		  			//echo utf8_encode($varflegal->load());
		  		?>
		  	</p>
		  </h6>
		</div>

		<script>
		function openCity(evt, cityName) {
		  var i, x, tablinks;
		  x = document.getElementsByClassName("city");
		  for (i = 0; i < x.length; i++) {
		    x[i].style.display = "none";
		  }
		  tablinks = document.getElementsByClassName("tablink");
		  for (i = 0; i < x.length; i++) {
		    tablinks[i].className = tablinks[i].className.replace(" w3-cian", "");
		  }
		  document.getElementById(cityName).style.display = "block";
		  evt.currentTarget.className += " w3-cian";
		}
		</script>


		<div class="w3-sidebar w3-bar-block w3-light-grey w3-card wrapper" style="width:270px">
		  <button class="w3-bar-item w3-button tablink" onclick="openCity(event, 'InformacionGeneral')" id="defaultOpen"><img src="../iconos/info_viol.png">Información General</button>
		  <button class="w3-bar-item w3-button tablink" onclick="openCity(event, 'Domicilio')"><img src="../iconos/domicilio_viol.png">Domicilio</button>
		  <button class="w3-bar-item w3-button tablink" onclick="openCity(event, 'Costos')"><img src="../iconos/costos_viol.png">Costos</button>
		  <button class="w3-bar-item w3-button tablink" onclick="openCity(event, 'TiempoResp')"><img src="../iconos/tiempo_viol.png">Tiempo de Respuesta</button>
		  <button class="w3-bar-item w3-button tablink" onclick="openCity(event, 'Requisitos')"><img src="../iconos/requisitos_viol.png">Requisitos</button>
		  <button class="w3-bar-item w3-button tablink" onclick="openCity(event, 'Pasosaseguir')"><img src="../iconos/pasos_viol.png">Pasos a seguir</button>
		  <button class="w3-bar-item w3-button tablink" onclick="openCity(event, 'Doctoobtener')"><img src="../iconos/documento_viol.png">Documento a obtener</button>
		  <button class="w3-bar-item w3-button tablink" onclick="openCity(event, 'fundamjurid')"><img src="../iconos/fundamento_viol.png">Fundamento Jurídico</button>
		  <button class="w3-bar-item w3-button tablink" onclick="openCity(event, 'Pregfrec')"><img src="../iconos/preguntas_viol.png">Preguntas Frecuentes</button>
		</div>
<!--**************************************************************************************************************************************************************************************-->
		<div style="margin-left:200px" align="center">

			  <div id="InformacionGeneral" class="w3-container city" style="display:none">
			    <h2>Información General</h2>

			    <br>

				<div class="table-responsive">
				    <table class="table" border="2" style="width:70%">
				        <thead>
				            <tr>
				                <th scope="col">Dependencia u Organismo</th>
				                <th scope="col">Dirección General</th>
				                <th scope="col">Unidad Administrativa Responsable</th>
				                <th scope="col">Titular de la Unidad Administrativa</th>
				            </tr>
				        </thead>
				        <tbody>
				            <tr>
				                <td><?php echo utf8_encode($vardep); ?></td>
				                <td><?php echo utf8_encode($vardirgral); ?></td>
				                <td><?php echo utf8_encode($varunidadadm); ?></td>
				                <td><?php echo utf8_encode($vartitular); ?></td>
				            </tr>
				        </tbody>
				    </table>
				</div>
				<br>
				<div class="table-responsive">
				    <table class="table" border="2" style="width:70%">
				        <thead>
				            <tr>
				                <th scope="col">Modalidad del Trámite</th>
				                <th scope="col">Ámbito</th>
				                <th scope="col">Canal de Atención</th>
				                <th scope="col">Correo Electrónico</th>
				            </tr>
				        </thead>
				        <tbody>
				            <tr>
				                <td><?php echo utf8_encode($varenlineasino); ?></td>
				                <td><?php echo utf8_encode($varambito); ?></td>
				                <td><?php echo utf8_encode($varpresencial); ?></td>
				                <td><?php echo utf8_encode($varcorreoe); ?></td>
				            </tr>
				        </tbody>
				    </table>
				</div>
			  </div>
<!--**********************************************************************************************************************-->
			  <div id="Domicilio" class="w3-container city" style="display:none">
			    <h2>Domicilio</h2>

			    <br>

				<div class="table-responsive">
				    <table class="table" border="2" style="width:70%">
				        <thead>
				            <tr>
				                <th scope="col">Calle</th>
				                <th scope="col">Número Ext. / Int.</th>
				                <th scope="col">Colonia</th>
				                <th scope="col">Código Postal</th>
				            </tr>
				        </thead>
				        <tbody>
				            <tr>
				                <td><?php echo utf8_encode($varcalle); ?></td>
				                <td><?php echo utf8_encode($varnoextint); ?></td>
				                <td><?php echo utf8_encode($varcolonia); ?></td>
				                <td><?php echo utf8_encode($varcp); ?></td>
				            </tr>
				        </tbody>
				    </table>
				</div>
				<br>
				<div class="table-responsive">
				    <table class="table" border="2" style="width:70%">
				        <thead>
				            <tr>
				                <th scope="col">Número Telefónico (1)</th>
				                <th scope="col">Número Telefónico (2)</th>
				                <th scope="col">Número Telefónico (3)</th>
				                <th scope="col">Extensión</th>
				                <th scope="col">Fax</th>
				            </tr>
				        </thead>
				        <tbody>
				            <tr>
				                <td><?php echo utf8_encode($varlada1.'  -  '.$vartelefono1); ?></td>
				                <td><?php echo utf8_encode($varlada2.'  -  '.$vartelefono2); ?></td>
				                <td><?php echo utf8_encode($varlada3.'  -  '.$vartelefono3); ?></td>
				                <td><?php echo utf8_encode($varext); ?></td>
				                <td><?php echo utf8_encode($varfax); ?></td>
				            </tr>
				        </tbody>
				    </table>
				</div>
			  </div>
<!--****************************************************************************************************************************-->
			  <div id="Costos" class="w3-container city" style="display:none">
			    <h2>Costos</h2>

			    <br>

				<div class="table-responsive">
				    <table class="table table-hover" border="2" style="width:70%">
				        <tbody>
				            <tr>
								<td>
									<?php
										$sentenciasql = oci_parse($conexion, "SELECT RENGLON, COLUMNA, COSTO, ENCABEZADO, DEFINICION from TBGEM_CICOSTOS where idtramite = '".$idtramserv."' order by renglon, columna");
										//$sentenciasql = oci_parse($conexion, "SELECT IDTRAMITE,TIPON,IDREQTRAM,DESCRIPCION from tbgem_cireq_tram where idtramite = '".$idtramserv."' order by IDTRAMITE
										//	asc, TIPON, IDREQTRAM");

										oci_execute($sentenciasql);

										//$fila = oci_fetch_array($sentenciasql, OCI_ASSOC+OCI_RETURN_NULLS);

										//var_dump($fila);
										//printf("%s (%s)\n", $fila[0], $fila[1]);

										//echo oci_num_rows($sentenciasql) . " REGISTROS ENCONTRADOS.<br />\n";


										$varnumprog = 0;

										//echo "<table  class='table table-striped'>"; //EMPIEZA A CREAR LA TABLA CON LOS ENCABEZADOS DE TABLA
										//echo "<tr>";//<tr> CREA UNA NUEVA FILA
										echo "<td><strong>TITULO</strong></td>";
										echo "<td><strong>DEFINICION</strong></td>";
										echo "<td><strong>COSTO</td>";
										echo "</tr>";

										$renglon = 0;
										$numrenglon=0;
										$numcolumna=0;
										$iniciorenglon = 'true';

										while ($fila = oci_fetch_array($sentenciasql, OCI_ASSOC+OCI_RETURN_NULLS)) {

												$varnumprog = $varnumprog + 1;



												$iniciorenglon = 'true';
												$contenido = '';
												if ($iniciorenglon = 'true') {
													echo "<tr>";
													$iniciorenglon = 'false';
												}
												$renglon = $fila['RENGLON'];
												$columna = $fila['COLUMNA'];
												//echo $renglon;
												//echo $columna;
												$encab = utf8_encode($fila['ENCABEZADO']);
												$defin = utf8_encode($fila['DEFINICION']);
												$cost = $fila['COSTO'];
												//echo $renglon;
												//if ($fila['COLUMNA'] = 0 and $fila['COSTO'] = '0' and $fila['ENCABEZADO'] = '0') {
												if ($renglon = 0 ) {
														//$encab_renglon = utf8_encode($fila['DEFINICION']);
														//$contenido = $encab_renglon;
														//echo "<td> <div align=\"center\"><font color=\"#000000\"><font size=\"2\"><font face=\"Verdana\">$encab_renglon</font></font></div></td>";
												}elseif ($columna = 0 ){
														$encab_renglon = utf8_decode($fila['DEFINICION']);
														$contenido = $encab_renglon;
														//echo "<td> <div align=\"center\"><font color=\"#000000\"><font size=\"2\"><font face=\"Verdana\">$defin</font></font></div></td>";
												} else {
													$varcosto = $fila['COSTO'];
													$contenido=$varcosto;
												}

												//echo $fila['DEFINICION'];
												//echo $var1 = utf8_decode($fila['DEFINICION']);

												//$encab_renglon = utf8_encode($fila['DEFINICION']);

												echo "<td> <div align=\"center\"><font color=\"#000000\"><font size=\"2\"><font face=\"Verdana\">$varnumprog</font></font></div></td>";
												echo "<td> <div align=\"center\"><font color=\"#000000\"><font size=\"2\"><font face=\"Verdana\">$encab</font></font></div></td>";
												echo "<td> <div align=\"center\"><font color=\"#000000\"><font size=\"2\"><font face=\"Verdana\">$defin</font></font></div></td>";
												echo "<td> <div align=\"center\"><font color=\"#000000\"><font size=\"2\"><font face=\"Verdana\">$contenido</font></font></div></td>";
												if ($renglon <> $fila) {
													//echo
													# code...
												}
												//echo "<td> <div align=\"center\"><font color=\"#000000\"><font size=\"2\"><font face=\"Verdana\">$varcosto2</font></font></div></td>";
												//echo "$vardescripcion";
												echo "</tr>";





										}
/*										echo "$varnumprog";


										for ($i=0; $i < $varnumprog; $i++) {

												//var_dump($fila);
												//$varnumprog = $varnumprog + 1;
												echo "<td> <div align=\"center\"><font color=\"#000000\"><font size=\"2\"><font face=\"Verdana\">$varnumprog</font></font></div></td>";
												$contenido = '';
												if ($iniciorenglon = 'true') {
													echo "<tr>";
													$iniciorenglon = 'false';
												}
												$renglon = $fila['RENGLON'];
												$columna = $fila['COLUMNA'];
												echo $renglon;
												echo $columna;
												$encab = $fila['ENCABEZADO'];
												$defin = $fila['DEFINICION'];
												$cost = $fila['COSTO'];
												//echo $renglon;
												//if ($fila['COLUMNA'] = 0 and $fila['COSTO'] = '0' and $fila['ENCABEZADO'] = '0') {
												//if ($renglon <= 0 and  $columna <= 0) {
														//$encab_renglon = utf8_encode($fila['DEFINICION']);
														//$contenido = $encab_renglon;
												//		echo "<td> <div align=\"center\"><font color=\"#000000\"><font size=\"2\"><font face=\"Verdana\">$encab</font></font></div></td>";
												//}elseif ($renglon <= 0 and $columna = 1 ){
														//$encab_renglon = utf8_encode($fila['DEFINICION']);
														//$contenido = $encab_renglon;
											//			echo "<td> <div align=\"center\"><font color=\"#000000\"><font size=\"2\"><font face=\"Verdana\">$defin</font></font></div></td>";
												//} else {
												//	$varcosto = $fila['COSTO'];
												//	$contenido=$varcosto;
											//	}

												//echo $fila['DEFINICION'];
												//echo $var1 = utf8_decode($fila['DEFINICION']);

												//$encab_renglon = utf8_encode($fila['DEFINICION']);

												echo "<td> <div align=\"center\"><font color=\"#000000\"><font size=\"2\"><font face=\"Verdana\">$varnumprog</font></font></div></td>";
												echo "<td> <div align=\"center\"><font color=\"#000000\"><font size=\"2\"><font face=\"Verdana\">$encab</font></font></div></td>";
												echo "<td> <div align=\"center\"><font color=\"#000000\"><font size=\"2\"><font face=\"Verdana\">$defin</font></font></div></td>";
												echo "<td> <div align=\"center\"><font color=\"#000000\"><font size=\"2\"><font face=\"Verdana\">$cost</font></font></div></td>";
												if ($renglon <> $fila) {
													//echo
													# code...
												}
												//echo "<td> <div align=\"center\"><font color=\"#000000\"><font size=\"2\"><font face=\"Verdana\">$varcosto2</font></font></div></td>";
												//echo "$vardescripcion";
												//echo "</tr>";
										}*/

									?>
								</td>
				            </tr>
				        </tbody>

				    </table>
				</div>
				<br>

			  </div>
<!--************************************************************************************************************************-->
			  <div id="TiempoResp" class="w3-container city" style="display:none">
			    <h2>Tiempo de Respuesta</h2>

			    <br>

				<div class="table-responsive">
				    <table class="table" border="2" style="width:70%">
				        <thead>
				            <tr>
				                <th scope="col">Tiempo de Respuesta</th>
				            </tr>
				        </thead>
				        <tbody>
				            <tr>
				                <td><?php echo utf8_encode($vartiemporesp); ?></td>
				            </tr>
				        </tbody>
				    </table>
				</div>
			  </div>
<!--************************************************************************************************************************-->
			  <div id="Requisitos" class="w3-container city" style="display:none">
			    <h2>Requisitos</h2>

			    <br>

				<div class="table-responsive">
				    <table class="table" border="2" style="width:70%">
				        <tbody>
				            <tr>
								<td>
									<?php
										$sentenciasql = oci_parse($conexion, "SELECT IDTRAMITE,TIPON,IDREQTRAM,DESCRIPCION from tbgem_cireq_tram where idtramite = '".$idtramserv."' order by IDTRAMITE asc, TIPON, IDREQTRAM");

										oci_execute($sentenciasql);

										$varnumprog = 0;

										//echo "<table  class='table table-striped'>"; //EMPIEZA A CREAR LA TABLA CON LOS ENCABEZADOS DE TABLA
										//echo "<tr>";//<tr> CREA UNA NUEVA FILA
										echo "<td><strong>TIPO DE PERSONA</strong></td>";
										echo "<td><strong>DESCRIPCION DEL REQUISITO</strong></td>";
										//echo "<td><strong>DESCRIPCION DEL REQUISITO</strong></td>";
										echo "</tr>";

										while ($fila = oci_fetch_array($sentenciasql, OCI_ASSOC+OCI_RETURN_NULLS)) {

												$varnumprog = $varnumprog + 1;

												if ($fila['TIPON']=1) {
													$vartipon = 'PERSONA FÍSICA';
												} elseif ($fila['TIPON']=2) {
													$vartipon = 'PERSONA JURÍDICO COLECTIVA';
												} elseif ($fila['TIPON']=3) {
													$vartipon = 'INSTITUCIONES PÚBLICAS';
												} elseif ($fila['TIPON']=4) {
													$vartipon = 'OTROS';
												}

												$vardescripcion= utf8_encode($fila['DESCRIPCION']);

												echo "<td> <div align=\"center\"><font color=\"#000000\"><font size=\"2\"><font face=\"Verdana\">$varnumprog</font></font></div></td>";
												echo "<td> <div align=\"center\"><font color=\"#000000\"><font size=\"2\"><font face=\"Verdana\">$vartipon</font></font></div></td>";
												echo "<td> <div align=\"center\"><font color=\"#000000\"><font size=\"2\"><font face=\"Verdana\">$vardescripcion</font></font></div></td>";
												//echo "$vardescripcion";
												echo "</tr>";
										}

									?>
								</td>
				            </tr>
				        </tbody>
				    </table>
			  	</div>
			  </div>
<!--************************************************************************************************************************-->
			  <div id="Pasosaseguir" class="w3-container city" style="display:none">
			    <h2>Pasos a Seguir</h2>

			    <br>

				<div class="table-responsive">
				    <table class="table" border="2" style="width:70%">
				        <tbody>
				            <tr>
								<td>
									<?php
										$sentenciasql = oci_parse($conexion, "SELECT IDPASOS,PASO,IDTRAMITE from tbgem_pasos where IDTRAMITE = '".$idtramserv."' order by IDTRAMITE, IDPASOS");

										oci_execute($sentenciasql);

										$varnumprog = 0;

										//echo "<table  class='table table-striped'>"; //EMPIEZA A CREAR LA TABLA CON LOS ENCABEZADOS DE TABLA
										//echo "<tr>";//<tr> CREA UNA NUEVA FILA
										echo "<td><strong>PASOS A SEGUIR</strong></td>";
										//echo "<td><strong>DESCRIPCION DEL REQUISITO</strong></td>";
										echo "</tr>";

										while ($fila = oci_fetch_array($sentenciasql, OCI_ASSOC+OCI_RETURN_NULLS)) {

												$varnumprog = $varnumprog + 1;

												$varpasos = utf8_encode($fila['PASO']);


												echo "<td> <div align=\"center\"><font color=\"#000000\"><font size=\"2\"><font face=\"Verdana\">$varnumprog</font></font></div></td>";
												echo "<td> <div align=\"center\"><font color=\"#000000\"><font size=\"2\"><font face=\"Verdana\">$varpasos</font></font></div></td>";
												//echo "$vardescripcion";
												echo "</tr>";
										}

									?>
								</td>
				            </tr>
				        </tbody>
				    </table>
			  	</div>
			  </div>

<!--************************************************************************************************************************-->
			  <div id="Doctoobtener" class="w3-container city" style="display:none">
			    <h2>Documento a Obtener</h2>

			    <br>

				<div class="table-responsive">
				    <table class="table" border="2" style="width:70%">
				        <thead>
				            <tr>
				                <th>Documento a Obtener</th>
				            </tr>
				        </thead>
				        <tbody>
				            <tr>
				                <th><?php echo utf8_encode($vardocobtener); ?></th>
				            </tr>
				        </tbody>
				    </table>
				</div>
			  </div>
<!--************************************************************************************************************************-->
			  <div id="fundamjurid" class="w3-container city" style="display:none">
			    <h2>Fundamento Jurídico</h2>

			    <br>

				<div class="table-responsive">
				    <table class="table" border="2" style="width:70%">
				        <thead>
				            <tr>
				                <th scope="col">FUNDAMENTO JURÍDICO:</th>
				            </tr>
				        </thead>
				        <tbody>
				            <tr>
				                <th scope="col"><?php echo utf8_encode($varflegal->load()); ?></th>
				            </tr>
				        </tbody>
				    </table>
				 </div>
			  </div>

<!--************************************************************************************************************************-->
			  <div id="Pregfrec" class="w3-container city" style="display:none">
			    <h2>Preguntas Frecuentes</h2>

			    <br>

				<div class="table-responsive">
				    <table class="table" border="2" style="width:70%">
				        <tbody>
				            <tr>
								<td>
									<?php
										$sentenciasql = oci_parse($conexion, "SELECT PREGUNTA, RESPUESTA from tbgem_ciotros where IDTRAMITE = '".$idtramserv."' order by NUM, CONSE");

										oci_execute($sentenciasql);

										$varnumprog = 0;

										//echo "<table  class='table table-striped'>"; //EMPIEZA A CREAR LA TABLA CON LOS ENCABEZADOS DE TABLA
										//echo "<tr>";//<tr> CREA UNA NUEVA FILA
										echo "<td><strong>PREGUNTA</strong></td>";
										echo "<td><strong>RESPUESTA</strong></td>";
										echo "</tr>";

										while ($fila = oci_fetch_array($sentenciasql, OCI_ASSOC+OCI_RETURN_NULLS)) {

												$varnumprog = $varnumprog + 1;

												$varpregunta = utf8_encode($fila['PREGUNTA']);
												$varrespuesta = utf8_encode($fila['RESPUESTA']);

												echo "<td> <div align=\"center\"><font color=\"#000000\"><font size=\"2\"><font face=\"Verdana\">$varnumprog</font></font></div></td>";
												echo "<td> <div align=\"center\"><font color=\"#000000\"><font size=\"2\"><font face=\"Verdana\">$varpregunta</font></font></div></td>";
												echo "<td> <div align=\"center\"><font color=\"#000000\"><font size=\"2\"><font face=\"Verdana\">$varrespuesta</font></font></div></td>";
												//echo "$vardescripcion";
												echo "</tr>";
										}

									?>
								</td>
				            </tr>
				        </tbody>
				    </table>
			  	</div>

<!--			  	<div class="table-responsive">
			  		<table class="table" border="2" style="width: 70%">
			  			<br>
						<button class="button button1">Más Información</button>
			  		</table>
			  	</div>-->

			  </div>

		</div>

<!--**************************************************************************************************************************************************-->
</body>
</html>
