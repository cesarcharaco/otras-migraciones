<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $table = 'datos_generales_personal';
     
    protected $fillable = [
        'codigo_pesonal', 'apellido_paterno', 'apellido_materno','nombres', 'cedula', 'fecha_nacimiento', 'fecha_ingreso', 'edad', 'edo_civil', 'genero', 'estado_actual', 'tipo_registro', 'especialidad', 'direccion', 'telefono', 'correo', 'id_cargo', 'clave', 'ingreso_notas', 'id_tipo'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    public function cargo(){
        return $this->belongsTo('App\Cargo', 'id_cargo');
    }
}
