<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoFormacaoUsuario
 * 
 * @property string $co_usuario
 * @property string $tp_curso
 * @property string $ds_curso
 * @property string $ds_instituicao
 * @property \Carbon\Carbon $dt_conclusao
 *
 * @package App\Models
 */
class CaoFormacaoUsuario extends Eloquent
{
	protected $table = 'cao_formacao_usuario';
	public $incrementing = false;
	public $timestamps = false;

	protected $dates = [
		'dt_conclusao'
	];

	protected $fillable = [
		'ds_curso',
		'ds_instituicao',
		'dt_conclusao'
	];
}
