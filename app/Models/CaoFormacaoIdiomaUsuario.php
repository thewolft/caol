<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoFormacaoIdiomaUsuario
 * 
 * @property string $co_usuario
 * @property int $co_idioma
 * @property int $nv_leitura
 * @property int $nv_escrita
 * @property int $nv_fala
 *
 * @package App\Models
 */
class CaoFormacaoIdiomaUsuario extends Eloquent
{
	protected $table = 'cao_formacao_idioma_usuario';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'co_idioma' => 'int',
		'nv_leitura' => 'int',
		'nv_escrita' => 'int',
		'nv_fala' => 'int'
	];

	protected $fillable = [
		'nv_leitura',
		'nv_escrita',
		'nv_fala'
	];
}
