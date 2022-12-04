<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cargos;

class CargosController extends Controller
{
    //
    public function index()
    {                      
       $cargos = Cargos::all();
       $array=array(
        'status'=>200,
        'msj'=>'consulta exitosa'
       );
       return [
        'data'=>$cargos,
        'response'=>$array
       ];
    }
    public function getSelect()
    {                      
        $cargos = Cargos::select('id','nombre')->get();   
        return ['data'=>$cargos];
    }
    public function store(Request $request)
    {
        // Validate the request...
                        
        $cargo = new Cargos;
 
        $cargo->nombre = $request->nombre;
        $cargo->descripcion = $request->desc;   
 
        $cargo->save();

        return[
            'msj'=>'se guardo correctamente'
        ];
    }

    public function update(Request $request)
    {
        // Validate the request...
                        
        $cargo = Cargos::find($request->id);
 
        $cargo->nombre = $request->nombre;
        $cargo->descripcion = $request->desc;
 
        $cargo->save();
    }
    public function destroy(Request $request)
    {                      
        $cargo = Cargos::find($request->id);
        $cargo->delete();
    }


}
