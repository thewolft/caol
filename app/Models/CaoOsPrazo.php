<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoOsPrazo
 * 
 * @property int $co_prazo
 * @property int $co_os
 * @property int $co_fase
 * @property int $total_analista
 * @property int $total_hora
 *
 * @package App\Models
 */
class CaoOsPrazo extends Eloquent
{
	protected $table = 'cao_os_prazo';
	protected $primaryKey = 'co_prazo';
	public $timestamps = false;

	protected $casts = [
		'co_os' => 'int',
		'co_fase' => 'int',
		'total_analista' => 'int',
		'total_hora' => 'int'
	];

	protected $fillable = [
		'co_os',
		'co_fase',
		'total_analista',
		'total_hora'
	];
}
