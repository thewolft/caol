<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoSalario
 * 
 * @property string $co_usuario
 * @property \Carbon\Carbon $dt_alteracao
 * @property float $brut_salario
 * @property float $liq_salario
 *
 * @package App\Models
 */
class CaoSalario extends Eloquent
{
	protected $table = 'cao_salario';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'brut_salario' => 'float',
		'liq_salario' => 'float'
	];

	protected $dates = [
		'dt_alteracao'
	];

	protected $fillable = [
		'brut_salario',
		'liq_salario'
	];
}
