<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Computadora
 *
 * @property $id
 * @property $Nombre
 * @property $Marca
 * @property $Precio
 * @property $Codigo
 * @property $Stock
 * @property $Descripcion
 * @property $idcategoria
 * @property $idproveedor
 * @property $created_at
 * @property $updated_at
 *
 * @property Categoria $categoria
 * @property Compra[] $compras
 * @property DetalleVenta[] $detalleVentas
 * @property Inventario[] $inventarios
 * @property Proveedor $proveedor
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Computadora extends Model
{
    
    static $rules = [
		'Nombre' => 'required',
		'Marca' => 'required',
		'Precio' => 'required',
		'Codigo' => 'required',
		'Stock' => 'required',
		'Descripcion' => 'required',
		'idcategoria' => 'required',
		'idproveedor' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre','Marca','Precio','Codigo','Stock','Descripcion','idcategoria','idproveedor'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoria()
    {
        return $this->hasOne('App\Models\Categoria', 'id', 'idcategoria');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function compras()
    {
        return $this->hasMany('App\Models\Compra', 'idcomputadora', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detalleVentas()
    {
        return $this->hasMany('App\Models\DetalleVenta', 'idcomputadora', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inventarios()
    {
        return $this->hasMany('App\Models\Inventario', 'idcomputadora', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function proveedor()
    {
        return $this->hasOne('App\Models\Proveedor', 'id', 'idproveedor');
    }
    

}
