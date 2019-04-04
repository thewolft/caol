<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoCliente
 * 
 * @property int $co_cliente
 * @property string $no_razao
 * @property string $no_fantasia
 * @property string $no_contato
 * @property string $nu_telefone
 * @property string $nu_ramal
 * @property string $nu_cnpj
 * @property string $ds_endereco
 * @property int $nu_numero
 * @property string $ds_complemento
 * @property string $no_bairro
 * @property string $nu_cep
 * @property string $no_pais
 * @property int $co_ramo
 * @property int $co_cidade
 * @property int $co_status
 * @property string $ds_site
 * @property string $ds_email
 * @property string $ds_cargo_contato
 * @property string $tp_cliente
 * @property string $ds_referencia
 * @property int $co_complemento_status
 * @property string $nu_fax
 * @property string $ddd2
 * @property string $telefone2
 *
 * @package App\Models
 */
class CaoCliente extends Eloquent
{
	protected $table = 'cao_cliente';
	protected $primaryKey = 'co_cliente';
	public $timestamps = false;

	protected $casts = [
		'nu_numero' => 'int',
		'co_ramo' => 'int',
		'co_cidade' => 'int',
		'co_status' => 'int',
		'co_complemento_status' => 'int'
	];

	protected $fillable = [
		'no_razao',
		'no_fantasia',
		'no_contato',
		'nu_telefone',
		'nu_ramal',
		'nu_cnpj',
		'ds_endereco',
		'nu_numero',
		'ds_complemento',
		'no_bairro',
		'nu_cep',
		'no_pais',
		'co_ramo',
		'co_cidade',
		'co_status',
		'ds_site',
		'ds_email',
		'ds_cargo_contato',
		'tp_cliente',
		'ds_referencia',
		'co_complemento_status',
		'nu_fax',
		'ddd2',
		'telefone2'
	];
}
