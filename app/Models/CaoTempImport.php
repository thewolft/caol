<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoTempImport
 * 
 * @property int $codigo
 * @property string $descricao
 *
 * @package App\Models
 */
class CaoTempImport extends Eloquent
{
	protected $table = 'cao_temp_import';
	protected $primaryKey = 'codigo';
	public $timestamps = false;

	protected $fillable = [
		'descricao'
	];
}
