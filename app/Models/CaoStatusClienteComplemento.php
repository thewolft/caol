<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoStatusClienteComplemento
 * 
 * @property int $co_complemento_status
 * @property string $ds_status
 * @property int $co_status
 *
 * @package App\Models
 */
class CaoStatusClienteComplemento extends Eloquent
{
	protected $table = 'cao_status_cliente_complemento';
	protected $primaryKey = 'co_complemento_status';
	public $timestamps = false;

	protected $casts = [
		'co_status' => 'int'
	];

	protected $fillable = [
		'ds_status',
		'co_status'
	];
}
