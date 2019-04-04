<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoFatura
 * 
 * @property int $co_fatura
 * @property int $co_cliente
 * @property int $co_sistema
 * @property int $co_os
 * @property int $num_nf
 * @property float $total
 * @property float $valor
 * @property \Carbon\Carbon $data_emissao
 * @property string $corpo_nf
 * @property float $comissao_cn
 * @property float $total_imp_inc
 *
 * @package App\Models
 */
class CaoFatura extends Eloquent
{
	protected $table = 'cao_fatura';
	protected $primaryKey = 'co_fatura';
	public $timestamps = false;

	protected $casts = [
		'co_cliente' => 'int',
		'co_sistema' => 'int',
		'co_os' => 'int',
		'num_nf' => 'int',
		'total' => 'float',
		'valor' => 'float',
		'comissao_cn' => 'float',
		'total_imp_inc' => 'float'
	];

	protected $dates = [
		'data_emissao'
	];

	protected $fillable = [
		'co_cliente',
		'co_sistema',
		'co_os',
		'num_nf',
		'total',
		'valor',
		'data_emissao',
		'corpo_nf',
		'comissao_cn',
		'total_imp_inc'
	];
}
