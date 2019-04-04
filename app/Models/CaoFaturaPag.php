<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoFaturaPag
 * 
 * @property int $id_fatura_pag
 * @property int $co_fatura
 * @property \Carbon\Carbon $dt_efetuado
 * @property float $valor_pago
 *
 * @package App\Models
 */
class CaoFaturaPag extends Eloquent
{
	protected $table = 'cao_fatura_pag';
	protected $primaryKey = 'id_fatura_pag';
	public $timestamps = false;

	protected $casts = [
		'co_fatura' => 'int',
		'valor_pago' => 'float'
	];

	protected $dates = [
		'dt_efetuado'
	];

	protected $fillable = [
		'co_fatura',
		'dt_efetuado',
		'valor_pago'
	];
}
