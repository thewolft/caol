<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoComplemento
 * 
 * @property int $co_complemento
 * @property string $ds_complemento
 *
 * @package App\Models
 */
class CaoComplemento extends Eloquent
{
	protected $table = 'cao_complemento';
	protected $primaryKey = 'co_complemento';
	public $timestamps = false;

	protected $fillable = [
		'ds_complemento'
	];
}
