<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Salud;

class SaludController extends Controller
{
    public function index()
    {
        $salud = Salud::all();
        $array = array(
            'status'=>200,
            'msj'=>'consulta exitosa'
        );
        return [
            'data'=>$salud,
            'response'=>$array

        ];
    }

    public function getSelect()
    {
        $salud = Salud::select('id','razon_social','nit','direccion','telefono','fecha_afiliacion')->get();
        return ['data'=>$salud];
    }

    public function store(Request $request)
    {
        $salud = new Salud;

        $salud ->nit = $request->nit;
	    $salud ->razon_social = $request->razon_social;
	    $salud ->direccion = $request->direccion;
	    $salud ->telefono = $request->telefono;
	    $salud ->fecha_afiliacion = $request->fecha_afiliacion;



        $salud->save();
    }

    public function update(Request $request)
    {
        $salud = salud::find($request->id);

        $salud ->nit = $request->nit;
	    $salud ->razon_social = $request->razon_social;
	    $salud ->direccion = $request->direccion;
	    $salud ->telefono = $request->telefono;
	    $salud ->fecha_afiliacion = $request->fecha_afiliacion;

        $salud->save();
    }

    public function delete(Request $request)
    {
        $salud = Salud::find($request->id);
        $salud->delete();
    }
}
