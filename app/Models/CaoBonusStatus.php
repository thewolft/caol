<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoBonusStatus
 * 
 * @property int $id
 * @property string $co_usuario
 * @property \Carbon\Carbon $data_solic
 * @property string $mes
 * @property string $valor
 * @property string $is_solic
 * @property string $is_pg
 * @property string $is_horas
 *
 * @package App\Models
 */
class CaoBonusStatus extends Eloquent
{
	protected $table = 'cao_bonus_status';
	public $timestamps = false;

	protected $dates = [
		'data_solic'
	];

	protected $fillable = [
		'co_usuario',
		'data_solic',
		'mes',
		'valor',
		'is_solic',
		'is_pg',
		'is_horas'
	];
}
