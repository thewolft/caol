<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoLogChamado
 * 
 * @property int $id
 * @property int $co_chamado
 * @property \Carbon\Carbon $dt_chamado
 * @property string $co_usuario
 * @property int $co_daily
 *
 * @package App\Models
 */
class CaoLogChamado extends Eloquent
{
	protected $table = 'cao_log_chamado';
	public $timestamps = false;

	protected $casts = [
		'co_chamado' => 'int',
		'co_daily' => 'int'
	];

	protected $dates = [
		'dt_chamado'
	];

	protected $fillable = [
		'co_chamado',
		'dt_chamado',
		'co_usuario',
		'co_daily'
	];
}
