<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoAtividadeReport
 * 
 * @property int $id
 * @property int $co_cliente
 * @property string $inicio
 * @property string $fim
 * @property string $lembrete
 * @property int $co_atividade
 * @property int $co_os
 * @property string $assunto
 * @property string $conteudo
 * @property string $status
 * @property string $tempo
 * @property string $co_usuario
 * @property \Carbon\Carbon $data_ativ
 * @property string $retorno
 * @property int $co_fase
 *
 * @package App\Models
 */
class CaoAtividadeReport extends Eloquent
{
	protected $table = 'cao_atividade_report';
	public $timestamps = false;

	protected $casts = [
		'co_cliente' => 'int',
		'co_atividade' => 'int',
		'co_os' => 'int',
		'co_fase' => 'int'
	];

	protected $dates = [
		'data_ativ'
	];

	protected $fillable = [
		'co_cliente',
		'inicio',
		'fim',
		'lembrete',
		'co_atividade',
		'co_os',
		'assunto',
		'conteudo',
		'status',
		'tempo',
		'co_usuario',
		'data_ativ',
		'retorno',
		'co_fase'
	];
}
