<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoOsItemMenu
 * 
 * @property int $co_item
 * @property string $ds_item
 * @property int $co_sistema
 *
 * @package App\Models
 */
class CaoOsItemMenu extends Eloquent
{
	protected $table = 'cao_os_item_menu';
	protected $primaryKey = 'co_item';
	public $timestamps = false;

	protected $casts = [
		'co_sistema' => 'int'
	];

	protected $fillable = [
		'ds_item',
		'co_sistema'
	];
}
