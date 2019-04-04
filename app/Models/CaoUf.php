<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoUf
 * 
 * @property int $co_uf
 * @property string $ds_uf
 *
 * @package App\Models
 */
class CaoUf extends Eloquent
{
	protected $table = 'cao_uf';
	protected $primaryKey = 'co_uf';
	public $timestamps = false;

	protected $fillable = [
		'ds_uf'
	];
}
