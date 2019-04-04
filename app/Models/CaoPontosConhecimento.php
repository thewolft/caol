<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoPontosConhecimento
 * 
 * @property int $idpontos
 * @property int $pontuacao
 * @property string $co_coordenador
 * @property int $idconhecimento
 * 
 * @property \App\Models\CaoEscalaRanking $cao_escala_ranking
 * @property \App\Models\CaoUsuario $cao_usuario
 * @property \App\Models\CaoConhecimento $cao_conhecimento
 *
 * @package App\Models
 */
class CaoPontosConhecimento extends Eloquent
{
	protected $table = 'cao_pontos_conhecimento';
	protected $primaryKey = 'idpontos';
	public $timestamps = false;

	protected $casts = [
		'pontuacao' => 'int',
		'idconhecimento' => 'int'
	];

	protected $fillable = [
		'pontuacao',
		'co_coordenador',
		'idconhecimento'
	];

	public function cao_escala_ranking()
	{
		return $this->belongsTo(\App\Models\CaoEscalaRanking::class, 'pontuacao');
	}

	public function cao_usuario()
	{
		return $this->belongsTo(\App\Models\CaoUsuario::class, 'co_coordenador');
	}

	public function cao_conhecimento()
	{
		return $this->belongsTo(\App\Models\CaoConhecimento::class, 'idconhecimento');
	}
}
