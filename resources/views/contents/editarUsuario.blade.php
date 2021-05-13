@extends('layouts.mainApp')
@section('content')
<div class="container">
    <h2 class="title text-center my-4">Actualice sus datos a continuación</h2>
    <div class="py-5">
        <form class="row g-3" method="POST" action="{{url('/empleados/'.$info_empleado->empleado_id)}}">
            @csrf <!-- Permite prevenir cross-site requests -->
            @method('PUT') <!-- Internamente estará haciendo un PUT request -->
            <div class="col-md-4">
              <label for="nombreForm" class="form-label">Nombre</label>
              <input type="text" name="nombre" value="{{$info_empleado->nombre}}" class="form-control" id="nombreForm" placeholder="Ingrese su nombre" required>
            </div>
            <div class="col-md-4">
              <label for="apellidoForm" class="form-label">Apellido</label>
              <input type="text" name="apellido" value="{{$info_empleado->apellido}}" class="form-control" id="apellidoForm" placeholder="Ingrese Apellido" required>
            </div>
            <div class="col-md-4">
                <label for="cedulaForm" class="form-label">Cedula</label>
                <input type="text" name="cedula" value={{$info_empleado->cedula}} class="form-control" id="cedulaForm" placeholder="Ingrese cedula" required>  
            </div>
            <div class="col-md-6">
              <label for="direccionForm" class="form-label">Dirección</label>
              <input type="text" name="direccion" value="{{$info_empleado->direccion}}"  class="form-control" id="direccionForm" placeholder="Ingrese su dirección" required>
            </div>
            <div class="col-md-3">
              <label for="validationDefault04" class="form-label">Genero</label>
              <select class="form-select" name="genero" id="generoForm" required>
                <option selected disabled value="{{$info_empleado->genero}}">Elija una opción</option>
                <option value="F">Femenino</option>
                <option value="M">Masculino</option>
                <option value="N">No determinado</option>
              </select>
            </div>
            <div class="col-md-3">
                <label for="ingresosForm" class="form-label">Ingreso Salarial</label>
                <div class="input-group">
                    <span class="input-group-text" id="ingresosFormPesos">$</span>
                    <input type="text" name="ingreso" class="form-control" id="ingresosForm" value={{$info_empleado->ingresos}} aria-describedby="ingresosFormPesos" required>
                </div>
            </div>
            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                <label class="form-check-label" for="invalidCheck2">
                    Acepto términos y condiciones
                </label>
              </div>
            </div>
            <div class="col-12">
              <button class="btn btn-primary" type="submit">Actualizar empleado</button>
            </div>
          </form>
    </div>
</div>
@endsection