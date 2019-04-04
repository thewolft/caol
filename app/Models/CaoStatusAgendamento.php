<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoStatusAgendamento
 * 
 * @property int $co_status_agendamento
 * @property string $ds_status_agendamento
 *
 * @package App\Models
 */
class CaoStatusAgendamento extends Eloquent
{
	protected $table = 'cao_status_agendamento';
	protected $primaryKey = 'co_status_agendamento';
	public $timestamps = false;

	protected $fillable = [
		'ds_status_agendamento'
	];
}
