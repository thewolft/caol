<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoTipoOmbudsman
 * 
 * @property int $idtipo
 * @property string $descricao
 * 
 * @property \Illuminate\Database\Eloquent\Collection $cao_ombudsmen
 *
 * @package App\Models
 */
class CaoTipoOmbudsman extends Eloquent
{
	protected $table = 'cao_tipo_ombudsman';
	protected $primaryKey = 'idtipo';
	public $timestamps = false;

	protected $fillable = [
		'descricao'
	];

	public function cao_ombudsmen()
	{
		return $this->hasMany(\App\Models\CaoOmbudsman::class, 'idtipo');
	}
}
