<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Venta
 *
 * @property $id
 * @property $idusuario
 * @property $idcliente
 * @property $tipo_comprobante
 * @property $numero_comprobante
 * @property $Fecha
 * @property $Total
 * @property $Estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Cliente $cliente
 * @property DetalleVenta[] $detalleVentas
 * @property Usuario $usuario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Venta extends Model
{
    
    static $rules = [
		'idusuario' => 'required',
		'idcliente' => 'required',
		'tipo_comprobante' => 'required',
		'numero_comprobante' => 'required',
		'Fecha' => 'required',
		'Total' => 'required',
		'Estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idusuario','idcliente','tipo_comprobante','numero_comprobante','Fecha','Total','Estado'];


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
    public function detalleVentas()
    {
        return $this->hasMany('App\Models\DetalleVenta', 'idventa', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function usuario()
    {
        return $this->hasOne('App\Models\Usuario', 'id', 'idusuario');
    }
    

}
