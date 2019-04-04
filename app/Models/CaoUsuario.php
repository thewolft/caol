<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Feb 2019 14:27:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaoUsuario
 * 
 * @property string $co_usuario
 * @property string $no_usuario
 * @property string $ds_senha
 * @property string $co_usuario_autorizacao
 * @property int $nu_matricula
 * @property \Carbon\Carbon $dt_nascimento
 * @property \Carbon\Carbon $dt_admissao_empresa
 * @property \Carbon\Carbon $dt_desligamento
 * @property \Carbon\Carbon $dt_inclusao
 * @property \Carbon\Carbon $dt_expiracao
 * @property string $nu_cpf
 * @property string $nu_rg
 * @property string $no_orgao_emissor
 * @property string $uf_orgao_emissor
 * @property string $ds_endereco
 * @property string $no_email
 * @property string $no_email_pessoal
 * @property string $nu_telefone
 * @property \Carbon\Carbon $dt_alteracao
 * @property string $url_foto
 * @property string $instant_messenger
 * @property int $icq
 * @property string $msn
 * @property string $yms
 * @property string $ds_comp_end
 * @property string $ds_bairro
 * @property string $nu_cep
 * @property string $no_cidade
 * @property string $uf_cidade
 * @property \Carbon\Carbon $dt_expedicao
 * 
 * @property \Illuminate\Database\Eloquent\Collection $cao_conhecimentos
 * @property \Illuminate\Database\Eloquent\Collection $cao_hist_ocorrencias_os
 * @property \Illuminate\Database\Eloquent\Collection $cao_permissaos
 * @property \Illuminate\Database\Eloquent\Collection $cao_pontos_conhecimentos
 * @property \Illuminate\Database\Eloquent\Collection $cao_salario_pags
 *
 * @package App\Models
 */
class CaoUsuario extends Eloquent
{
	protected $table = 'cao_usuario';
	protected $primaryKey = 'co_usuario';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'nu_matricula' => 'int',
		'icq' => 'int'
	];

	protected $dates = [
		'dt_nascimento',
		'dt_admissao_empresa',
		'dt_desligamento',
		'dt_inclusao',
		'dt_expiracao',
		'dt_alteracao',
		'dt_expedicao'
	];

	protected $fillable = [
		'no_usuario',
		'ds_senha',
		'co_usuario_autorizacao',
		'nu_matricula',
		'dt_nascimento',
		'dt_admissao_empresa',
		'dt_desligamento',
		'dt_inclusao',
		'dt_expiracao',
		'nu_cpf',
		'nu_rg',
		'no_orgao_emissor',
		'uf_orgao_emissor',
		'ds_endereco',
		'no_email',
		'no_email_pessoal',
		'nu_telefone',
		'dt_alteracao',
		'url_foto',
		'instant_messenger',
		'icq',
		'msn',
		'yms',
		'ds_comp_end',
		'ds_bairro',
		'nu_cep',
		'no_cidade',
		'uf_cidade',
		'dt_expedicao'
	];

	public function cao_conhecimentos()
	{
		return $this->hasMany(\App\Models\CaoConhecimento::class, 'usuario');
	}

	public function cao_hist_ocorrencias_os()
	{
		return $this->hasMany(\App\Models\CaoHistOcorrenciasO::class, 'co_usuario');
	}

	public function cao_permissaos()
	{
		return $this->hasMany(\App\Models\CaoPermissao::class, 'co_usuario');
	}

	public function cao_pontos_conhecimentos()
	{
		return $this->hasMany(\App\Models\CaoPontosConhecimento::class, 'co_coordenador');
	}

	public function cao_salario_pags()
	{
		return $this->hasMany(\App\Models\CaoSalarioPag::class, 'co_usuario');
	}
}
