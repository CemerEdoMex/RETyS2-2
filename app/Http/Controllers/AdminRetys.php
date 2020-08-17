<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;	
use App\mtramiteomodelo; //modelo tramotes o servicio
use App\mtregistro; //modelo de registros

class AdminRetys extends Controller
{
    
    public function index(){ 
    return view('VistasRetys.index');
 }

 public function btarjetas(Request $request){
 	
 	$buscar=$request->get('buscar');
 	$terg=mtramiteomodelo::all();
 	//echo $terg;
 	

 	return view('VistasRetys.vtarjetas')
 	->with(['terg'=>$terg]);
 	

   
 }

     public function bareasgob(){ 
    return view('VistasRetys.vagobierno');
 }

   public function bpersonasgob(){ 
    return view('VistasRetys.vpersonas');
 }

}
