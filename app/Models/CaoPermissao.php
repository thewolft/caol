<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoPermissao
 * 
 * @property int $id
 * @property string $co_usuario
 * @property string $permissao_intervalo
 * @property string $permissao_hora_extra
 * 
 * @property \App\Models\CaoUsuario $cao_usuario
 *
 * @package App\Models
 */
class CaoPermissao extends Eloquent
{
	protected $table = 'cao_permissao';
	public $timestamps = false;

	protected $fillable = [
		'co_usuario',
		'permissao_intervalo',
		'permissao_hora_extra'
	];

	public function cao_usuario()
	{
		return $this->belongsTo(\App\Models\CaoUsuario::class, 'co_usuario');
	}
}
