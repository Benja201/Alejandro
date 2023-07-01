<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Model\Propuesta;

class PropuestaController extends Controller
{
    public function Insertar(Request $request){
        $propuesta = new Propuesta();
        $propuesta->id = $request->get();
        $propuesta->fecha = $request->get();
        $propuesta->documento = $request->get();
        $propuesta->estado = $request->get();
        if($request->hasFile('archivo_pdf')){
            $archivo->$request;
            
        }
    
        $propuesta->save();

    }
}
