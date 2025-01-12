<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use DB;
use PDF;
use App\mtramiteomodelo; //modelo tramotes o servicio
use App\mtregistro; //modelo de registros
use App\t_tema; //modelo de temas
use App\t_tramites; //modelo de tramites

class AdminRetys extends Controller
{

   public function test()
   {
       $data=DB::select('select * from TBGEM_CICOSTOS WHERE rownum <= 10');

      return $data;
   }

    public function index()
   {


        return view('VistasRetys.index');
   }

   public function btarjetas(Request $request)
   {

        $buscar=$request->input('buscar');
        try {
            $count = DB::table('Tbgem_citramite')
            ->select(DB::raw('count(*) as total'))
            ->whereRaw("Denominacion like '%{$buscar}%'")
            ->where("Baja",0)
            ->get();

            $data = DB::table('Tbgem_citramite')
            //->select('COSTO_TRAM','TRAMOSERV','ENLINEA','Ambito','AMBITO_MUN_CLAVE','COSTO_TRAM','COSTO_CANTIDAD','Denominacion')
            ->whereRaw("Denominacion like '%{$buscar}%'")
            ->where("Baja",0)
            ->orderBy('Denominacion')
            ->paginate(9);


            $count2 = sizeof($data);

            //return $data;

            return view('VistasRetys.vtarjetas',
                        ['data' => $data,'count2' => $count2,'count' =>$count]);
        }catch(\Illuminate\Database\QueryException $ex){

            return view('404');
        //dd($ex->getMessage());
        // Note any method of class PDOException can be called on $ex.
      }


   }

   public function category(){



        return view('VistasRetys.categorias');

   }

   public function areasGob(){


        $dataQuery=DB::table('Tbgem_cisujetoobligado')->select('IDCVEUA','Sujetoobligado','AMBITO_MUN_CLAVE','AMBITO','ORDEN','XSECRETARIA','URL')
                        ->where([
                            ['Nivo',0],
                            ['AMBITO_MUN_CLAVE',0],
                            ['AMBITO',3],
                            ['IDINTEGRADOR',172],
                            ['IDSUJETOPODER',419],
                            ['INTEGRADOR',8],
                            ['ESPODER',8]
                        ])
                        ->whereNotIn('IDCVEUA', ['200000000'])
                        ->orderBy('orden')
                        ->get();
        //return $dataQuery;


        $dataQuery2 = DB::select(" SELECT s.idsujeto, s.Sujetoobligado,s.ambito,s.AMBITO_MUN_CLAVE,s.AMBITO,s.ORDEN,s.XSECRETARIA,s.ttotales,tbgem_ciareasgoblogo.RUTA,s.imagen,
        ambito.descripcion,s.URL
        from Tbgem_cisujetoobligado s
        left outer  join GRL_ELEMENTOS ambito on s.ambito =  ambito.idelemento
        left outer join GRL_ELEMENTOS poder on s.poder = poder.idelemento
        left join tbgem_ciareasgoblogo on s.idsujeto =  tbgem_ciareasgoblogo.NUM_CLAVE
        where Nivo=0 and AMBITO_MUN_CLAVE=0 and AMBITO=3
        and IDINTEGRADOR = 172 and IDSUJETOPODER=419 and INTEGRADOR=8 and ESPODER=8 and IDCVEUA <> '200000000' and s.ttotales >0
        order by orden");

        //dd($dataQuery2);

        $totaltram=0;

        for ($i=0; $i < sizeof($dataQuery2); $i++) {
            # code...
            $totaltram+=$dataQuery2[$i]->ttotales;
        }

        return view('VistasRetys.AreasGob.areasgob',compact('dataQuery2','totaltram'));

   }

   public function areasGobDetalle($idsujeto) {

        try {
            if($idsujeto == 1)
            {
                $data= DB::select('SELECT distinct t.idtramite, t.denominacion,s.XSECRETARIA,
                t.COSTO_TRAM,t.COSTO_CANTIDAD,t.preges_url,t.TIPOTRAM,t.PRINFIN_URL,t.CHAT_URL,s.sujetoobligado,
                t.enlinea, t.tramoserv, t.prinfin, t.preges, t.chat, t.presencial, t.telefonica, t.prinfin_seits, t.preges_seits, t.ambito, e.descripcion as ambitoDesc,
                t.ambito_mun_clave, m.mun_descripcion, t.poder, poder.descripcion as poder_desc
                FROM tbgem_CITramite t
                INNER JOIN grl_elementos e on t.ambito = e.idelemento
                INNER JOIN tbgem_cimunicipios m on t.ambito_mun_clave = m.mun_clave
                INNER JOIN tbgem_citram_perfil tramperf on t.idtramite =tramperf.idtramite
                INNER JOIN tbgem_ciunidadesadm u on t.idcveua = u.idcveua
                INNER JOIN tbgem_cisujetoobligado s on u.idsujeto = s.idsujeto
                INNER JOIN tbgem_ciunidadesadm u on t.idcveua = u.idcveua
                LEFT OUTER JOIN grl_elementos poder on t.poder = poder.idelemento
                where t.Baja=0
                and s.idsujeto in (1,2)
                order by t.denominacion');

                $count = sizeof($data);


                //return $count;

                return view ('VistasRetys.AreasGob.areasGobDeatalle',['data' => $data,'count' =>$count]);
            } else {

                $data= DB::select('SELECT distinct t.idtramite, t.denominacion,s.XSECRETARIA,
                t.COSTO_TRAM,t.COSTO_CANTIDAD,t.preges_url,t.TIPOTRAM,t.PRINFIN_URL,t.CHAT_URL,s.sujetoobligado,
                t.enlinea, t.tramoserv, t.prinfin, t.preges, t.chat, t.presencial, t.telefonica, t.prinfin_seits, t.preges_seits, t.ambito, e.descripcion as ambitoDesc,
                t.ambito_mun_clave, m.mun_descripcion, t.poder, poder.descripcion as poder_desc
                FROM tbgem_CITramite t
                INNER JOIN grl_elementos e on t.ambito = e.idelemento
                INNER JOIN tbgem_cimunicipios m on t.ambito_mun_clave = m.mun_clave
                INNER JOIN tbgem_citram_perfil tramperf on t.idtramite =tramperf.idtramite
                INNER JOIN tbgem_ciunidadesadm u on t.idcveua = u.idcveua
                INNER JOIN tbgem_cisujetoobligado s on u.idsujeto = s.idsujeto
                INNER JOIN tbgem_ciunidadesadm u on t.idcveua = u.idcveua
                LEFT OUTER JOIN grl_elementos poder on t.poder = poder.idelemento
                where t.Baja=0
                and s.idsujeto ='.$idsujeto.'
                order by t.denominacion');

                $count = sizeof($data);


                //return $count;

                return view ('VistasRetys.AreasGob.areasGobDeatalle',['data' => $data,'count' =>$count]);

            }
        } catch(\Illuminate\Database\QueryException $ex){

            return view('404');
        //dd($ex->getMessage());
        // Note any method of class PDOException can be called on $ex.
      }
   }

   public function municipios()
   {


        $data = DB::select('SELECT distinct(Tbgem_cimunicipios.mun_clave),Tbgem_cimunicipios.MUN_DESCRIPCION,tbgem_cimunlogos.ruta,count(Tbgem_cimunicipios.mun_clave) as total
        from tbgem_citramite
        left Join Tbgem_cimunicipios  on  tbgem_citramite.AMBITO_MUN_CLAVE = Tbgem_cimunicipios.MUN_CLAVE
        left join tbgem_cimunlogos on tbgem_citramite.AMBITO_MUN_CLAVE = tbgem_cimunlogos.MUN_CLAVE
        where tbgem_citramite.baja=0
        and tbgem_citramite.ambito = 4
        group by Tbgem_cimunicipios.mun_clave,Tbgem_cimunicipios.MUN_DESCRIPCION,tbgem_cimunlogos.ruta
        order by Tbgem_cimunicipios.MUN_DESCRIPCION');

        /*$data2 = DB::table('tbgem_citramite')->select('AMBITO_MUN_CLAVE','Tbgem_cimunicipios.MUN_DESCRIPCION','tbgem_cimunlogos.ruta',DB::raw('count(Tbgem_cimunicipios.mun_clave ) as totlal'))
        ->distinct()
        ->leftJoin('Tbgem_cimunicipios', 'tbgem_citramite.AMBITO_MUN_CLAVE', '=', 'Tbgem_cimunicipios.MUN_CLAVE')
        ->leftJoin('tbgem_cimunlogos', 'tbgem_citramite.AMBITO_MUN_CLAVE','=', 'tbgem_cimunlogos.MUN_CLAVE')
        ->where([
            ['tbgem_citramite.baja',0],
            ['tbgem_citramite.ambito',4]
        ])
        ->groupBy('Tbgem_cimunicipios.mun_clave','Tbgem_cimunicipios.MUN_DESCRIPCION','tbgem_cimunlogos.ruta')
        ->orderBy('Tbgem_cimunicipios.MUN_DESCRIPCION')
        ->get();*/


        $totaltram=0;

        for ($i=0; $i < sizeof($data); $i++) {
            # code...
            $totaltram+=$data[$i]->total;
        }


        //dd($totaltram);

        return view('VistasRetys.Municipios.minucipios',compact('data','totaltram'));
   }

   public function municipioDetalle($municipio,$clave)
   {
        $dataQuery = DB::table('tbgem_citramite')
        //->select('idtramite','preges_url','COSTO_TRAM','TRAMOSERV','ENLINEA','Ambito','AMBITO_MUN_CLAVE','COSTO_TRAM','COSTO_CANTIDAD','Denominacion')
                        ->where([
                            ['AMBITO_MUN_CLAVE',$clave],
                            ['BAJA','0']
                            ])
                        ->orderBy('Denominacion')
                        ->paginate(9);

                      //return ($dataQuery);
        $count = sizeof($dataQuery);

        return view('VistasRetys.Municipios.municipioDetalle',
        ['data' => $dataQuery,'count' =>$count,'municipio' =>$municipio]);
   }

   public function bpersonasgob(){

      return view('VistasRetys.vpersonas');
   }

   public function cedula(){

    return view('VistasRetys.Fichas.ficha');

    }



    public function trasnparencia()
   {
       return view('Trasnparencia.transparencia');
   }

   public function bptema($id_tem,$ncatego,$pagina=null)
    {


     $id_tem2="'$id_tem'";


    $datatram2=DB::select('SELECT distinct t.idtramite,t.COSTO_TRAM,t.TRAMOSERV,t.ENLINEA,t.Ambito,t.AMBITO_MUN_CLAVE,t.COSTO_TRAM,t.COSTO_CANTIDAD,t.Denominacion,t.PRINFIN_URL,t.PREGES_URL,t.CHAT_URL,t.PRINFIN,t.PREGES,t.CHAT,t.PRESENCIAL,t.PRINFIN_SEITS,t.TIPOTRAM,t.PREGES_SEITS
      FROM tbgem_citramite t
      INNER JOIN TBGEM_CITRAM_CLAS TT ON TT.IDTRAMITE = t.IDTRAMITE
      INNER JOIN TBGEM_PORTEMA TM ON TM.IDCLASIFICACION = TT.IDCLASIFICACION
      WHERE t.BAJA = 0 and t.ambito= 3
      AND TM.IDCLASIFICACION='.$id_tem2.'
      order by t.denominacion');


     $ncat=($ncatego);
     $id_tema=($id_tem);
     $pagina=($pagina);

                       // return $datatram;
        $count = sizeof($datatram2);
        $tram_x_pag=9;
        $paginas =$count/9;
        $paginas=ceil($paginas);
        $inicia=($pagina-1)*$tram_x_pag;

    $datatram=DB::select('SELECT distinct t.idtramite,t.COSTO_TRAM,t.TRAMOSERV,t.ENLINEA,t.Ambito,t.AMBITO_MUN_CLAVE,t.COSTO_TRAM,t.COSTO_CANTIDAD,t.Denominacion,t.PRINFIN_URL,t.PREGES_URL,t.CHAT_URL,t.PRINFIN,t.PREGES,t.CHAT,t.PRESENCIAL,t.PRINFIN_SEITS,t.TIPOTRAM,t.PREGES_SEITS
      FROM tbgem_citramite t
      INNER JOIN TBGEM_CITRAM_CLAS TT ON TT.IDTRAMITE = t.IDTRAMITE
      INNER JOIN TBGEM_PORTEMA TM ON TM.IDCLASIFICACION = TT.IDCLASIFICACION
      WHERE t.BAJA = 0 and t.ambito= 3
      AND TM.IDCLASIFICACION='.$id_tem2.'
      order by t.denominacion
      OFFSET '.$inicia.' ROWS FETCH FIRST '.$tram_x_pag.' ROW ONLY');

        return view('VistasRetys.categoriatarjetas')
        ->with(['pagina'=>$pagina])
        ->with(['id_tema'=>$id_tema])
        ->with(['datatram'=>$datatram])
        ->with(['count'=>$count])
        ->with(['ncat'=>$ncat])
        ->with(['paginas'=>$paginas]);
   }


   public function bppersona($id_per,$nperson,$pagina=null)
   {


    $id_persona=($id_per);

     $datatram2=DB::select('SELECT distinct t.IDTRAMITE,t.COSTO_TRAM,t.TRAMOSERV,t.ENLINEA,t.Ambito,t.AMBITO_MUN_CLAVE,t.COSTO_TRAM,t.COSTO_CANTIDAD,t.Denominacion,t.PRINFIN_URL,t.PREGES_URL,t.CHAT_URL,t.PRINFIN,t.PREGES,t.CHAT,t.PRESENCIAL,t.PRINFIN_SEITS,t.TIPOTRAM,t.PREGES_SEITS
      FROM TBGEM_CITRAMITE t
      INNER JOIN TBGEM_CITRAM_PERFIL TT ON TT.IDTRAMITE = t.IDTRAMITE
      INNER JOIN TBGEM_CIPERFIL TM ON TM.ID_PERFIL = TT.ID_PERFIL
      WHERE t.BAJA = 0 and t.ambito= 3
      AND TM.ID_PERFIL='.$id_persona.'
      order by t.denominacion');




                       // return $datatram;
        $count = sizeof($datatram2);
        $nper =($nperson);
        $tram_x_pag=9;
        $paginas =$count/9;
        $paginas=ceil($paginas);
        $id_persona=($id_per);
        $pagina=($pagina);
        $inicia=($pagina-1)*$tram_x_pag;


         $datatram=DB::select('SELECT distinct t.IDTRAMITE,t.COSTO_TRAM,t.TRAMOSERV,t.ENLINEA,t.Ambito,t.AMBITO_MUN_CLAVE,t.COSTO_TRAM,t.COSTO_CANTIDAD,t.Denominacion,t.PRINFIN_URL,t.PREGES_URL,t.CHAT_URL,t.PRINFIN,t.PREGES,t.CHAT,t.PRESENCIAL,t.PRINFIN_SEITS,t.TIPOTRAM,t.PREGES_SEITS
      FROM TBGEM_CITRAMITE t
      INNER JOIN TBGEM_CITRAM_PERFIL TT ON TT.IDTRAMITE = t.IDTRAMITE
      INNER JOIN TBGEM_CIPERFIL TM ON TM.ID_PERFIL = TT.ID_PERFIL
      WHERE t.BAJA = 0 and t.ambito= 3
      AND TM.ID_PERFIL='.$id_persona.'
      order by t.denominacion
      OFFSET '.$inicia.' ROWS FETCH FIRST '.$tram_x_pag.' ROW ONLY');



        return view('VistasRetys.personatarjeta')
        /*->with(['dataper'=>$datapersona])*/
        ->with(['id_persona'=>$id_persona])
        ->with(['datatram'=>$datatram])
        ->with(['count'=>$count])
        ->with(['nper'=>$nper])
        ->with(['paginas'=>$paginas])
        ->with(['pagina'=>&$pagina]);
   }

 public function benlinea()
 {
  $datalinea= DB::table('TBGEM_CITRAMITE')
  ->where([['BAJA','0'],['enlinea','1']])
  ->orderBy('Denominacion')
  ->paginate(9);


  return view('VistasRetys.enlineatarj',['datalinea'=>$datalinea]);

 }
 public function pdf_fichain(){



 }
 public function cedulainformacion($id_tram){

        $idtramserv=$id_tram;

        try {
            $tramitequery=DB::select('SELECT tr.IDTRAMITE,tr.IDCVEUA,tr.DENOMINACION,tr.DESCRIPCION,tr.FORMATO_TIPO,tr.FLEGAL,tr.DOCOBTENER,tr.NOMBRE_CORTO,tr.ENLINEA,tr.AMBITO,tr.PRESENCIAL,tr.TRESP_MIN,tr.TRESP_HOR,tr.TRESP_DIA,tr.TRESP_ANIO,tr.TRESP_MES,tr.COSTOGP,tr.COSTO_CANTIDAD,tr.COSTO_TRAM,uam.DEPENDENCIA,uam.DIR_GRAL,uam.UNIDADADM,uam.TITULAR,uam.CORREOE,uam.CALLE,uam.NOEXTINT,uam.COLONIA,uam.CP,uam.LADA1,uam.LADA2,uam.LADA3,uam.TELEFONO1,uam.TELEFONO2,uam.TELEFONO3,uam.EXT,uam.FAX
                                    FROM tbgem_citramite tr
                                    INNER JOIN tbgem_ciunidadesadm uam ON tr.IDCVEUA = uam.IDCVEUA
                                    WHERE tr.IDTRAMITE ='.$idtramserv.'');



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
              $queryform = DB::table('tbgem_ciadjuntos')
                              ->select('IDTRAMITE','IDADJUNTO','DESCRIPCION','ARCHIVO','IDFTIPO')
                              ->where('IDTRAMITE',$idtramserv)
                              ->orderBy('DESCRIPCION','asc')
                              ->get();


              $queryReq = DB::table('tbgem_cireq_tram')
                          ->select('IDTRAMITE','TIPO','ORIGINAL','COPIA','DESCRIPCION','ORDEN','FUNDAMENTOS','cantidadcop')
                          ->where('IDTRAMITE',$idtramserv)
                          ->orderBy('TIPO','asc')
                          ->orderBy('ORDEN','asc')
                          ->get();

              $count=sizeof( $queryPasos);

              for($i=0;$i<=$count;$i++){
                 $i=$i;
              }

              $querypre = DB::table('tbgem_CIOTROS')
                          ->select('IDTRAMITE','pregunta','respuesta','num')
                          ->where('IDTRAMITE',$idtramserv)
                          ->orderBy('num','asc')

                          ->get();

                    return view('fichasinfo.cedulainformacion')
                    ->with(['tramite'=>$tramitequery])
                    ->with(['costos'=>$queryCostos])
                    ->with(['formato'=>$queryform])
                    ->with(['pasos'=>$queryPasos])
                    ->with(['requisitos'=>$queryReq])
                    ->with(['count'=>$count])
                    ->with(['i'=>$i])
                    ->with(['preguntas'=>$querypre]);
              // Closures include ->first(), ->get(), ->pluck(), etc.

            } catch(\Illuminate\Database\QueryException $ex){

                return view('404');
            //dd($ex->getMessage());
            // Note any method of class PDOException can be called on $ex.
          }



            }


}
