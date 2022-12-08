<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Afiliaciones;

class AfiliacionesController extends Controller
{

    public function index()
    {
        $afiliaciones = Afiliaciones::all();
        $array = array(
            'status'=>200,
            'msj'=>'consulta exitosa'
        );
        return [
            'data'=>$afiliaciones,
            'response'=>$array

        ];
    }

    public function getSelect()
    {
        $afiliaciones = Afiliaciones::select('id','razon_social_eps','razon_social_arl','razon_social_ccf','razon_social_afp')->get();
        return ['data'=>$afiliaciones];
    }

    public function store(Request $request)
    {
        $afiliacion = new Afiliaciones;

        $afiliacion->razon_social_eps = $request->razon_social_eps;
	    $afiliacion->razon_social_arl = $request->razon_social_arl;
	    $afiliacion->razon_social_ccf = $request->razon_social_ccf;
	    $afiliacion->razon_social_afp = $request->razon_social_afp;



        $afiliacion->save();
    }

    public function update(Request $request)
    {
        $afiliacion = Afiliaciones::find($request->id);

        $afiliacion->razon_social_eps = $request->razon_social_eps;
	    $afiliacion->razon_social_arl = $request->razon_social_arl;
	    $afiliacion->razon_social_ccf = $request->razon_social_ccf;
	    $afiliacion->razon_social_afp = $request->razon_social_afp;

        $afiliacion->save();
    }

    public function delete(Request $request)
    {
        $afiliacion = Afiliaciones::find($request->id);
        $afiliacion->delete();
    }

}
