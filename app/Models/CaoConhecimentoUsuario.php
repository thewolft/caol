<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoConhecimentoUsuario
 * 
 * @property string $co_usuario
 * @property int $co_conhecimento
 * @property int $nv_conhecimento
 * @property bool $is_certificado
 *
 * @package App\Models
 */
class CaoConhecimentoUsuario extends Eloquent
{
	protected $table = 'cao_conhecimento_usuario';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'co_conhecimento' => 'int',
		'nv_conhecimento' => 'int',
		'is_certificado' => 'bool'
	];

	protected $fillable = [
		'nv_conhecimento',
		'is_certificado'
	];
}
