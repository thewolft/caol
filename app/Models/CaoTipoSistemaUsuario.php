<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoTipoSistemaUsuario
 * 
 * @property int $co_sistema
 * @property string $ds_sistema
 *
 * @package App\Models
 */
class CaoTipoSistemaUsuario extends Eloquent
{
	protected $table = 'cao_tipo_sistema_usuario';
	protected $primaryKey = 'co_sistema';
	public $timestamps = false;

	protected $fillable = [
		'ds_sistema'
	];
}
