<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleados;

class EmpleadosController extends Controller
{
    public function index()
    {
        $empleados = Empleados::all();
        $array = array(
            'status'=>200,
            'msj'=>'consulta exitosa'
        );
        return [
            'data'=>$empleados,
            'response'=>$array

        ];
    }

    public function getSelect()
    {
        $empleados = Empleados::select('id','cedula_empleado','nombres','apellidos')->get();
        return ['data'=>$empleados];
    }

    public function store(Request $request)
    {
        $empleado = new Empleados;

        $empleado->cedula_empleado = $request->cedula_empleado;
	    $empleado->nombres = $request->nombres;
	    $empleado->apellidos = $request->apellidos;
	    $empleado->direccion = $request->direccion;
    	$empleado->telefono = $request->telefono;
	    $empleado->fecha_nacimiento = $request->fecha_nacimiento;
	    $empleado->fecha_ingreso = $request->fecha_ingreso;


        $empleado->save();
    }

    public function update(Request $request)
    {
        $empleado = Empleados::find($request->id);

        $empleado->cedula_empleado = $request->cedula_empleado;
	    $empleado->nombres = $request->nombres;
	    $empleado->apellidos = $request->apellidos;
	    $empleado->direccion = $request->direccion;
	    $empleado->telefono = $request->telefono;
	    $empleado->fecha_nacimiento = $request->fecha_nacimiento;
	    $empleado->fecha_ingreso = $request->fecha_ingreso;

        $empleado->save();
    }

    public function delete(Request $request)
    {
        $empleado = Empleados::find($request->id);
        $empleado->delete();
    }

}
