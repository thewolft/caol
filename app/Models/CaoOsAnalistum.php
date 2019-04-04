<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoOsAnalistum
 * 
 * @property int $co_analista
 * @property int $co_os
 * @property string $co_usuario
 *
 * @package App\Models
 */
class CaoOsAnalistum extends Eloquent
{
	protected $primaryKey = 'co_analista';
	public $timestamps = false;

	protected $casts = [
		'co_os' => 'int'
	];

	protected $fillable = [
		'co_os',
		'co_usuario'
	];
}
