<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoBoleto
 * 
 * @property int $co_boleto
 * @property int $co_cliente
 * @property int $co_sistema
 * @property int $co_os
 * @property string $valor
 * @property string $vencimento
 * @property int $status
 * @property string $boleto
 * @property string $linha_dig
 * @property string $parcela
 *
 * @package App\Models
 */
class CaoBoleto extends Eloquent
{
	protected $table = 'cao_boleto';
	protected $primaryKey = 'co_boleto';
	public $timestamps = false;

	protected $casts = [
		'co_cliente' => 'int',
		'co_sistema' => 'int',
		'co_os' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'co_cliente',
		'co_sistema',
		'co_os',
		'valor',
		'vencimento',
		'status',
		'boleto',
		'linha_dig',
		'parcela'
	];
}
