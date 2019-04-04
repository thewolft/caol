<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoHelpAutor
 * 
 * @property int $co_autor
 * @property string $no_autor
 * @property int $co_filial
 * @property string $nu_ddd1
 * @property string $nu_tel1
 * @property string $nu_ramal1
 * @property string $nu_ddd2
 * @property string $nu_tel2
 * @property string $nu_ramal2
 * @property string $ds_email
 * @property string $ds_funcao
 *
 * @package App\Models
 */
class CaoHelpAutor extends Eloquent
{
	protected $table = 'cao_help_autor';
	protected $primaryKey = 'co_autor';
	public $timestamps = false;

	protected $casts = [
		'co_filial' => 'int'
	];

	protected $fillable = [
		'no_autor',
		'co_filial',
		'nu_ddd1',
		'nu_tel1',
		'nu_ramal1',
		'nu_ddd2',
		'nu_tel2',
		'nu_ramal2',
		'ds_email',
		'ds_funcao'
	];
}
