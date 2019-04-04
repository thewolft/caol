<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoO
 * 
 * @property int $co_os
 * @property int $nu_os
 * @property int $co_sistema
 * @property string $co_usuario
 * @property int $co_arquitetura
 * @property string $ds_os
 * @property string $ds_caracteristica
 * @property string $ds_requisito
 * @property \Carbon\Carbon $dt_inicio
 * @property \Carbon\Carbon $dt_fim
 * @property int $co_status
 * @property string $diretoria_sol
 * @property \Carbon\Carbon $dt_sol
 * @property string $nu_tel_sol
 * @property string $ddd_tel_sol
 * @property string $nu_tel_sol2
 * @property string $ddd_tel_sol2
 * @property string $usuario_sol
 * @property \Carbon\Carbon $dt_imp
 * @property \Carbon\Carbon $dt_garantia
 * @property int $co_email
 * @property int $co_os_prospect_rel
 * 
 * @property \Illuminate\Database\Eloquent\Collection $cao_hist_ocorrencias_os
 *
 * @package App\Models
 */
class CaoO extends Eloquent
{
	protected $primaryKey = 'co_os';
	public $timestamps = false;

	protected $casts = [
		'nu_os' => 'int',
		'co_sistema' => 'int',
		'co_arquitetura' => 'int',
		'co_status' => 'int',
		'co_email' => 'int',
		'co_os_prospect_rel' => 'int'
	];

	protected $dates = [
		'dt_inicio',
		'dt_fim',
		'dt_sol',
		'dt_imp',
		'dt_garantia'
	];

	protected $fillable = [
		'nu_os',
		'co_sistema',
		'co_usuario',
		'co_arquitetura',
		'ds_os',
		'ds_caracteristica',
		'ds_requisito',
		'dt_inicio',
		'dt_fim',
		'co_status',
		'diretoria_sol',
		'dt_sol',
		'nu_tel_sol',
		'ddd_tel_sol',
		'nu_tel_sol2',
		'ddd_tel_sol2',
		'usuario_sol',
		'dt_imp',
		'dt_garantia',
		'co_email',
		'co_os_prospect_rel'
	];

	public function cao_hist_ocorrencias_os()
	{
		return $this->hasMany(\App\Models\CaoHistOcorrenciasO::class, 'co_os');
	}
}
