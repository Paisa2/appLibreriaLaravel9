<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sexo extends Model
{
    use HasFactory;

    protected $table = 'lib_sexo';  //Es el nombre de la tabla
    protected $primarykey = 'cod_sexo'; //clave primaria de la tabla asociada
    protected $fillable = ['description']; //asignacion masiva al momento de insertar registros

}
