<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoCidade
 * 
 * @property int $co_cidade
 * @property string $no_cidade
 * @property int $co_uf
 *
 * @package App\Models
 */
class CaoCidade extends Eloquent
{
	protected $table = 'cao_cidade';
	protected $primaryKey = 'co_cidade';
	public $timestamps = false;

	protected $casts = [
		'co_uf' => 'int'
	];

	protected $fillable = [
		'no_cidade',
		'co_uf'
	];
}
