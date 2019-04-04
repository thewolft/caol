<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoMenuContador
 * 
 * @property string $co_usuario
 * @property int $co_menu
 * @property int $nu_pontos
 * @property bool $in_processado
 *
 * @package App\Models
 */
class CaoMenuContador extends Eloquent
{
	protected $table = 'cao_menu_contador';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'co_menu' => 'int',
		'nu_pontos' => 'int',
		'in_processado' => 'bool'
	];

	protected $fillable = [
		'nu_pontos',
		'in_processado'
	];
}
