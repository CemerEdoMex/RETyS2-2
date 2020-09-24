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
    ->get();

    $data = DB::table('Tbgem_citramite')
    //->select('COSTO_TRAM','TRAMOSERV,ENLINEA,Ambito','AMBITO_MUN_CLAVE','COSTO_TRAM','COSTO_CANTIDAD','Denominacion')
    ->whereRaw("Denominacion like '%{$buscar}%'")
    ->paginate(6);

    $count2 = sizeof($data);

    return view('VistasRetys.vtarjetas',
                ['data' => $data,'count2' => $count2,'count' =>$count]);

   }

   public function category(){



        return view('VistasRetys.categorias');

   }

   public function bareasgob(){

      return view('VistasRetys.vagobierno');

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


}
