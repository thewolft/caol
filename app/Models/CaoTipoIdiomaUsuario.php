<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoTipoIdiomaUsuario
 * 
 * @property int $co_idioma
 * @property string $ds_idioma
 *
 * @package App\Models
 */
class CaoTipoIdiomaUsuario extends Eloquent
{
	protected $table = 'cao_tipo_idioma_usuario';
	protected $primaryKey = 'co_idioma';
	public $timestamps = false;

	protected $fillable = [
		'ds_idioma'
	];
}
