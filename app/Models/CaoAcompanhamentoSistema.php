<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoAcompanhamentoSistema
 * 
 * @property int $co_acompanhamento
 * @property string $email
 * @property string $senha
 * @property int $co_sistema
 * @property string $status
 *
 * @package App\Models
 */
class CaoAcompanhamentoSistema extends Eloquent
{
	protected $table = 'cao_acompanhamento_sistema';
	protected $primaryKey = 'co_acompanhamento';
	public $timestamps = false;

	protected $casts = [
		'co_sistema' => 'int'
	];

	protected $fillable = [
		'email',
		'senha',
		'co_sistema',
		'status'
	];
}
