<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoHelpFilial
 * 
 * @property int $co_filial
 * @property string $no_filial
 * @property int $co_cliente
 * @property string $estado
 *
 * @package App\Models
 */
class CaoHelpFilial extends Eloquent
{
	protected $table = 'cao_help_filial';
	protected $primaryKey = 'co_filial';
	public $timestamps = false;

	protected $casts = [
		'co_cliente' => 'int'
	];

	protected $fillable = [
		'no_filial',
		'co_cliente',
		'estado'
	];
}
