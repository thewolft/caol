<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoDocumentacaoOutro
 * 
 * @property int $id
 * @property string $nome
 * @property int $co_sistema
 *
 * @package App\Models
 */
class CaoDocumentacaoOutro extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'co_sistema' => 'int'
	];

	protected $fillable = [
		'nome',
		'co_sistema'
	];
}
