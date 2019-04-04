<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoHelpStatusChamado
 * 
 * @property int $co_status
 * @property string $ds_status
 *
 * @package App\Models
 */
class CaoHelpStatusChamado extends Eloquent
{
	protected $table = 'cao_help_status_chamado';
	protected $primaryKey = 'co_status';
	public $timestamps = false;

	protected $fillable = [
		'ds_status'
	];
}
