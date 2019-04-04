<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoOsDailyReport
 * 
 * @property int $co_daily
 * @property int $co_os
 * @property int $co_fase
 * @property string $co_usuario
 * @property string $ds_assunto
 * @property \Carbon\Carbon $tempo_gasto
 * @property \Carbon\Carbon $data
 * @property int $co_status_atual
 * @property int $co_chamado
 * @property int $co_atividade
 *
 * @package App\Models
 */
class CaoOsDailyReport extends Eloquent
{
	protected $table = 'cao_os_daily_report';
	protected $primaryKey = 'co_daily';
	public $timestamps = false;

	protected $casts = [
		'co_os' => 'int',
		'co_fase' => 'int',
		'co_status_atual' => 'int',
		'co_chamado' => 'int',
		'co_atividade' => 'int'
	];

	protected $dates = [
		'tempo_gasto',
		'data'
	];

	protected $fillable = [
		'co_os',
		'co_fase',
		'co_usuario',
		'ds_assunto',
		'tempo_gasto',
		'data',
		'co_status_atual',
		'co_chamado',
		'co_atividade'
	];
}
