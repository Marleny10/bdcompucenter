<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DetalleVenta
 *
 * @property $id
 * @property $idventa
 * @property $idcomputadora
 * @property $idusuario
 * @property $Cantidad
 * @property $Precio
 * @property $Descuento
 * @property $created_at
 * @property $updated_at
 *
 * @property Computadora $computadora
 * @property Usuario $usuario
 * @property Venta $venta
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class DetalleVenta extends Model
{
    
    static $rules = [
		'idventa' => 'required',
		'idcomputadora' => 'required',
		'idusuario' => 'required',
		'Cantidad' => 'required',
		'Precio' => 'required',
		'Descuento' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idventa','idcomputadora','idusuario','Cantidad','Precio','Descuento'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function computadora()
    {
        return $this->hasOne('App\Models\Computadora', 'id', 'idcomputadora');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function usuario()
    {
        return $this->hasOne('App\Models\Usuario', 'id', 'idusuario');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function venta()
    {
        return $this->hasOne('App\Models\Venta', 'id', 'idventa');
    }
    

}
