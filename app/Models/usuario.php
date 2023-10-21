<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 *
 * @property $id
 * @property $Nombre
 * @property $Tipo_Documento
 * @property $Numero_Documento
 * @property $Direccion
 * @property $Telefono
 * @property $Email
 * @property $Contraseña
 * @property $id_rol
 * @property $created_at
 * @property $updated_at
 *
 * @property Compra[] $compras
 * @property DetalleVenta[] $detalleVentas
 * @property Rol $rol
 * @property Venta[] $ventas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Usuario extends Model
{
    
    static $rules = [
		'Nombre' => 'required',
		'Tipo_Documento' => 'required',
		'Numero_Documento' => 'required',
		'Direccion' => 'required',
		'Telefono' => 'required',
		'Email' => 'required',
		'Contraseña' => 'required',
		'id_rol' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre','Tipo_Documento','Numero_Documento','Direccion','Telefono','Email','Contraseña','id_rol'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function compras()
    {
        return $this->hasMany('App\Models\Compra', 'idusuario', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detalleVentas()
    {
        return $this->hasMany('App\Models\DetalleVenta', 'idusuario', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function rol()
    {
        return $this->hasOne('App\Models\Rol', 'id', 'id_rol');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ventas()
    {
        return $this->hasMany('App\Models\Venta', 'idusuario', 'id');
    }
    

}
