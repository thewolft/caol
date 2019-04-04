<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoNoticium
 * 
 * @property int $co_noticia
 * @property string $assunto
 * @property string $descricao
 * @property string $foto
 * @property string $co_usuario
 * @property \Carbon\Carbon $dt_noticia
 *
 * @package App\Models
 */
class CaoNoticium extends Eloquent
{
	protected $primaryKey = 'co_noticia';
	public $timestamps = false;

	protected $dates = [
		'dt_noticia'
	];

	protected $fillable = [
		'assunto',
		'descricao',
		'foto',
		'co_usuario',
		'dt_noticia'
	];
}
