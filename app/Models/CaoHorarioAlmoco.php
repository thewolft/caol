<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoHorarioAlmoco
 * 
 * @property int $id
 * @property string $co_usuario
 * @property string $almoco_saida_hora
 * @property string $almoco_volta_hora
 *
 * @package App\Models
 */
class CaoHorarioAlmoco extends Eloquent
{
	protected $table = 'cao_horario_almoco';
	public $timestamps = false;

	protected $fillable = [
		'co_usuario',
		'almoco_saida_hora',
		'almoco_volta_hora'
	];
}
