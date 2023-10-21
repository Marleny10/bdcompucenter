<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Inventario
 *
 * @property $id
 * @property $idcomputadora
 * @property $Cantidad
 * @property $Fecha_Adquisicion
 * @property $created_at
 * @property $updated_at
 *
 * @property Computadora $computadora
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Inventario extends Model
{
    
    static $rules = [
		'idcomputadora' => 'required',
		'Cantidad' => 'required',
		'Fecha_Adquisicion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idcomputadora','Cantidad','Fecha_Adquisicion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function computadora()
    {
        return $this->hasOne('App\Models\Computadora', 'id', 'idcomputadora');
    }
    

}
