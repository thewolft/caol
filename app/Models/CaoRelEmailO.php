<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoRelEmailO
 * 
 * @property int $id
 * @property int $co_email
 * @property int $co_os
 *
 * @package App\Models
 */
class CaoRelEmailO extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'co_email' => 'int',
		'co_os' => 'int'
	];

	protected $fillable = [
		'co_email',
		'co_os'
	];
}
