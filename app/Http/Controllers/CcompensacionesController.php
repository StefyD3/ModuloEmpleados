<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ccompensaciones;

class CcompensacionesController extends Controller
{
    public function index()
    {
        $ccompensaciones = Ccompensaciones::all();
        $array = array(
            'status'=>200,
            'msj'=>'consulta exitosa'
        );
        return [
            'data'=>$ccompensaciones,
            'response'=>$array

        ];
    }

    public function getSelect()
    {
        $ccompensaciones = Ccompensaciones::select('id','razon_social','nit','direccion','telefono','fecha_afiliacion')->get();
        return ['data'=>$ccompensaciones];
    }

    public function store(Request $request)
    {
        $ccompensacion = new Ccompensaciones;

    $ccompensacion->nit = $request->nit;
	$ccompensacion->razon_social = $request->razon_social;
	$ccompensacion->direccion = $request->direccion;
	$ccompensacion->telefono = $request->telefono;
	$ccompensacion->fecha_afiliacion = $request->fecha_afiliacion;



        $ccompensacion->save();
    }

    public function update(Request $request)
    {
        $ccompensacion = Ccompensaciones::find($request->id);

    $ccompensacion->nit = $request->nit;
	$ccompensacion->razon_social = $request->razon_social;
	$ccompensacion->direccion = $request->direccion;
	$ccompensacion->telefono = $request->telefono;
	$ccompensacion->fecha_afiliacion = $request->fecha_afiliacion;

        $ccompensacion->save();
    }

    public function delete(Request $request)
    {
        $ccompensacion = Ccompensaciones::find($request->id);
        $ccompensacion->delete();
    }
}
