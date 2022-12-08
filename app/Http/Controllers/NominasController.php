<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nominas;

class NominasController extends Controller
{
    public function index()
    {
        $nominas = Nominas::all();
        $array = array(
            'status'=>200,
            'msj'=>'consulta exitosa'
        );
        return [
            'data'=>$nominas,
            'response'=>$array

        ];
    }

    public function getSelect()
    {
        $nominas = Nominas::select('id','cedula_empleado','fecha_inicio','fecha_fin')->get();
        return ['data'=>$nominas];
    }

    public function store(Request $request)
    {
        $nomina = new Nominas;

        $nomina->cedula_empleado = $request->cedula_empleado;
	    $nomina->fecha_inicio = $request->fecha_inicio;
	    $nomina->fecha_fin = $request->fecha_fin;


        $nomina->save();
    }

    public function update(Request $request)
    {
        $nomina = Nominas::find($request->id);

        $nomina->cedula_empleado = $request->cedula_empleado;
	    $nomina->fecha_inicio = $request->fecha_inicio;
	    $nomina->fecha_fin = $request->fecha_fin;


        $nomina->save();

    }

    public function delete(Request $request)
    {
        $nomina = Nominas::find($request->id);
        $nomina->delete();
    }
}
