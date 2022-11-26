<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Rede
 *
 * @property $id
 * @property $nombre
 * @property $url
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Rede extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'url' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','url'];



}
