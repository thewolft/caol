<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoArquiteturaO
 * 
 * @property int $co_arquitetura
 * @property string $ds_arquitetura
 *
 * @package App\Models
 */
class CaoArquiteturaO extends Eloquent
{
	protected $primaryKey = 'co_arquitetura';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'co_arquitetura' => 'int'
	];

	protected $fillable = [
		'ds_arquitetura'
	];
}
