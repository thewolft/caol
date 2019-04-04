<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoDrAtivComp
 * 
 * @property int $id_ativ_comp
 * @property string $co_usuario
 * @property \Carbon\Carbon $data
 * @property string $assunto
 * @property \Carbon\Carbon $tempo_gasto
 *
 * @package App\Models
 */
class CaoDrAtivComp extends Eloquent
{
	protected $table = 'cao_dr_ativ_comp';
	protected $primaryKey = 'id_ativ_comp';
	public $timestamps = false;

	protected $dates = [
		'data',
		'tempo_gasto'
	];

	protected $fillable = [
		'co_usuario',
		'data',
		'assunto',
		'tempo_gasto'
	];
}
