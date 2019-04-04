<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoClienteContato
 * 
 * @property int $co_cliente
 * @property \Carbon\Carbon $dt_contato
 * @property int $fg_agendado
 * @property \Carbon\Carbon $hr_ini
 * @property \Carbon\Carbon $hr_end
 *
 * @package App\Models
 */
class CaoClienteContato extends Eloquent
{
	protected $table = 'cao_cliente_contato';
	protected $primaryKey = 'co_cliente';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'co_cliente' => 'int',
		'fg_agendado' => 'int'
	];

	protected $dates = [
		'dt_contato',
		'hr_ini',
		'hr_end'
	];

	protected $fillable = [
		'dt_contato',
		'fg_agendado',
		'hr_ini',
		'hr_end'
	];
}
