<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado; // Permite incluir el modelo Empleado
use Illuminate\Validation\Rule;
class PagesCrudController extends Controller
{
    public function welcome(){
 
        return view('contents.welcomePage');
    }

    public function ingresarEmpleado(){
        return view('contents.ingresoUsuario');
    }
    public function verEmpleados(){
        $empleados = new Empleado;
        return view('contents.listaEmpleados')->with('info_empleados',$empleados->all());
    }
    public function crearEmpleado(Request $request){

        $campos_validados = $request->validate([ // Validacion de los campos de entrada del formulario
            'nombre' => 'required|alpha|max:40',
            'apellido' => 'required|alpha|max:40',
            'cedula' => 'required|numeric|max:999999999999999',
            'direccion' => 'required|max:70',
            'genero' => 'required|in:F,M,N',
            'ingreso' => 'required|numeric'
        ]);

        /* Ingreso empleado a la base de datos con el modelo empleado */

        $empleado = new Empleado;
        $empleado->nombre = $campos_validados['nombre'];
        $empleado->apellido = $campos_validados['apellido'];
        $empleado->cedula = $campos_validados['cedula'];
        $empleado->direccion = $campos_validados['direccion'];
        $empleado->genero = $campos_validados['genero'];
        $empleado->ingresos = $campos_validados['ingreso'];
        $empleado->save();
        return view('contents.listaEmpleados')->with('success','Se ingreso al empleado: '.$campos_validados["nombre"].' correctamente.')->with('info_empleados',$empleado->all());

    }
    public function editarEmpleado($id){

        // Muestra el formulario para editar un empleado

        $empleado = Empleado::find($id);
        return view('contents.editarUsuario')->with('info_empleado',$empleado);
    }
    public function actualizarEmpleado(Request $request,$id){

        // Funcion encargada de actualizar los datos de los empleados

        $empleado = Empleado::find($id);
        $campos_validados = $request->validate([ // Validacion de los campos de entrada del formulario
            'nombre' => 'required|alpha|max:40',
            'apellido' => 'required|alpha|max:40',
            'cedula' => 'required|numeric|max:999999999999999',
            'direccion' => 'required|max:70',
            'genero' => 'required|in:F,M,N',
            'ingreso' => 'required|numeric'
        ]);
        $empleado->nombre = $campos_validados['nombre'];
        $empleado->apellido = $campos_validados['apellido'];
        $empleado->cedula = $campos_validados['cedula'];
        $empleado->direccion = $campos_validados['direccion'];
        $empleado->genero = $campos_validados['genero'];
        $empleado->ingresos = $campos_validados['ingreso'];
        $empleado->save();
        return view('contents.listaEmpleados')->with('success','Se modifico al empleado: '.$campos_validados["nombre"].' correctamente.')->with('info_empleados',$empleado->all());
    }
    public function eliminarEmpleado($id){

        $empleado = Empleado::find($id);
        $empleado->delete();
        return redirect('/empleados');

    }
}
