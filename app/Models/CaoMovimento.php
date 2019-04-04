<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoMovimento
 * 
 * @property int $co_movimento
 * @property string $co_usuario
 * @property \Carbon\Carbon $dt_entrada
 * @property \Carbon\Carbon $dt_saida_almoco
 * @property \Carbon\Carbon $dt_volta_almoco
 * @property \Carbon\Carbon $dt_saida
 * @property bool $is_encerrado
 *
 * @package App\Models
 */
class CaoMovimento extends Eloquent
{
	protected $table = 'cao_movimento';
	protected $primaryKey = 'co_movimento';
	public $timestamps = false;

	protected $casts = [
		'is_encerrado' => 'bool'
	];

	protected $dates = [
		'dt_entrada',
		'dt_saida_almoco',
		'dt_volta_almoco',
		'dt_saida'
	];

	protected $fillable = [
		'co_usuario',
		'dt_entrada',
		'dt_saida_almoco',
		'dt_volta_almoco',
		'dt_saida',
		'is_encerrado'
	];
}
