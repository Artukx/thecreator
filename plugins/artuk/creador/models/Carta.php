<?php namespace Artuk\Creador\Models;

use Model;

/**
 * Model
 */
class Carta extends Model
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
    public $table = 'artuk_creador_carta';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];

    public $hasOne = [
        'restaurante' => Restaurante::class
    ];

    public $belongsTo = [
        'cat_carta' => Cat_carta::class
    ];


}
