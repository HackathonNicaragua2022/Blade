<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Negocio
 *
 * @property $id
 * @property $ruc
 * @property $nombre
 * @property $descripcion
 * @property $municipio
 * @property $departamento
 * @property $direccion
 * @property $foto
 * @property $raiting
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Negocio extends Model
{
    
    static $rules = [
		'ruc' => 'required',
		'nombre' => 'required',
		'descripcion' => 'required',
		'municipio' => 'required',
		'departamento' => 'required',
		'direccion' => 'required',
		'foto' => 'required',
		'raiting' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['ruc','nombre','descripcion','municipio','departamento','direccion','foto','raiting'];



}
