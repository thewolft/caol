<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoHelpTelaChamado
 * 
 * @property int $co_tela
 * @property int $co_cliente
 * @property int $co_sistema
 * @property string $ds_tela
 *
 * @package App\Models
 */
class CaoHelpTelaChamado extends Eloquent
{
	protected $table = 'cao_help_tela_chamado';
	protected $primaryKey = 'co_tela';
	public $timestamps = false;

	protected $casts = [
		'co_cliente' => 'int',
		'co_sistema' => 'int'
	];

	protected $fillable = [
		'co_cliente',
		'co_sistema',
		'ds_tela'
	];
}
