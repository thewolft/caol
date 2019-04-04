<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoConhecimentosFonte
 * 
 * @property int $idfonte
 * @property int $idconhecimento
 * @property \Carbon\Carbon $datahora
 * @property string $arquivo
 * @property string $caminho
 * 
 * @property \App\Models\CaoConhecimento $cao_conhecimento
 *
 * @package App\Models
 */
class CaoConhecimentosFonte extends Eloquent
{
	protected $primaryKey = 'idfonte';
	public $timestamps = false;

	protected $casts = [
		'idconhecimento' => 'int'
	];

	protected $dates = [
		'datahora'
	];

	protected $fillable = [
		'idconhecimento',
		'datahora',
		'arquivo',
		'caminho'
	];

	public function cao_conhecimento()
	{
		return $this->belongsTo(\App\Models\CaoConhecimento::class, 'idconhecimento');
	}
}
