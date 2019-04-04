<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoFeriado
 * 
 * @property int $id
 * @property int $dia
 * @property int $mes
 * @property int $ano
 *
 * @package App\Models
 */
class CaoFeriado extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'dia' => 'int',
		'mes' => 'int',
		'ano' => 'int'
	];

	protected $fillable = [
		'dia',
		'mes',
		'ano'
	];
}
