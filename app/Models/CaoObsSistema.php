<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoObsSistema
 * 
 * @property int $co_obs
 * @property string $descricao
 * @property int $co_sistema
 * @property string $co_usuario
 * @property \Carbon\Carbon $dt_obs
 *
 * @package App\Models
 */
class CaoObsSistema extends Eloquent
{
	protected $table = 'cao_obs_sistema';
	protected $primaryKey = 'co_obs';
	public $timestamps = false;

	protected $casts = [
		'co_sistema' => 'int'
	];

	protected $dates = [
		'dt_obs'
	];

	protected $fillable = [
		'descricao',
		'co_sistema',
		'co_usuario',
		'dt_obs'
	];
}
