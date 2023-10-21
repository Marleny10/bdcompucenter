<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Rol
 *
 * @property $id
 * @property $Nombre_Rol
 * @property $Descripcion
 * @property $created_at
 * @property $updated_at
 *
 * @property Usuario[] $usuarios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Rol extends Model
{
    
    static $rules = [
		'Nombre_Rol' => 'required',
		'Descripcion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre_Rol','Descripcion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function usuarios()
    {
        return $this->hasMany('App\Models\Usuario', 'id_rol', 'id');
    }
    

}
