<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TipoUsuario
 * 
 * @property int $co_tipo_usuario
 * @property string $ds_tipo_usuario
 * @property int $co_sistema
 *
 * @package App\Models
 */
class TipoUsuario extends Eloquent
{
	protected $table = 'tipo_usuario';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'co_tipo_usuario' => 'int',
		'co_sistema' => 'int'
	];

	protected $fillable = [
		'ds_tipo_usuario'
	];
}
