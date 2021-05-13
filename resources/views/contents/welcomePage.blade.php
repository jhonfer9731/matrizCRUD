@extends('layouts.mainApp')
@section('content')
<div class="container">
    <div class="py-5">
        <h1 class="text-center"> Bienvenido a la plataforma de empleados </h1>
        <p class="text-center py-3 px-3"> Aqui puede ver los empleados registrados, tener información de su salario, actualizarla o ingresar uno nuevo</p>
        <div class="row justify-content-md-center">
            <div class ="col col-lg-2">
                <a class="btn btn-success" href="/empleados">Ver empleados</a>
            </div>
            <div class ="col col-lg-2">
                <a class="btn btn-primary" href="/nuevoempleado" >Ingresar Empleado</a>
        </div>
    </div>
</div>
@endsection
