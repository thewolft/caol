<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoMenu
 * 
 * @property int $co_menu
 * @property string $ds_menu
 * @property string $ds_pagina
 * @property string $ds_imagem
 *
 * @package App\Models
 */
class CaoMenu extends Eloquent
{
	protected $table = 'cao_menu';
	protected $primaryKey = 'co_menu';
	public $timestamps = false;

	protected $fillable = [
		'ds_menu',
		'ds_pagina',
		'ds_imagem'
	];
}
