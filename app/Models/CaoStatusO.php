<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoStatusO
 * 
 * @property int $co_status_atual
 * @property string $ds_status
 *
 * @package App\Models
 */
class CaoStatusO extends Eloquent
{
	protected $primaryKey = 'co_status_atual';
	public $timestamps = false;

	protected $fillable = [
		'ds_status'
	];
}
