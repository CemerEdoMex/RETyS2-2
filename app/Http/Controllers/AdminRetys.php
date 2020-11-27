<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
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
      // $data=DB::select('SELECT * FROM TBGEM_CICOSTOS WHERE rownum <= 3');

       //return $data;

        return view('VistasRetys.index');
   }

   public function btarjetas(Request $request)
   {

        $buscar=$request->get('buscar');

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


        $dataQuery2 = DB::select("SELECT s.idsujeto, s.Sujetoobligado,s.ambito,s.AMBITO_MUN_CLAVE,s.AMBITO,s.ORDEN,s.XSECRETARIA,s.ttotales,s.imagen,
        ambito.descripcion,s.URL
        from Tbgem_cisujetoobligado s
        left outer  join GRL_ELEMENTOS ambito on s.ambito =  ambito.idelemento
        left outer join GRL_ELEMENTOS poder on s.poder = poder.idelemento
        where Nivo=0 and AMBITO_MUN_CLAVE=0 and AMBITO=3
        and IDINTEGRADOR = 172 and IDSUJETOPODER=419 and INTEGRADOR=8 and ESPODER=8 and IDCVEUA <> '200000000' and s.ttotales >0
        order by orden");

        //return $dataQuery2;

        return view('VistasRetys.AreasGob.areasgob',compact('dataQuery2'));

   }

   public function areasGobDetalle($idsujeto) {

    if($idsujeto == 1)
    {
        $data= DB::select('SELECT distinct t.idtramite, t.denominacion,
        t.COSTO_TRAM,t.COSTO_CANTIDAD,t.preges_url,t.TIPOTRAM,t.PRINFIN_URL,t.CHAT_URL,
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

        $data= DB::select('SELECT distinct t.idtramite, t.denominacion,
        t.COSTO_TRAM,t.COSTO_CANTIDAD,t.preges_url,t.TIPOTRAM,t.PRINFIN_URL,t.CHAT_URL,
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
   }

   public function municipios()
   {
        $data = DB::table('tbgem_citramite')->select('AMBITO_MUN_CLAVE','Tbgem_cimunicipios.MUN_DESCRIPCION','tbgem_cimunlogos.RUTA')
        ->distinct()
        ->leftJoin('Tbgem_cimunicipios', 'tbgem_citramite.AMBITO_MUN_CLAVE', '=', 'Tbgem_cimunicipios.MUN_CLAVE')
        ->leftJoin('tbgem_cimunlogos', 'tbgem_citramite.AMBITO_MUN_CLAVE','=', 'tbgem_cimunlogos.MUN_CLAVE')
        ->orderBy('Tbgem_cimunicipios.MUN_DESCRIPCION')
        ->get(); 

       /* $data = DB::table('tbgem_citramite')->select('AMBITO_MUN_CLAVE','Tbgem_cimunicipios.MUN_DESCRIPCION')
        ->distinct()
        ->leftJoin('Tbgem_cimunicipios', 'tbgem_citramite.AMBITO_MUN_CLAVE', '=', 'Tbgem_cimunicipios.MUN_CLAVE')
        ->orderBy('Tbgem_cimunicipios.MUN_DESCRIPCION')
        ->get(); */

        //return $data;

        return view('VistasRetys.Municipios.minucipios',compact('data'));
   }

   public function municipioDetalle($clave)
   {
        $dataQuery = DB::table('tbgem_citramite')
        //->select('idtramite','preges_url','COSTO_TRAM','TRAMOSERV','ENLINEA','Ambito','AMBITO_MUN_CLAVE','COSTO_TRAM','COSTO_CANTIDAD','Denominacion')
                        ->where([
                            ['AMBITO_MUN_CLAVE',$clave],
                            ['BAJA','0']
                            ])
                        ->orderBy('Denominacion')
                        ->paginate(9);

                       // return $dataQuery;
        $count = sizeof($dataQuery);

        return view('VistasRetys.Municipios.municipioDetalle',
        ['data' => $dataQuery,'count' =>$count]);
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

 /*  $datatema = DB::table('tbgem_citram_clas')->select('idtramite')
                        ->where([
                            ['idclasificacion',$id_tem],
                            ])
                        ->get();

    $datatram = DB::table('tbgem_citramite')->select('idtramite','COSTO_TRAM','TRAMOSERV','ENLINEA','Ambito','AMBITO_MUN_CLAVE','COSTO_TRAM','COSTO_CANTIDAD','Denominacion','PRINFIN_URL','PREGES_URL','CHAT_URL','PRINFIN','PREGES','CHAT','PRESENCIAL','PRINFIN_SEITS','TIPOTRAM','PREGES_SEITS')

                        ->where([
                            ['BAJA','0']
                            ])
                        ->orderBy('Denominacion')
                        ->get

                        ();*/
     $id_tem2="'$id_tem'";


    $datatram2=DB::select('SELECT distinct t.idtramite,t.COSTO_TRAM,t.TRAMOSERV,t.ENLINEA,t.Ambito,t.AMBITO_MUN_CLAVE,t.COSTO_TRAM,t.COSTO_CANTIDAD,t.Denominacion,t.PRINFIN_URL,t.PREGES_URL,t.CHAT_URL,t.PRINFIN,t.PREGES,t.CHAT,t.PRESENCIAL,t.PRINFIN_SEITS,t.TIPOTRAM,t.PREGES_SEITS
      FROM tbgem_citramite t
      INNER JOIN TBGEM_CITRAM_CLAS TT ON TT.IDTRAMITE = t.IDTRAMITE
      INNER JOIN TBGEM_PORTEMA TM ON TM.IDCLASIFICACION = TT.IDCLASIFICACION
      WHERE t.BAJA = 0
      AND TM.IDCLASIFICACION='.$id_tem2.'
      order by t.denominacion');

   /*$datatram=t_tema::Tema($request->get('id_tem')):
     $datatram=t_tramites::all()
     ->where([['BAJA','0']])
     ->orderBy('denominacion');*/
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
      WHERE t.BAJA = 0
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

  /* $datapersona = DB::table('tbgem_citram_perfil')->select('idtramite')
                        ->where([
                            ['id_perfil',$id_per],
                            ])
                        ->get();
    $datatram = DB::table('tbgem_citramite')->select('idtramite','COSTO_TRAM','TRAMOSERV','ENLINEA','Ambito','AMBITO_MUN_CLAVE','COSTO_TRAM','COSTO_CANTIDAD','Denominacion','PRINFIN_URL','PREGES_URL','CHAT_URL','PRINFIN','PREGES','CHAT','PRESENCIAL','PRINFIN_SEITS','TIPOTRAM','PREGES_SEITS')
                        ->where([
                            ['BAJA','0']
                            ])
                        ->orderBy('Denominacion')
                        ->get();*/
     $datatram2=DB::select('SELECT distinct t.idtramite,t.COSTO_TRAM,t.TRAMOSERV,t.ENLINEA,t.Ambito,t.AMBITO_MUN_CLAVE,t.COSTO_TRAM,t.COSTO_CANTIDAD,t.Denominacion,t.PRINFIN_URL,t.PREGES_URL,t.CHAT_URL,t.PRINFIN,t.PREGES,t.CHAT,t.PRESENCIAL,t.PRINFIN_SEITS,t.TIPOTRAM,t.PREGES_SEITS
      FROM TBGEM_CITRAMITE t
      INNER JOIN TBGEM_CITRAM_PERFIL TT ON TT.IDTRAMITE = t.IDTRAMITE
      INNER JOIN TBGEM_CIPERFIL TM ON TM.ID_PERFIL = TT.ID_PERFIL
      WHERE t.BAJA = 0
      AND TM.ID_PERFIL='.$id_per.'order by t.denominacion');




                       // return $datatram;
        $count = sizeof($datatram2);
        $nper =($nperson);
        $tram_x_pag=9;
        $paginas =$count/9;
        $paginas=ceil($paginas);
        $id_persona=($id_per);
        $pagina=($pagina);
        $inicia=($pagina-1)*$tram_x_pag;


          $datatram=DB::select('SELECT distinct t.idtramite,t.COSTO_TRAM,t.TRAMOSERV,t.ENLINEA,t.Ambito,t.AMBITO_MUN_CLAVE,t.COSTO_TRAM,t.COSTO_CANTIDAD,t.Denominacion,t.PRINFIN_URL,t.PREGES_URL,t.CHAT_URL,t.PRINFIN,t.PREGES,t.CHAT,t.PRESENCIAL,t.PRINFIN_SEITS,t.TIPOTRAM,t.PREGES_SEITS
      FROM TBGEM_CITRAMITE t
      INNER JOIN TBGEM_CITRAM_PERFIL TT ON TT.IDTRAMITE = t.IDTRAMITE
      INNER JOIN TBGEM_CIPERFIL TM ON TM.ID_PERFIL = TT.ID_PERFIL
      WHERE t.BAJA = 0
      AND TM.ID_PERFIL='.$id_per.'order by t.denominacion
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



}
