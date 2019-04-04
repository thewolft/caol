<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoEscalaRanking
 * 
 * @property int $idescala
 * @property int $qtd_visual
 * @property int $pontuacao
 * 
 * @property \Illuminate\Database\Eloquent\Collection $cao_pontos_conhecimentos
 *
 * @package App\Models
 */
class CaoEscalaRanking extends Eloquent
{
	protected $table = 'cao_escala_ranking';
	protected $primaryKey = 'idescala';
	public $timestamps = false;

	protected $casts = [
		'qtd_visual' => 'int',
		'pontuacao' => 'int'
	];

	protected $fillable = [
		'qtd_visual',
		'pontuacao'
	];

	public function cao_pontos_conhecimentos()
	{
		return $this->hasMany(\App\Models\CaoPontosConhecimento::class, 'pontuacao');
	}
}
