<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoHelpMotivoChamado
 * 
 * @property int $co_motivo
 * @property string $ds_motivo
 *
 * @package App\Models
 */
class CaoHelpMotivoChamado extends Eloquent
{
	protected $table = 'cao_help_motivo_chamado';
	protected $primaryKey = 'co_motivo';
	public $timestamps = false;

	protected $fillable = [
		'ds_motivo'
	];
}
