<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoOsFase
 * 
 * @property int $co_fase
 * @property string $descricao
 * @property string $descricao_ingl
 * @property int $ordem
 *
 * @package App\Models
 */
class CaoOsFase extends Eloquent
{
	protected $table = 'cao_os_fase';
	protected $primaryKey = 'co_fase';
	public $timestamps = false;

	protected $casts = [
		'ordem' => 'int'
	];

	protected $fillable = [
		'descricao',
		'descricao_ingl',
		'ordem'
	];
}
