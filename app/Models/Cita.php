<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cita
 *
 * @property $id
 * @property $Fecha
 * @property $Modalidad
 * @property $created_at
 * @property $updated_at
 *
 * @property Medicoscita[] $medicoscitas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cita extends Model
{
    
    static $rules = [
		'Fecha' => 'required',
		'Modalidad' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Fecha','Modalidad'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function medicoscitas()
    {
        return $this->hasMany('App\Models\Medicoscita', 'Citas_id', 'id');
    }
    

}
