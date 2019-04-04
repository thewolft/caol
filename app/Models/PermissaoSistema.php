<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class PermissaoSistema
 * 
 * @property string $co_usuario
 * @property int $co_tipo_usuario
 * @property int $co_sistema
 * @property string $in_ativo
 * @property string $co_usuario_atualizacao
 * @property \Carbon\Carbon $dt_atualizacao
 *
 * @package App\Models
 */
class PermissaoSistema extends Eloquent
{
	protected $table = 'permissao_sistema';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'co_tipo_usuario' => 'int',
		'co_sistema' => 'int'
	];

	protected $dates = [
		'dt_atualizacao'
	];

	protected $fillable = [
		'in_ativo',
		'co_usuario_atualizacao',
		'dt_atualizacao'
	];
}
