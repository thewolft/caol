<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoTipoCusto
 * 
 * @property int $co_tipo_custo
 * @property string $descricao
 *
 * @package App\Models
 */
class CaoTipoCusto extends Eloquent
{
	protected $table = 'cao_tipo_custo';
	protected $primaryKey = 'co_tipo_custo';
	public $timestamps = false;

	protected $fillable = [
		'descricao'
	];
}
