<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $id
 * @property $Tipo_Cliente
 * @property $Tipo_Documento
 * @property $Nombre_Documento
 * @property $Email
 * @property $Telefono
 * @property $created_at
 * @property $updated_at
 *
 * @property Compra[] $compras
 * @property Proveedor[] $proveedors
 * @property Venta[] $ventas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
    
    static $rules = [
		'Tipo_Cliente' => 'required',
		'Tipo_Documento' => 'required',
		'Nombre_Documento' => 'required',
		'Email' => 'required',
		'Telefono' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Tipo_Cliente','Tipo_Documento','Nombre_Documento','Email','Telefono'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function compras()
    {
        return $this->hasMany('App\Models\Compra', 'idcliente', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function proveedors()
    {
        return $this->hasMany('App\Models\Proveedor', 'idcliente', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ventas()
    {
        return $this->hasMany('App\Models\Venta', 'idcliente', 'id');
    }
    

}
