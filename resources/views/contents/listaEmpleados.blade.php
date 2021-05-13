@extends('layouts.mainApp')
@section('content')
<div class="container">
    <div class="py-5">
        <h1 class="text-center">Lista empleados</h1>
        <div class="table-responsive">
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Cedula</th>
                <th scope="col">Dirección</th>
                <th scope="col">Genero</th>
                <th scope="col">Ingresos</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
                @if(count($info_empleados) > 0)
                @foreach ($info_empleados as $empleado)
                    <tr>
                        <th scope="row">{{$empleado->empleado_id}}</th>
                        <td>{{$empleado->nombre}}</td>
                        <td>{{$empleado->apellido}}</td>
                        <td>{{$empleado->cedula}}</td>
                        <td>{{$empleado->direccion}}</td>
                        @if($empleado->genero == 'F')
                            <td>Femenino</td>
                        @elseif($empleado->genero == 'M')
                            <td>Masculino</td>
                        @else
                            <td>No determinado</td>
                        @endif
                        
                        <td>{{$empleado->ingresos}}</td>
                        <td class="d-flex w-90 flex-row justify-content-end">
                            <a href="/empleados/{{$empleado->empleado_id}}/editar" class="btn btn-warning">Editar Empleado</a>
                            <form method="POST" action="/empleados/{{$empleado->empleado_id}}">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger" id="botonEliminar{{$empleado->empleado_id}}">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                @endif
              
            </tbody>
        </table>
        </div>

        
    </div>
</div>
@endsection
