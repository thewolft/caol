<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoConhecimento
 * 
 * @property int $idconhecimento
 * @property string $assunto
 * @property string $conhecimento
 * @property string $url
 * @property string $tags
 * @property string $usuario
 * @property \Carbon\Carbon $datahora
 * 
 * @property \App\Models\CaoUsuario $cao_usuario
 * @property \Illuminate\Database\Eloquent\Collection $cao_conhecimentos_fontes
 * @property \Illuminate\Database\Eloquent\Collection $cao_pontos_conhecimentos
 *
 * @package App\Models
 */
class CaoConhecimento extends Eloquent
{
	protected $primaryKey = 'idconhecimento';
	public $timestamps = false;

	protected $dates = [
		'datahora'
	];

	protected $fillable = [
		'assunto',
		'conhecimento',
		'url',
		'tags',
		'usuario',
		'datahora'
	];

	public function cao_usuario()
	{
		return $this->belongsTo(\App\Models\CaoUsuario::class, 'usuario');
	}

	public function cao_conhecimentos_fontes()
	{
		return $this->hasMany(\App\Models\CaoConhecimentosFonte::class, 'idconhecimento');
	}

	public function cao_pontos_conhecimentos()
	{
		return $this->hasMany(\App\Models\CaoPontosConhecimento::class, 'idconhecimento');
	}
}
