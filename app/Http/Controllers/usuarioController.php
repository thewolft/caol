<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use caol\Http\Requests;
use App\Models\CaoUsuario;


class usuarioController extends Controller
{

	public function read ()
	{
		$ids = [0,1,2];
		$consultores = CaoUsuario::select('cao_usuario.*')
		->join('permissao_sistema','permissao_sistema.co_usuario','=','cao_usuario.co_usuario')
		->where('permissao_sistema.co_sistema','=',1)
		->where('permissao_sistema.in_ativo','=','S')
		->whereIn('permissao_sistema.co_tipo_usuario',$ids)
		->get()
		;
		return view ('test',['consultores'=>$consultores]);
	}
}
