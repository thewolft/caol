<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoAgendamento
 * 
 * @property int $co_agendamento
 * @property \Carbon\Carbon $dt_hr_inicio
 * @property \Carbon\Carbon $dt_hr_fim
 * @property int $co_status_agendamento
 * @property int $co_diary_report_consultor
 * @property int $co_complemento
 *
 * @package App\Models
 */
class CaoAgendamento extends Eloquent
{
	protected $table = 'cao_agendamento';
	protected $primaryKey = 'co_agendamento';
	public $timestamps = false;

	protected $casts = [
		'co_status_agendamento' => 'int',
		'co_diary_report_consultor' => 'int',
		'co_complemento' => 'int'
	];

	protected $dates = [
		'dt_hr_inicio',
		'dt_hr_fim'
	];

	protected $fillable = [
		'dt_hr_inicio',
		'dt_hr_fim',
		'co_status_agendamento',
		'co_diary_report_consultor',
		'co_complemento'
	];
}
