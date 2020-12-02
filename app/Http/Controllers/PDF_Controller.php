<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PDF_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $idtramserv = 352;

        $varidcveua = 12;

        $queryUno = "SELECT IDTRAMITE,IDCVEUA,DENOMINACION,DESCRIPCION,FLEGAL,DOCOBTENER,NOMBRE_CORTO,ENLINEA,AMBITO,PRESENCIAL,TRESP_MIN,TRESP_HOR,TRESP_DIA,TRESP_ANIO,TRESP_MES
                    from tbgem_citramite where idtramite = '".$idtramserv."'"; // Informacion general del tramite

        $queryDos = "SELECT DEPENDENCIA,DIR_GRAL,UNIDADADM,TITULAR,CORREOE,CALLE,NOEXTINT,COLONIA,CP,LADA1,LADA2,LADA3,TELEFONO1,TELEFONO2,TELEFONO3,EXT,FAX
                    from tbgem_ciunidadesadm where IDCVEUA = '".$varidcveua."'"; // Unidad Administrativa

        $queryTres = "SELECT RENGLON, COLUMNA, COSTO, ENCABEZADO, DEFINICION from TBGEM_CICOSTOS where idtramite = '".$idtramserv."' order by renglon, columna"; //Costos

        $queryCuatro = "SELECT IDPASOS,PASO,IDTRAMITE from tbgem_pasos where IDTRAMITE = '".$idtramserv."' order by IDTRAMITE, IDPASOS"; // Pasos a seguir

        $queryCinco = "SELECT PREGUNTA, RESPUESTA from tbgem_ciotros where IDTRAMITE = '".$idtramserv."' order by NUM, CONSE"; // Preguntas y respuestas

        $data = [
            'titulo' => 'Expedición del informe o certificado de no antecedentes penales'
        ];

        $pdf = app('dompdf.wrapper');

        //$pdf->loadView('PDFViews.ficha');

        $pdf = \PDF::loadView('PDFViews.ficha', compact('data'));

        return $pdf->stream('mi-archivo.pdf');

        //return view('PDFViews.ficha',compact('data'));
    }

    public function downloadPDF()
    {
        /*$data = [
            'titulo' => 'retys.edomex'
        ];*/

        $data = DB::table('tbgem_citramite')->select('AMBITO_MUN_CLAVE','Tbgem_cimunicipios.MUN_DESCRIPCION','tbgem_cimunlogos.RUTA')
        ->distinct()
        ->leftJoin('Tbgem_cimunicipios', 'tbgem_citramite.AMBITO_MUN_CLAVE', '=', 'Tbgem_cimunicipios.MUN_CLAVE')
        ->leftJoin('tbgem_cimunlogos', 'tbgem_citramite.AMBITO_MUN_CLAVE','=', 'tbgem_cimunlogos.MUN_CLAVE')
        ->orderBy('Tbgem_cimunicipios.MUN_DESCRIPCION')
        ->get();


        $pdf = \PDF::loadView('VistasRetys.Municipios.minucipios',compact('data'));

        //$pdf = \PDF::loadView('Trasnparencia.transparencia', $data);

        return $pdf->download('municipios.pdf');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
