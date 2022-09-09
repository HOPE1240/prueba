<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Medicoscita
 *
 * @property $id
 * @property $Medicos_id
 * @property $Citas_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Cita $cita
 * @property Medico $medico
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Medicoscita extends Model
{
    
    static $rules = [
		'Medicos_id' => 'required',
		'Citas_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Medicos_id','Citas_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cita()
    {
        return $this->hasOne('App\Models\Cita', 'id', 'Citas_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function medico()
    {
        return $this->hasOne('App\Models\Medico', 'id', 'Medicos_id');
    }
    

}
