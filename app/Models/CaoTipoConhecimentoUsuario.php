<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoTipoConhecimentoUsuario
 * 
 * @property int $co_conhecimento
 * @property string $ds_conhecimento
 * @property int $co_sistema
 *
 * @package App\Models
 */
class CaoTipoConhecimentoUsuario extends Eloquent
{
	protected $table = 'cao_tipo_conhecimento_usuario';
	protected $primaryKey = 'co_conhecimento';
	public $timestamps = false;

	protected $casts = [
		'co_sistema' => 'int'
	];

	protected $fillable = [
		'ds_conhecimento',
		'co_sistema'
	];
}
