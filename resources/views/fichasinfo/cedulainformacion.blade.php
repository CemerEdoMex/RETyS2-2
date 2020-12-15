<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Collapsible </title>

  <link rel="stylesheet" href="{{ asset('bootstrap4.5/css/bootstrap.min.css') }}">
   <link rel="stylesheet" href="{{ asset('css/stylecedula/style4.css') }}">


    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Cedula informativa</h3>
                <strong></strong>
            </div>

            <ul class="list-unstyled components">
               
                <li>
                    <a href="#" class="w3-bar-item tablink" onclick="openCity(event, 'InformacionGeneral')" id="defaultOpen">
                         <img src="{{asset('img/imgcedula/info_viol.png')}}" style="width:15%;" >
                        Información general
                    </a>
                </li>
                <li>
                    <a href="#" class="w3-bar-item tablink" onclick="openCity(event, 'Domicilio')">
                         <img src="{{asset('img/imgcedula/domicilio_viol.png')}}" style="width:15%;" >
                        Domicilio
                    </a>
                </li>
				<li>
                    <a href="#" class="w3-bar-item tablink" onclick="openCity(event, 'Costos')">
                        <img src="{{asset('img/imgcedula/costos_viol.png')}}" style="width:15%;" >
                        Costos
                    </a>
                </li>
				<li>
                    <a href="#" class="w3-bar-item  tablink" onclick="openCity(event, 'TiempoResp')">
                        <img src="{{asset('img/imgcedula/tiempo_viol.png')}}" style="width:15%;" >
                        Tiempo de respuesta
                    </a>
                </li>
				<li>
                    <a href="#" class="w3-bar-item w3-button tablink" onclick="openCity(event, 'Requisitos')">
                        <img src="{{asset('img/imgcedula/requisitos_viol.png')}}" style="width:15%;" >
                        Requisitos
                    </a>
                </li>
				<li>
                    <a href="#" class="w3-bar-item  tablink" onclick="openCity(event, 'Pasosaseguir')">
                        <img src="{{asset('img/imgcedula/pasos_viol.png')}}" style="width:15%;" >
                        Pasos a seguir
                    </a>
                </li>
				<li>
                    <a href="#" class="w3-bar-item tablink" onclick="openCity(event, 'Doctoobtener')">
                        <img src="{{asset('img/imgcedula/documento_viol.png')}}" style="width:15%;" >
                        Documento a obtener
                    </a>
                </li>
				<li>
                    <a href="#" class="w3-bar-item tablink" onclick="openCity(event, 'fundamjurid')">
                         <img src="{{asset('img/imgcedula/fundamento_viol.png')}}" style="width:15%;" >
                        Fundamento jurídico
                    </a>
                </li>
                <li>
                    <a href="#">
                         <img src="{{asset('img/imgcedula/preguntas_viol.png')}}" style="width:15%;" >
                        Preguntas frecuentes
                    </a>
                </li>
            </ul>

           
        </nav>


        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light ">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        
                    </button>
                    

                    
                </div>
            </nav>


             <div id="InformacionGeneral" class="tabcontent text-center">
      <h2>Información General</h2>
      <table>
            <tr>
                <td>Modalidades</td>
                <th>
                    <a href="http://sistemas2.edomex.gob.mx/ventanilla/ejecutarTramite.action?valorTramite=352&tipoTramite=2"><img src="img\iconos_transparencia\\tramite_linea.png"
                    alt="tramite en linea"></a>

                    <a href=""><img src="img\iconos_transparencia\presencial.png"
                    alt="tramite en linea"></a>
                </th>
            </tr>
            <tr>
                <td>Tiempo de respuesta</td>
                <th> 15 minuto(s)</th>
            </tr>
            <tr>
                <td>Ámbito</td>
                <th>Estatal</th>
            </tr>
            <tr>
                <td>Dependencia u Organismo</td>
                <th>Fiscalía General de Justicia del Estado de México</th>
            </tr>
            <tr>
                <td>Dirección General</td>
                <th>Coordinación General de Servicios Periciales</th>
            </tr>

            <tr>
                <td>Unidad Administrativa Responsable</td>
                <th>Departamento de Identificación</th>
            </tr>

            <tr>
                <td>Titular de la Unidad Administrativa Responsable</td>
                <th>Lic. Cuauhtémoc José Zariñana Oronoz</th>
            </tr>
      </table>
    </div>


        <div id="Domicilio" class="tabcontent text-center">
        <h2>Domicilio</h2>
        <table>
            <tr>
                <td>Oficina</td>
                <th>*Oficina de Expedición de Certificado de No Antecedentes Penales (Ecatepec)<br>
                    Domicilio Calle Palma No. Ext. Sin número No. Int. , Col. La Mora,
                    C.P. 55280, Municipio Ecatepec de Morelos, México<br>
                    * Municipios que atiende: Ecatepec de Morelos<br>
                </th>
            </tr>
            <tr>
                <td>Teléfonos y correos de contacto</td>
                <th> *Teléfonos:55 5787 7309<br>
                    *Correo electrónico:certificados@ispedomex.mx<br></th>
            </tr>
            <tr>
                <td>Días y horarios de atención</td>
                <th>*Horario y días de atención:De 9:00 a 16:00 horas de Lunes a Viernes</th>
            </tr>
        </table>
    </div>

     <div id="Costos" class="tabcontent text-center">
        <h2>Costos</h2>
        <table>
            <tr>
                <td>costo</td>
                <th>$ 139 pesos.</th>
            </tr>
            <tr>
                <td>Lugar de pago</td>
                <th> Bancos, Centros comerciales y En Línea (Portal de Pagos).</th>
            </tr>
        </table>
    </div>

    <div id="TiempoResp" class="tabcontent text-center">
        <h2>Tiempo de respuesta</h2></center>
        <table>
            <tr>
                <td>Tiempo de respuesta</td>
                <th>15 minuto(s)</th>
            </tr>
        </table>
    </div>

     <div id="Requisitos" class="tabcontent text-center">
        <h2>Requisitos</h2>
        <table>
            <tr>
                <th>Requisitos para personas físicas:</th>
                <th>Original</th>
                <th>Copias</th>

            </tr>
            <tr>
                <td>1. Clave Única de Trámites y Servicios (CUTS)</td>
                <th> si</th>
                <th>no</th>
            </tr>
            <tr>
                <td>2. Formato universal de pago y comprobante de pago</td>
                <th> si</th>
                <th>no</th>
            </tr>
            <tr>
                <td>3. Identificación oficial vigente</td>
                <th> si</th>
                <th>no</th>
            </tr>
            <tr>
                <td>4. Comprobante de registro en línea (cita)</td>
                <th> si</th>
                <th>no</th>
            </tr>
            <tr>
                <td>5. Fotografías en tamaño infantil (solo se aplica si el trámite se va a concluir en los módulos de Chalco, Tlalnepantla, Texcoco, Ecatepec, Jilotepec, Valle de Bravo y Tejupilco)</td>
                <th> si</th>
                <th>no</th>
            </tr>
            <tr>
                <td>6. Oficio dirigido al C. Director General del Instituto de Servicios Periciales, el cual deberá ser expedido por la autoridad o el titular del área de recursos humanos de la dependencia que lo contrata; donde se especifique el nombre de la persona y el fundamento legal de dicha dependencia para requerir el certificado (oficio en hoja membretada, firmado y sellado)</td>
                <th> si</th>
                <th>no</th>
            </tr>
        </table>
    </div>




     <div id="Pasosaseguir" class="tabcontent text-center">
        <h2>Pasos a Seguir</h2>
        <table>
            <tr><td>El usuario ingresa a la dirección electrónica http://ventanillaelectronica.edomex.gob.mx/</td></tr>
            <tr><td>Localizar el apartado "Carpeta Ciudadana".</td></tr>
            <tr><td>Si no cuenta con su Clave Única de Trámites y Servicios (CUTS) dar clic en "¿No tienes tu CUTS? Obtenla AQUÍ" para obtenerla. Seguir los pasos para obterner la CUTS.</td></tr>
            <tr><td>Si ya cuenta con su CUTS, ingresar su CUTS y su contraseña; dar clic en el botón "Iniciar sesión".</td></tr>
            <tr><td>Al abrirse la ventanilla electrónica: Localizar el "Buscador avanzado de trámites o servicios"; escribir "antecedentes penales" y dar clic en el botón "Buscar".</td></tr>
            <tr><td>En los resultados de la búsqueda, dar click en el texto "Expedición del Informe o Certificado de No Antecedentes Penales".</td></tr>
            <tr><td>Al abrirse la nueva ventana, dar clic en "Trámite en linea".</td></tr>
            <tr><td>Leer el texto y dar clic en el botón "SIGUIENTE".</td></tr>
            <tr><td>Capturar los datos del solicitante y elegir el tipo de documento a obtener.</td></tr>
            <tr><td>Si se eligió un Informe de no antecedentes penales, el sistema presentará una liga para imprimir el documento. Imprima el documento para concluir su trámite.</td></tr>
            <tr><td>Si se eligió un certificado de no antecedentes penales, el sistema generará una liga para imprimir el "Comprobante de registro en línea". Imprima el comprobante.</td></tr>
            <tr><td>Regrese a la ventanilla electrónica y presione la tecla F5 para volver a cargar la información; si el navegador le muestra una alerta de clic en el botón "reenviar".</td></tr>
            <tr><td>Dentro de la ventanilla electrónica, en el apartado "Seguimiento de Trámites y Servicios" de clic en el rubro "En proceso Gobierno", enseguida localice y de clic sobre el folio al cual le va a dar seguimiento, al realizar esto, se desplegará el estado del folio, enseguida de clic en "Ver Detalle".</td></tr>
            <tr><td>Al desplegarse el seguimiento del trámite, de clic en "Abrir" y posteriormente de clic en "Ver detalle".</td></tr>
            <tr><td>Seleccione el módulo más cercano a su domicilio o trabajo al cual acudirá a concluir el trámite, de clic en el botón "Enviar".</td></tr>
            <tr><td>Seleccione la fecha y hora que más le convenga para asistir al módulo de expedición del certificado, de clic en el botón "Enviar".</td></tr>
            <tr><td>El sistema generará una liga para imprimir el "Comprobante de Registro en Línea (cita)" y otra para imprimir el "Formato Universal de Pago" (imprimir ambos).</td></tr>
            <tr><td>El usuario acude en la fecha y hora registrada en el "Comprobante de Registro en Línea" con la documentación que el comprobante especifica para concluir su trámite.</td></tr>
        </table>
    </div>



     <div id="Doctoobtener" class="tabcontent text-center">
        <h2>Documento a obtener</h2>
        <table>
            <tr>
                <th>Si el documento solicitado es un informe, se obtiene el informe de no antecedentes penales.</th>
            </tr>
            <tr>
                <th>Si el documento solicitado es un certificado, se obtiene el certificado de no antecedentes penales</th>
            </tr>
        </table>
    </div>

   
    <div id="fundamjurid" class="tabcontent text-center">
        <h2>Fundamento Juridico</h2>
        <table>
            <tr>
                <th>Ley para el uso de medios electrónicos del Estado de México. Artículo 19.</th>
            </tr>
            <tr>
                <th>Código Financiero del Gobierno del Estado de México Artículo 103 fracción I.</th>
            </tr>
            <tr>
                <th>Acuerdo 14/2011 del C. Procurador de Justicia del Estado de México</th>
            </tr>
            <tr>
                <th>Acuerdo 14/2011 del C. Procurador de Justicia del Estado de México</th>
            </tr>
        </table>
    </div>

           
           
    </div>


    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

<script src="{{ asset('js/Trasnparencia/trasnparencia.js')}}"></script>


    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>