<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoDocumentacaoSistema
 * 
 * @property int $id
 * @property int $co_sistema
 * @property string $descricao
 * @property string $pasta
 * @property int $sub_grupo
 * @property string $co_usuario
 * @property \Carbon\Carbon $dt_doc
 * @property string $arquivo
 *
 * @package App\Models
 */
class CaoDocumentacaoSistema extends Eloquent
{
	protected $table = 'cao_documentacao_sistema';
	public $timestamps = false;

	protected $casts = [
		'co_sistema' => 'int',
		'sub_grupo' => 'int'
	];

	protected $dates = [
		'dt_doc'
	];

	protected $fillable = [
		'co_sistema',
		'descricao',
		'pasta',
		'sub_grupo',
		'co_usuario',
		'dt_doc',
		'arquivo'
	];
}
