<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\mtramiteomodelo; //modelo tramotes o servicio
use App\mtregistro; //modelo de registros

class AdminRetys extends Controller
{

   public function test()
   {
       $data=DB::select('select * from TBGEM_CICOSTOS WHERE rownum <= 10');

      return $data;
   }

    public function index()
   {
       $data=DB::select('SELECT * FROM TBGEM_CICOSTOS WHERE rownum <= 3');

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

    $data= DB::select('SELECT distinct t.idtramite, t.denominacion,
                        t.COSTO_TRAM,t.COSTO_CANTIDAD,t.preges_url,
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

    //eturn $data;

    return view ('VistasRetys.AreasGob.areasGobDeatalle',['data' => $data,'count' =>$count]);
   }

   public function municipios()
   {
        $data = DB::table('tbgem_citramite')->select('AMBITO_MUN_CLAVE','Tbgem_cimunicipios.MUN_DESCRIPCION','tbgem_cimunlogos.RUTA')
        ->distinct()
        ->leftJoin('Tbgem_cimunicipios', 'tbgem_citramite.AMBITO_MUN_CLAVE', '=', 'Tbgem_cimunicipios.MUN_CLAVE')
        ->leftJoin('tbgem_cimunlogos', 'tbgem_citramite.AMBITO_MUN_CLAVE','=', 'tbgem_cimunlogos.MUN_CLAVE')
        ->orderBy('Tbgem_cimunicipios.MUN_DESCRIPCION')
        ->get();

        //return $data;

        return view('VistasRetys.Municipios.minucipios',compact('data'));
   }

   public function municipioDetalle($clave)
   {
        $dataQuery = DB::table('tbgem_citramite')->select('idtramite','preges_url','COSTO_TRAM','TRAMOSERV','ENLINEA','Ambito','AMBITO_MUN_CLAVE','COSTO_TRAM','COSTO_CANTIDAD','Denominacion')
                        ->where([
                            ['AMBITO_MUN_CLAVE',$clave],
                            ['BAJA','0']
                            ])
                        ->orderBy('Denominacion')
                        ->get();

                       // return $dataQuery;
        $count = sizeof($dataQuery);

        return view('VistasRetys.Municipios.municipioDetalle',
        ['data' => $dataQuery,'count' =>$count]);
   }

   public function bpersonasgob(){

      return view('VistasRetys.vpersonas');
   }

   public function prueba()
   {

      return view('VistasRetys.prueba');
   }

   public function trasnparencia()
   {
       return view('Trasnparencia.transparencia');
   }

    public function bptema($id_tem)
   {

   $datatema = DB::table('tbgem_citram_clas')->select('idtramite')
                        ->where([
                            ['idclasificacion',$id_tem],
                            ])
                        ->get();

    $datatram = DB::table('tbgem_citramite')->select('idtramite','COSTO_TRAM','TRAMOSERV','ENLINEA','Ambito','AMBITO_MUN_CLAVE','COSTO_TRAM','COSTO_CANTIDAD','Denominacion','PRINFIN_URL','PREGES_URL','CHAT_URL','PRINFIN','PREGES','CHAT','PRESENCIAL','PRINFIN_SEITS','TIPOTRAM')

                        ->where([
                            ['BAJA','0']
                            ])
                        ->orderBy('Denominacion')
                        ->get();


                       // return $datatram;
        $count = sizeof($datatram);

        return view('VistasRetys.categoriatarjetas',
        ['datatem'=>$datatema,'datatram' => $datatram,'count' =>$count]);
   }


   public function bppersona($id_per)
   {

   $datapersona = DB::table('tbgem_citram_perfil')->select('idtramite')
                        ->where([
                            ['id_perfil',$id_per],
                            ])
                        ->get();
    $datatram = DB::table('tbgem_citramite')->select('idtramite','COSTO_TRAM','TRAMOSERV','ENLINEA','Ambito','AMBITO_MUN_CLAVE','COSTO_TRAM','COSTO_CANTIDAD','Denominacion')
                        ->where([
                            ['BAJA','0']
                            ])
                        ->orderBy('Denominacion')
                        ->get();


                       // return $datatram;
        $count = sizeof($datatram);

        return view('VistasRetys.personatarjeta',
        ['dataper'=>$datapersona,'datatram' => $datatram,'count' =>$count]);
   }


}
