<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoAviso
 * 
 * @property int $co_aviso
 * @property string $ds_aviso
 *
 * @package App\Models
 */
class CaoAviso extends Eloquent
{
	protected $table = 'cao_aviso';
	protected $primaryKey = 'co_aviso';
	public $timestamps = false;

	protected $fillable = [
		'ds_aviso'
	];
}
