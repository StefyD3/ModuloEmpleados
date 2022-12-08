<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cargos;

class CargosController extends Controller
{

    public function index()
    {
        $cargos = Cargos::all();
        $array = array(
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
        $cargo = new Cargos;

        $cargo->nombre = $request->nombre;
        $cargo->descripcion = $request->descripcion;
        $cargo->empleado_id = $request->empleado_id;

        $cargo->save();
    }

    public function update(Request $request)
    {
        $cargo = Cargos::find($request->id);

        $cargo->nombre = $request->nombre;
        $cargo->descripcion = $request->descripcion;

        $cargo->save();
    }

    public function delete(Request $request)
    {
        $cargo = Cargos::find($request->id);
        $cargo->delete();
    }




}
