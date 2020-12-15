<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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
    public function create($idtramserv)
    {
       # $idtramserv = 352;
       if(!is_numeric($idtramserv))
       {
        echo'<script type="text/javascript">
        alert("No se encontro la informacion");
        location.href="http://retys.edomex.gob.mx/";
        </script>';
       }


        $queryUno = DB::table('tbgem_citramite')
                    ->select('tbgem_citramite.IDTRAMITE','tbgem_citramite.IDCVEUA','tbgem_citramite.DENOMINACION','tbgem_citramite.DESCRIPCION','tbgem_citramite.FLEGAL','tbgem_citramite.DOCOBTENER','tbgem_citramite.NOMBRE_CORTO','tbgem_citramite.ENLINEA','tbgem_citramite.AMBITO','tbgem_citramite.PRESENCIAL','tbgem_citramite.TRESP_MIN','tbgem_citramite.TRESP_HOR',
                                'tbgem_citramite.TRESP_DIA','tbgem_citramite.TRESP_ANIO','tbgem_citramite.TRESP_MES',
                                'tbgem_ciunidadesadm.DEPENDENCIA','tbgem_ciunidadesadm.DIR_GRAL','tbgem_ciunidadesadm.UNIDADADM','tbgem_ciunidadesadm.TITULAR','tbgem_ciunidadesadm.CORREOE','tbgem_ciunidadesadm.CALLE','tbgem_ciunidadesadm.NOEXTINT','tbgem_ciunidadesadm.COLONIA','tbgem_ciunidadesadm.CP','tbgem_ciunidadesadm.LADA1','tbgem_ciunidadesadm.LADA2',
                                'tbgem_ciunidadesadm.LADA3','tbgem_ciunidadesadm.TELEFONO1','tbgem_ciunidadesadm.TELEFONO2','tbgem_ciunidadesadm.TELEFONO3','tbgem_ciunidadesadm.EXT','tbgem_ciunidadesadm.FAX')
                    ->leftJoin('tbgem_ciunidadesadm','tbgem_citramite.IDCVEUA','tbgem_ciunidadesadm.IDCVEUA')
                    ->where('tbgem_citramite.idtramite',$idtramserv)
                    ->get();// Informacion general del tramite



        $queryReq = DB::table('tbgem_cireq_tram')
                    ->select('IDTRAMITE','TIPO','ORIGINAL','COPIA','DESCRIPCION','ORDEN','FUNDAMENTOS')
                    ->where('IDTRAMITE',$idtramserv)
                    ->orderBy('TIPO','asc')
                    ->orderBy('ORDEN','asc')
                    ->get(); // requisitos dle trmite

        //$queryDos = "SELECT DEPENDENCIA,DIR_GRAL,UNIDADADM,TITULAR,CORREOE,CALLE,NOEXTINT,COLONIA,CP,LADA1,LADA2,LADA3,TELEFONO1,TELEFONO2,TELEFONO3,EXT,FAX
                    //from tbgem_ciunidadesadm where IDCVEUA = '".$varidcveua."'"; // Unidad Administrativa

        $queryCostos = DB::table('TBGEM_CICOSTOS')
                       ->SELECT('RENGLON', 'COLUMNA', 'COSTO', 'ENCABEZADO', 'DEFINICION')
                       ->where('idtramite',$idtramserv)
                       ->orderBy('renglon','asc')
                       ->orderBy('columna','asc')
                       ->get(); //Costos

        //$queryPasos = "SELECT IDPASOS,PASO,IDTRAMITE from tbgem_pasos where IDTRAMITE = '".$idtramserv."' order by IDTRAMITE, IDPASOS"; // Pasos a seguir

        $queryPasos = DB::table('tbgem_pasos')
                        ->select('IDPASOS','PASO','IDTRAMITE')
                        ->where('IDTRAMITE',$idtramserv)
                        ->orderBy('IDPASOS')
                        ->get();

        //dd($queryPasos);

        $data = [
            'titulo' => 'Expedición del informe o certificado de no antecedentes penales'
        ];

        $pdf = app('dompdf.wrapper');

        //$pdf->loadView('PDFViews.ficha');

        $pdf = \PDF::loadView('PDFViews.ficha', compact('data','queryUno','queryReq','queryCostos'));

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
