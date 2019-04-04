<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoBonus
 * 
 * @property int $bon_categoria
 * @property int $bon_inicio
 * @property int $bon_fim
 * @property float $bon_valor_sem
 * @property float $bon_valor_fimsem
 *
 * @package App\Models
 */
class CaoBonus extends Eloquent
{
	protected $table = 'cao_bonus';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'bon_categoria' => 'int',
		'bon_inicio' => 'int',
		'bon_fim' => 'int',
		'bon_valor_sem' => 'float',
		'bon_valor_fimsem' => 'float'
	];

	protected $fillable = [
		'bon_valor_sem',
		'bon_valor_fimsem'
	];
}
