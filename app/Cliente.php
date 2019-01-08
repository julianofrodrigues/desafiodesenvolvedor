<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $dtnasc
 * @property string $sexo
 * @property string $dtcad
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class Cliente extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'dtnasc', 'sexo', 'dtcad', 'created_at', 'updated_at', 'deleted_at'];

}
