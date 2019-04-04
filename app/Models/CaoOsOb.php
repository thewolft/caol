<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoOsOb
 * 
 * @property int $co_obs
 * @property int $co_os
 * @property string $co_usuario
 * @property string $descricao
 * @property \Carbon\Carbon $dt_obs
 *
 * @package App\Models
 */
class CaoOsOb extends Eloquent
{
	protected $primaryKey = 'co_obs';
	public $timestamps = false;

	protected $casts = [
		'co_os' => 'int'
	];

	protected $dates = [
		'dt_obs'
	];

	protected $fillable = [
		'co_os',
		'co_usuario',
		'descricao',
		'dt_obs'
	];
}
