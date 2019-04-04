<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoOsObsChamado
 * 
 * @property int $co_obs
 * @property int $co_chamado
 * @property string $co_usuario
 * @property string $descricao
 * @property \Carbon\Carbon $dt_obs
 * @property string $email
 * @property string $arquivo_obs
 *
 * @package App\Models
 */
class CaoOsObsChamado extends Eloquent
{
	protected $table = 'cao_os_obs_chamado';
	protected $primaryKey = 'co_obs';
	public $timestamps = false;

	protected $casts = [
		'co_chamado' => 'int'
	];

	protected $dates = [
		'dt_obs'
	];

	protected $fillable = [
		'co_chamado',
		'co_usuario',
		'descricao',
		'dt_obs',
		'email',
		'arquivo_obs'
	];
}
