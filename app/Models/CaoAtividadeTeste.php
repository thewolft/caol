<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoAtividadeTeste
 * 
 * @property int $co_atividade
 * @property string $ds_atividade
 * @property int $co_tipo_usuario
 *
 * @package App\Models
 */
class CaoAtividadeTeste extends Eloquent
{
	protected $table = 'cao_atividade_teste';
	protected $primaryKey = 'co_atividade';
	public $timestamps = false;

	protected $casts = [
		'co_tipo_usuario' => 'int'
	];

	protected $fillable = [
		'ds_atividade',
		'co_tipo_usuario'
	];
}
