<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoServico
 * 
 * @property int $co_servico
 * @property string $ds_servico
 *
 * @package App\Models
 */
class CaoServico extends Eloquent
{
	protected $table = 'cao_servico';
	protected $primaryKey = 'co_servico';
	public $timestamps = false;

	protected $fillable = [
		'ds_servico'
	];
}
