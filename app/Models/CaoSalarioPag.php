<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoSalarioPag
 * 
 * @property int $id_pagamento
 * @property string $co_usuario
 * @property \Carbon\Carbon $dt_efetuado
 * @property string $status
 * @property string $observacao
 * 
 * @property \App\Models\CaoUsuario $cao_usuario
 *
 * @package App\Models
 */
class CaoSalarioPag extends Eloquent
{
	protected $table = 'cao_salario_pag';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_pagamento' => 'int'
	];

	protected $dates = [
		'dt_efetuado'
	];

	protected $fillable = [
		'id_pagamento',
		'status',
		'observacao'
	];

	public function cao_usuario()
	{
		return $this->belongsTo(\App\Models\CaoUsuario::class, 'co_usuario');
	}
}
