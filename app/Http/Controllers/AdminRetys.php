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
       $data=DB::select('select * from TBGEM_CICOSTOS WHERE rownum <= 10');

        return view('VistasRetys.index');
   }

   public function btarjetas(Request $request){

        $buscar=$request->get('buscar');


        $terg=DB::select("Select Denominacion,key1,key2,key3,key4,key5
        from Tbgem_citramite
        where Denominacion like '%{$buscar}%'");

       //return $terg;



 	   return view('VistasRetys.vtarjetas')
 	            ->with(['terg'=>$terg]);

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
