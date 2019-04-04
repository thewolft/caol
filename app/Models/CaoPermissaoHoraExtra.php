<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoPermissaoHoraExtra
 * 
 * @property int $id_permissao
 * @property int $co_movimento
 *
 * @package App\Models
 */
class CaoPermissaoHoraExtra extends Eloquent
{
	protected $table = 'cao_permissao_hora_extra';
	protected $primaryKey = 'id_permissao';
	public $timestamps = false;

	protected $casts = [
		'co_movimento' => 'int'
	];

	protected $fillable = [
		'co_movimento'
	];
}
