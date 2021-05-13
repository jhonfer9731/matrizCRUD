<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    protected $table = 'empleados'; // Se asigna el nombre de la tabla SQL al modelo Empleado
    protected $primaryKey = 'empleado_id';  // Se le indica al modelo cual es la primary key
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'updated_date';
    protected $hidden = array('creation_date','updated_date'); // Estos campos no se muestran cuando el controlador llame el modelo
    

}


/*
USE crudmatrix;
drop table empleados;
CREATE TABLE empleados(
	empleado_id int auto_increment primary key,
    nombre varchar(40) not null,
    apellido varchar(40) not null,
    cedula varchar(20) not null,
    genero char,
    direccion varchar(70),
    ingresos int,
    creation_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
    );

*/