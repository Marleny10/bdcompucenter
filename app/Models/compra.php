<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Compra
 *
 * @property $id
 * @property $Numero_Compra
 * @property $idusuario
 * @property $idcliente
 * @property $idproveedor
 * @property $idcomputadora
 * @property $Fecha
 * @property $Cantidad
 * @property $Total
 * @property $created_at
 * @property $updated_at
 *
 * @property Cliente $cliente
 * @property Computadora $computadora
 * @property Proveedor $proveedor
 * @property Usuario $usuario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Compra extends Model
{
    
    static $rules = [
		'Numero_Compra' => 'required',
		'idusuario' => 'required',
		'idcliente' => 'required',
		'idproveedor' => 'required',
		'idcomputadora' => 'required',
		'Fecha' => 'required',
		'Cantidad' => 'required',
		'Total' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Numero_Compra','idusuario','idcliente','idproveedor','idcomputadora','Fecha','Cantidad','Total'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente', 'id', 'idcliente');
    }
    
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
    public function proveedor()
    {
        return $this->hasOne('App\Models\Proveedor', 'id', 'idproveedor');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function usuario()
    {
        return $this->hasOne('App\Models\Usuario', 'id', 'idusuario');
    }
    

}
