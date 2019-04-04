<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoAtividadeConsultor
 * 
 * @property int $co_atividade
 * @property string $ds_atividade
 * @property string $ativo
 *
 * @package App\Models
 */
class CaoAtividadeConsultor extends Eloquent
{
	protected $table = 'cao_atividade_consultor';
	protected $primaryKey = 'co_atividade';
	public $timestamps = false;

	protected $fillable = [
		'ds_atividade',
		'ativo'
	];
}
