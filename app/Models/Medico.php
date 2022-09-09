<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Medico
 *
 * @property $id
 * @property $Nombre
 * @property $Apellido
 * @property $Documento
 * @property $Correo
 * @property $Direccion
 * @property $Celular
 * @property $created_at
 * @property $updated_at
 *
 * @property Medicoscita[] $medicoscitas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Medico extends Model
{
    
    static $rules = [
		'Nombre' => 'required',
		'Apellido' => 'required',
		'Documento' => 'required',
		'Correo' => 'required',
		'Direccion' => 'required',
		'Celular' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre','Apellido','Documento','Correo','Direccion','Celular'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function medicoscitas()
    {
        return $this->hasMany('App\Models\Medicoscita', 'Medicos_id', 'id');
    }
    

}
