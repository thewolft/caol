<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoUsuarioDtDisp
 * 
 * @property int $co_dt_disp
 * @property string $co_usuario
 * @property \Carbon\Carbon $dt_disp
 * @property \Carbon\Carbon $dt_alt
 *
 * @package App\Models
 */
class CaoUsuarioDtDisp extends Eloquent
{
	protected $table = 'cao_usuario_dt_disp';
	protected $primaryKey = 'co_dt_disp';
	public $timestamps = false;

	protected $dates = [
		'dt_disp',
		'dt_alt'
	];

	protected $fillable = [
		'co_usuario',
		'dt_disp',
		'dt_alt'
	];
}
