<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Novedades;

class NovedadesController extends Controller
{
    public function index()
    {
        $novedades = Novedades::all();
        $array = array(
            'status'=>200,
            'msj'=>'consulta exitosa'
        );
        return [
            'data'=>$novedades,
            'response'=>$array

        ];
    }

    public function getSelect()
    {
        $novedades = Novedades::select('id','tipo_novedad','inicio_novedad','fin_novedad')->get();
        return ['data'=>$novedades];
    }

    public function store(Request $request)
    {
        $novedad = new Novedades;

        $novedad->tipo_novedad = $request->tipo_novedad;
	    $novedad->inicio_novedad = $request->inicio_novedad;
	    $novedad->fin_novedad = $request->fin_novedad;


        $novedad->save();
    }

    public function update(Request $request)
    {
        $novedad = Novedades::find($request->id);

        $novedad->tipo_novedad = $request->tipo_novedad;
	    $novedad->inicio_novedad = $request->inicio_novedad;
	    $novedad->fin_novedad = $request->fin_novedad;


        $novedad->save();

    }

    public function delete(Request $request)
    {
        $novedad = Novedades::find($request->id);
        $novedad->delete();
    }
}
