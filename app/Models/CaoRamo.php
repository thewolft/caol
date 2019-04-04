<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoRamo
 * 
 * @property int $co_ramo
 * @property string $ds_ramo
 *
 * @package App\Models
 */
class CaoRamo extends Eloquent
{
	protected $table = 'cao_ramo';
	protected $primaryKey = 'co_ramo';
	public $timestamps = false;

	protected $fillable = [
		'ds_ramo'
	];
}
