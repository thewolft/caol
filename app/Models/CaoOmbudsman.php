<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoOmbudsman
 * 
 * @property int $id
 * @property int $idtipo
 * @property int $idcategoria
 * @property \Carbon\Carbon $data
 * @property string $comentario
 * @property int $co_escritorio
 * 
 * @property \App\Models\CaoTipoOmbudsman $cao_tipo_ombudsman
 * @property \App\Models\CaoCategoriasOmbudsman $cao_categorias_ombudsman
 *
 * @package App\Models
 */
class CaoOmbudsman extends Eloquent
{
	protected $table = 'cao_ombudsman';
	public $timestamps = false;

	protected $casts = [
		'idtipo' => 'int',
		'idcategoria' => 'int',
		'co_escritorio' => 'int'
	];

	protected $dates = [
		'data'
	];

	protected $fillable = [
		'idtipo',
		'idcategoria',
		'data',
		'comentario',
		'co_escritorio'
	];

	public function cao_tipo_ombudsman()
	{
		return $this->belongsTo(\App\Models\CaoTipoOmbudsman::class, 'idtipo');
	}

	public function cao_categorias_ombudsman()
	{
		return $this->belongsTo(\App\Models\CaoCategoriasOmbudsman::class, 'idcategoria');
	}
}
