<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoMovimentoO
 * 
 * @property int $co_movimento_os
 * @property int $nu_os
 * @property int $co_sistema
 * @property int $co_tipo_movimento
 * @property int $nu_valor
 * @property string $ds_valor
 * @property string $usuario_obs
 * @property \Carbon\Carbon $dt_ini
 * @property \Carbon\Carbon $dt_fim
 *
 * @package App\Models
 */
class CaoMovimentoO extends Eloquent
{
	protected $primaryKey = 'co_movimento_os';
	public $timestamps = false;

	protected $casts = [
		'nu_os' => 'int',
		'co_sistema' => 'int',
		'co_tipo_movimento' => 'int',
		'nu_valor' => 'int'
	];

	protected $dates = [
		'dt_ini',
		'dt_fim'
	];

	protected $fillable = [
		'nu_os',
		'co_sistema',
		'co_tipo_movimento',
		'nu_valor',
		'ds_valor',
		'usuario_obs',
		'dt_ini',
		'dt_fim'
	];
}
