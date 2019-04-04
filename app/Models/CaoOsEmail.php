<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoOsEmail
 * 
 * @property int $co_email
 * @property int $co_os
 * @property string $email
 * @property string $senha
 * @property string $nome
 * @property int $co_cliente
 * @property int $ativo
 * @property string $ddd
 * @property string $tel
 * @property string $cargo
 *
 * @package App\Models
 */
class CaoOsEmail extends Eloquent
{
	protected $table = 'cao_os_email';
	protected $primaryKey = 'co_email';
	public $timestamps = false;

	protected $casts = [
		'co_os' => 'int',
		'co_cliente' => 'int',
		'ativo' => 'int'
	];

	protected $fillable = [
		'co_os',
		'email',
		'senha',
		'nome',
		'co_cliente',
		'ativo',
		'ddd',
		'tel',
		'cargo'
	];
}
