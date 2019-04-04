<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoValorDescanso
 * 
 * @property int $id
 * @property string $co_usuario
 * @property string $segundos
 * @property string $mes_referencia
 *
 * @package App\Models
 */
class CaoValorDescanso extends Eloquent
{
	protected $table = 'cao_valor_descanso';
	public $timestamps = false;

	protected $fillable = [
		'co_usuario',
		'segundos',
		'mes_referencia'
	];
}
