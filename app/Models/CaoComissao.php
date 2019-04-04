<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoComissao
 * 
 * @property int $co_comissao
 * @property int $co_fatura
 * @property \Carbon\Carbon $dt_efetuado
 *
 * @package App\Models
 */
class CaoComissao extends Eloquent
{
	protected $table = 'cao_comissao';
	protected $primaryKey = 'co_comissao';
	public $timestamps = false;

	protected $casts = [
		'co_fatura' => 'int'
	];

	protected $dates = [
		'dt_efetuado'
	];

	protected $fillable = [
		'co_fatura',
		'dt_efetuado'
	];
}
