<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoHistOcorrenciasO
 * 
 * @property int $idocorrencia
 * @property int $co_os
 * @property string $co_usuario
 * @property \Carbon\Carbon $data
 * @property string $tipo
 * @property string $descricao
 * @property string $responsavel
 * @property \Carbon\Carbon $data_fechamento
 * 
 * @property \App\Models\CaoUsuario $cao_usuario
 * @property \App\Models\CaoO $cao_o
 *
 * @package App\Models
 */
class CaoHistOcorrenciasO extends Eloquent
{
	protected $primaryKey = 'idocorrencia';
	public $timestamps = false;

	protected $casts = [
		'co_os' => 'int'
	];

	protected $dates = [
		'data',
		'data_fechamento'
	];

	protected $fillable = [
		'co_os',
		'co_usuario',
		'data',
		'tipo',
		'descricao',
		'responsavel',
		'data_fechamento'
	];

	public function cao_usuario()
	{
		return $this->belongsTo(\App\Models\CaoUsuario::class, 'co_usuario');
	}

	public function cao_o()
	{
		return $this->belongsTo(\App\Models\CaoO::class, 'co_os');
	}
}
