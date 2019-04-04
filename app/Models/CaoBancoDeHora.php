<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoBancoDeHora
 * 
 * @property int $id
 * @property string $co_usuario
 * @property \Carbon\Carbon $data_cadastro
 * @property int $segundos
 * @property string $tipo
 *
 * @package App\Models
 */
class CaoBancoDeHora extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'segundos' => 'int'
	];

	protected $dates = [
		'data_cadastro'
	];

	protected $fillable = [
		'co_usuario',
		'data_cadastro',
		'segundos',
		'tipo'
	];
}
