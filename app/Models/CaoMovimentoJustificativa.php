<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoMovimentoJustificativa
 * 
 * @property int $co_movimento_justificativa
 * @property int $co_movimento
 * @property int $nu_os
 * @property string $ds_justificativa
 *
 * @package App\Models
 */
class CaoMovimentoJustificativa extends Eloquent
{
	protected $table = 'cao_movimento_justificativa';
	protected $primaryKey = 'co_movimento_justificativa';
	public $timestamps = false;

	protected $casts = [
		'co_movimento' => 'int',
		'nu_os' => 'int'
	];

	protected $fillable = [
		'co_movimento',
		'nu_os',
		'ds_justificativa'
	];
}
