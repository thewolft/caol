<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoEscritorio
 * 
 * @property int $co_escritorio
 * @property string $local
 *
 * @package App\Models
 */
class CaoEscritorio extends Eloquent
{
	protected $table = 'cao_escritorio';
	protected $primaryKey = 'co_escritorio';
	public $timestamps = false;

	protected $fillable = [
		'local'
	];
}
