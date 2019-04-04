<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoCusto
 * 
 * @property int $co_custo
 * @property int $co_tipo_custo
 * @property string $descricao
 * @property int $co_escritorio
 * @property \Carbon\Carbon $dt_compra
 * @property \Carbon\Carbon $dt_pagamento
 * @property string $co_boleto
 * @property float $valor
 * @property string $parcela
 * @property bool $pag
 * @property int $co_custo_high
 *
 * @package App\Models
 */
class CaoCusto extends Eloquent
{
	protected $table = 'cao_custo';
	protected $primaryKey = 'co_custo';
	public $timestamps = false;

	protected $casts = [
		'co_tipo_custo' => 'int',
		'co_escritorio' => 'int',
		'valor' => 'float',
		'pag' => 'bool',
		'co_custo_high' => 'int'
	];

	protected $dates = [
		'dt_compra',
		'dt_pagamento'
	];

	protected $fillable = [
		'co_tipo_custo',
		'descricao',
		'co_escritorio',
		'dt_compra',
		'dt_pagamento',
		'co_boleto',
		'valor',
		'parcela',
		'pag',
		'co_custo_high'
	];
}
