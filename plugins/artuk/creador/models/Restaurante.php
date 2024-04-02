<?php namespace Artuk\Creador\Models;

use Model;

/**
 * Model
 */
class Restaurante extends Model
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
    public $table = 'artuk_creador_restaurantes';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];

    public $hasMany = [
        'especialidades' => Especialidades::class
    ];

    public $attachMany = [
      'logo' => 'System\Models\File',
      'logo_mini' =>  'System\Models\File',
      'titulo1' => 'System\Models\File',
      'titulo2' => 'System\Models\File',
      'titulo3' => 'System\Models\File',
      'titulo4' => 'System\Models\File',
      'cartapdf' => 'System\Models\File'
    ];

}
