<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Proveedor
 *
 * @property $id
 * @property $idcliente
 * @property $Nombre_Compañia
 * @property $Tipo_Documento
 * @property $Numero_Documento
 * @property $Direccion_Compañia
 * @property $Telefono
 * @property $Email
 * @property $created_at
 * @property $updated_at
 *
 * @property Cliente $cliente
 * @property Compra[] $compras
 * @property Computadora[] $computadoras
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Proveedor extends Model
{
    
    static $rules = [
		'idcliente' => 'required',
		'Nombre_Compañia' => 'required',
		'Tipo_Documento' => 'required',
		'Numero_Documento' => 'required',
		'Direccion_Compañia' => 'required',
		'Telefono' => 'required',
		'Email' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idcliente','Nombre_Compañia','Tipo_Documento','Numero_Documento','Direccion_Compañia','Telefono','Email'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente', 'id', 'idcliente');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function compras()
    {
        return $this->hasMany('App\Models\Compra', 'idproveedor', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function computadoras()
    {
        return $this->hasMany('App\Models\Computadora', 'idproveedor', 'id');
    }
    

}
