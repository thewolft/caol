<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoDiaryReportConsultor
 * 
 * @property int $co_diary_report_consultor
 * @property int $co_movimento
 * @property int $co_atividade
 * @property string $ds_empresa
 * @property string $ds_assunto
 * @property \Carbon\Carbon $dt_agendamento
 * @property \Carbon\Carbon $dt_agendamento_fim
 * @property float $vl_fechamento
 * @property int $co_cliente
 *
 * @package App\Models
 */
class CaoDiaryReportConsultor extends Eloquent
{
	protected $table = 'cao_diary_report_consultor';
	protected $primaryKey = 'co_diary_report_consultor';
	public $timestamps = false;

	protected $casts = [
		'co_movimento' => 'int',
		'co_atividade' => 'int',
		'vl_fechamento' => 'float',
		'co_cliente' => 'int'
	];

	protected $dates = [
		'dt_agendamento',
		'dt_agendamento_fim'
	];

	protected $fillable = [
		'co_movimento',
		'co_atividade',
		'ds_empresa',
		'ds_assunto',
		'dt_agendamento',
		'dt_agendamento_fim',
		'vl_fechamento',
		'co_cliente'
	];
}
