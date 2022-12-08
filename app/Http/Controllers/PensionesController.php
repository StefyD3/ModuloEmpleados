<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pensiones;

class PensionesController extends Controller
{
    public function index()
    {
        $pensiones = Pensiones::all();
        $array = array(
            'status'=>200,
            'msj'=>'consulta exitosa'
        );
        return [
            'data'=>$pensiones,
            'response'=>$array

        ];
    }

    public function getSelect()
    {
        $pensiones = Pensiones::select('id','razon_social','nit','direccion','telefono','fecha_afiliacion')->get();
        return ['data'=>$pensiones];
    }

    public function store(Request $request)
    {
        $pension = new Pensiones;

        $pension->nit = $request->nit;
	$pension->razon_social = $request->razon_social;
	$pension->direccion = $request->direccion;
	$pension->telefono = $request->telefono;
	$pension->fecha_afiliacion = $request->fecha_afiliacion;



        $pension->save();
    }

    public function update(Request $request)
    {
        $pension = Pensiones::find($request->id);

        $pension->nit = $request->nit;
	$pension->razon_social = $request->razon_social;
	$pension->direccion = $request->direccion;
	$pension->telefono = $request->telefono;
	$pension->fecha_afiliacion = $request->fecha_afiliacion;

        $pension->save();
    }

    public function delete(Request $request)
    {
        $pension = Pensiones::find($request->id);
        $pension->delete();
    }

}
