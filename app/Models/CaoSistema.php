<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoSistema
 * 
 * @property int $co_sistema
 * @property int $co_cliente
 * @property string $co_usuario
 * @property int $co_arquitetura
 * @property string $no_sistema
 * @property string $ds_sistema_resumo
 * @property string $ds_caracteristica
 * @property string $ds_requisito
 * @property string $no_diretoria_solic
 * @property string $ddd_telefone_solic
 * @property string $nu_telefone_solic
 * @property string $no_usuario_solic
 * @property \Carbon\Carbon $dt_solicitacao
 * @property \Carbon\Carbon $dt_entrega
 * @property int $co_email
 *
 * @package App\Models
 */
class CaoSistema extends Eloquent
{
	protected $table = 'cao_sistema';
	protected $primaryKey = 'co_sistema';
	public $timestamps = false;

	protected $casts = [
		'co_cliente' => 'int',
		'co_arquitetura' => 'int',
		'co_email' => 'int'
	];

	protected $dates = [
		'dt_solicitacao',
		'dt_entrega'
	];

	protected $fillable = [
		'co_cliente',
		'co_usuario',
		'co_arquitetura',
		'no_sistema',
		'ds_sistema_resumo',
		'ds_caracteristica',
		'ds_requisito',
		'no_diretoria_solic',
		'ddd_telefone_solic',
		'nu_telefone_solic',
		'no_usuario_solic',
		'dt_solicitacao',
		'dt_entrega',
		'co_email'
	];
}
