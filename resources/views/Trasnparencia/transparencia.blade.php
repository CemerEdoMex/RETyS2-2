
@extends('Trasnparencia.layoutTransparencia')


@section('tarjetas')

<link rel="stylesheet" href="{{ asset('vendor/transparencia.css') }}">

<body class="mx-auto">
    <p style="background:#7d276d; color:white; font-weight:bold; padding:10px;  solid #a3a1a0; margin-top:40px; margin-bottom:1px; text-align:center; font-size:30px; border-radius:10px;">Expedición del informe o certificado de no antecedentes penales</p>
    <p style="color: #7c7b7b; font-size:20px; padding: 30px; border: 10px solid #d8d8d8; border-radius: 6px;">La expedición del Certificado o informe permite acreditar si una persona ha sido o no condenada por sentencia firme dictada por los órganos jurisdiccionales competentes.</p>

    <div class="tab">
        <button class="tablinks" onclick="openCity(event, 'Informacion_General')" id="defaultOpen"><img src="img\iconos_transparencia\info_morado.png">       Información General</button>
        <button class="tablinks" onclick="openCity(event, 'Domicilio')"><img src="img\iconos_transparencia\domicilio_morado.png">   Domicilio</button>
        <button class="tablinks" onclick="openCity(event, 'Costos')"><img src="img\iconos_transparencia\costos_morado.png">   Costos</button>
        <button class="tablinks" onclick="openCity(event, 'Tiempo_de_Respuesta')"><img src="img\iconos_transparencia\tiempo_morado.png"> Tiempo de Respuesta</button>
        <button class="tablinks" onclick="openCity(event, 'Requisitos')"><img src="img\iconos_transparencia\requisitos_morado.png">  Requisitos</button>
        <button class="tablinks" onclick="openCity(event, 'Pasos_a_seguir')"><img src="img\iconos_transparencia\pasos_morado.png"> Pasos a seguir</button>
        <button class="tablinks" onclick="openCity(event, 'Documento_a_obtener')"><img src="img\iconos_transparencia\documento_morado.png">   Documento a obtener</button>
        <button class="tablinks" onclick="openCity(event, 'Fundamento_Juridico')"><img src="img\iconos_transparencia\fundamento_morado.png">   Fundamento Jurídico</button>
        <button class="tablinks" onclick="openCity(event, 'Preguntas_frecuentes')"><img src="img\iconos_transparencia\preguntas_morado.png">Preguntas Frecuentes</button>
    </div>

    <div id="Informacion_General" class="tabcontent text-center">
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

    <div id="Tiempo_de_Respuesta" class="tabcontent text-center">
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

    <div id="Pasos_a_seguir" class="tabcontent text-center">
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

    <div id="Documento_a_obtener" class="tabcontent text-center">
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

    <div id="Preguntas_frecuentes" class="tabcontent text-center">
        <h2>Preguntas frecuentes</h2></center>
        <table>
            <tr>
                <td>1. Imprimí mi Informe de No Antecedentes Penales y me aparece que tengo un posible homónimo ¿Qué tengo que hacer?</td>
                <th>1.- Debe agendar una cita al teléfono 01 (722) 213-2497 en un horario de Lunes a Viernes de 9:00 a 13:00 horas. <br>
                    2.- El día y a la hora de su cita elegida por usted, debe presentarse personalmente en las oficinas del Instituto de Servicios Periciales de la Procuraduría General de Justicia del Estado de México, ubicadas en Av. Morelos Ote. 1300 entre Jaime Nuno, Col. San Sebastián, Toluca con los siguientes documentos:
                    1.-Informe de No Antecedentes en (original y copia)<br>
                    2.- Identificación oficial que utilizo para su registro (original y copia)
                </th>
            </tr>
            <tr>
                <td>2. ¿Por qué me aparece error en la fecha de nacimiento?</td>
                <th>Debe ingresar sus datos como le pide el sistema por ejemplo: 12/09/1985, es decir (día/mes/año) agregando diagonales como separación.</th>
            </tr>
        </table>
    </div>

    <div id="Fundamento_Juridico" class="tabcontent text-center">
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

    <div class="mx-auto" style="width: 200px;">
        <a href=><img src="img\iconos_transparencia\mas_info.jpg"
        alt="descargar pdf"></a>
    </div>
</body>

@stop

@section('scripts')

<script src="{{ asset('js/Trasnparencia/trasnparencia.js')}}"></script>

@endsection
