<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoDiaryReport
 * 
 * @property int $co_diary_report
 * @property \Carbon\Carbon $hr_gasta
 * @property int $co_atividade
 * @property string $ds_assunto
 * @property int $co_movimento
 * @property int $nu_os
 * @property int $co_sistema
 *
 * @package App\Models
 */
class CaoDiaryReport extends Eloquent
{
	protected $table = 'cao_diary_report';
	protected $primaryKey = 'co_diary_report';
	public $timestamps = false;

	protected $casts = [
		'co_atividade' => 'int',
		'co_movimento' => 'int',
		'nu_os' => 'int',
		'co_sistema' => 'int'
	];

	protected $dates = [
		'hr_gasta'
	];

	protected $fillable = [
		'hr_gasta',
		'co_atividade',
		'ds_assunto',
		'co_movimento',
		'nu_os',
		'co_sistema'
	];
}
