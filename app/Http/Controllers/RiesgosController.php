<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Riesgos;

class RiesgosController extends Controller
{
    public function index()
    {
        $riesgos = Riesgos::all();
        $array = array(
            'status'=>200,
            'msj'=>'consulta exitosa'
        );
        return [
            'data'=>$riesgos,
            'response'=>$array

        ];
    }

    public function getSelect()
    {
        $riesgos = Riesgos::select('id','razon_social','nit','direccion','telefono','tipo_riesgo','fecha_afiliacion')->get();
        return ['data'=>$riesgos];
    }

    public function store(Request $request)
    {
        $riesgo = new Riesgos;

        $riesgo ->nit = $request->nit;
	    $riesgo ->razon_social = $request->razon_social;
	    $riesgo ->direccion = $request->direccion;
	    $riesgo ->telefono = $request->telefono;
	    $riesgo ->tipo_riesgo = $request->tipo_riesgo;
	    $riesgo ->fecha_afiliacion = $request->fecha_afiliacion;



        $riesgo->save();
    }

    public function update(Request $request)
    {
        $riesgo = Riesgos::find($request->id);

        $riesgo ->nit = $request->nit;
	    $riesgo ->razon_social = $request->razon_social;
	    $riesgo ->direccion = $request->direccion;
	    $riesgo ->telefono = $request->telefono;
	    $riesgo ->tipo_riesgo = $request->tipo_riesgo;
	    $riesgo ->fecha_afiliacion = $request->fecha_afiliacion;

        $riesgo->save();
    }

    public function delete(Request $request)
    {
        $riesgo = Riesgos::find($request->id);
        $riesgo->delete();
    }
}
