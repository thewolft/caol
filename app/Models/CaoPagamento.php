<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoPagamento
 * 
 * @property int $co_pagamento
 * @property string $co_usuario
 * @property string $tp_pagamento
 * @property \Carbon\Carbon $dt_pagamento
 * @property float $vl_pagamento
 * @property \Carbon\Carbon $dt_referencia_pagamento
 *
 * @package App\Models
 */
class CaoPagamento extends Eloquent
{
	protected $table = 'cao_pagamento';
	protected $primaryKey = 'co_pagamento';
	public $timestamps = false;

	protected $casts = [
		'vl_pagamento' => 'float'
	];

	protected $dates = [
		'dt_pagamento',
		'dt_referencia_pagamento'
	];

	protected $fillable = [
		'co_usuario',
		'tp_pagamento',
		'dt_pagamento',
		'vl_pagamento',
		'dt_referencia_pagamento'
	];
}
