<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoBancoHora
 * 
 * @property int $co_banc_horas
 * @property string $co_usuario
 * @property string $periodo
 * @property int $min_mes
 * @property int $min_ferias
 * @property int $min_pago
 * @property int $min_total
 *
 * @package App\Models
 */
class CaoBancoHora extends Eloquent
{
	protected $primaryKey = 'co_banc_horas';
	public $timestamps = false;

	protected $casts = [
		'min_mes' => 'int',
		'min_ferias' => 'int',
		'min_pago' => 'int',
		'min_total' => 'int'
	];

	protected $fillable = [
		'co_usuario',
		'periodo',
		'min_mes',
		'min_ferias',
		'min_pago',
		'min_total'
	];
}
