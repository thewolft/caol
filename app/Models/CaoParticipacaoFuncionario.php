<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoParticipacaoFuncionario
 * 
 * @property int $co_part_funcionario
 * @property float $pc_participacao
 * @property string $co_usuario
 * @property int $co_escritorio
 * @property \Carbon\Carbon $dt_referencia
 *
 * @package App\Models
 */
class CaoParticipacaoFuncionario extends Eloquent
{
	protected $table = 'cao_participacao_funcionario';
	protected $primaryKey = 'co_part_funcionario';
	public $timestamps = false;

	protected $casts = [
		'pc_participacao' => 'float',
		'co_escritorio' => 'int'
	];

	protected $dates = [
		'dt_referencia'
	];

	protected $fillable = [
		'pc_participacao',
		'co_usuario',
		'co_escritorio',
		'dt_referencia'
	];
}
