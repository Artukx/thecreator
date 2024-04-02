<?php namespace Artuk\Creador\Models;

use Model;
use System\Facades\System;

/**
 * Model
 */
class Especialidades extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var bool timestamps are disabled.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'artuk_creador_especialidades';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];

    public $belongsTo = [
        'restaurante' => Restaurante::class
    ];

    public $attachOne = [
        'esp_img' => 'System\Models\File'
    ];

}
