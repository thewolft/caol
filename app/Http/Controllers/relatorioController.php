<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;
use DateInterval;
//use caol\Http\Requests;
use App\Models\CaoFatura;
use App\Models\CaoSalario;
use App\Models\CaoUsuario;



class relatorioController extends Controller
{

	public function getRelatorio(Request $request)
	{
	$data = $request->all();
	$rango = $data['rango'];
	$consultores = $data['consultores'];
	$fecha = explode('-', $rango);


	$f1 = new DateTime($fecha[0]);
    $f2 = new DateTime($fecha[1]);

    $cant_meses = $f2->diff($f1);
    $cant_meses = $cant_meses->format('%m'); //devuelve el numero de meses entre ambas fechas.
    $listaMeses = array($f1->format('Y-m-d'));

    for ($i = 1; $i <= $cant_meses; $i++) {

        $ultimaFecha = end($listaMeses);
        $ultimaFecha = new DateTime($ultimaFecha);
        $nuevaFecha = $ultimaFecha->add(new DateInterval("P1M"));
        $nuevaFecha = $nuevaFecha->format('Y-m-d');

        array_push($listaMeses, $nuevaFecha) ;
    }

    for ($i = 0; $i < count($consultores); $i++) {
    	$consultor=$consultores[$i];

    	$cons = CaoUsuario::select('cao_usuario.*')
    	->where('cao_usuario.no_usuario','=',$consultor)
    	->get();
    	$user=$cons[0]['co_usuario'];

    	$salario = CaoSalario::select('cao_salario.brut_salario')
    	->where('cao_salario.co_usuario','=',$user)
    	->get();
    	for ($r = 0; $r < count($salario); $r++) {
    		$fixo=$salario[0]['brut_salario'];
    	}
    	for ($x = 0; $x < count($listaMeses); $x++) {
    		$fecha = $listaMeses[$x];
    		$mes = substr($fecha,0,-3);

    		$receita = CaoFatura::select('cao_fatura.*')
    		->join('cao_os','cao_os.co_os','=','cao_fatura.co_os')
    		->where('cao_os.co_usuario','=',$user)
    		->where('cao_fatura.data_emissao','like',$mes.'%')
    		->get()
    		;
    		
    		$liquido=0;
    		$comision=0;
    		for ($z = 0; $z < count($receita); $z++) {
    			$valor = $receita[$z]['valor'];
    			$porc =$receita[$z]['total_imp_inc'];

    			$liquido += $valor * (100-($porc/100));
    			$comision += ($valor -($valor * ($porc/100))*($receita[$z]['comissao_cn']/100));

    		}
    			$lucro= $liquido -($fixo+$comision);

    			$datos[$i][$x]['salario']=$fixo;
    			$datos[$i][$x]['liquido']=$liquido;
    			$datos[$i][$x]['comissao']=$comision;
    			$datos[$i][$x]['lucro']=$lucro;
    			$datos[$i][$x]['fecha']=$fecha;
    	}
    }
  
        return response()->json(['success'=>'Got Simple Ajax Request.','data'=> $datos]);


	}

    public function getPizza(Request $request)
    {
    $data = $request->all();
    $rango = $data['rango'];
    $consultores = $data['consultores'];
    $fecha = explode('-', $rango);


    $f1 = new DateTime($fecha[0]);
    $f2 = new DateTime($fecha[1]);

    $cant_meses = $f2->diff($f1);
    $cant_meses = $cant_meses->format('%m'); //devuelve el numero de meses entre ambas fechas.
    $listaMeses = array($f1->format('Y-m-d'));

    for ($i = 1; $i <= $cant_meses; $i++) {

        $ultimaFecha = end($listaMeses);
        $ultimaFecha = new DateTime($ultimaFecha);
        $nuevaFecha = $ultimaFecha->add(new DateInterval("P1M"));
        $nuevaFecha = $nuevaFecha->format('Y-m-d');

        array_push($listaMeses, $nuevaFecha) ;
    }

    for ($i = 0; $i < count($consultores); $i++) {
        $consultor=$consultores[$i];

        $cons = CaoUsuario::select('cao_usuario.*')
        ->where('cao_usuario.no_usuario','=',$consultor)
        ->get();
        $user=$cons[0]['co_usuario'];
       

            $receita = CaoFatura::select('cao_fatura.*')
            ->join('cao_os','cao_os.co_os','=','cao_fatura.co_os')
            ->where('cao_os.co_usuario','=',$user)
            ->whereBetween('cao_fatura.data_emissao',array($f1,$f2))
            ->get()
            ;
            //var_dump($receita);
            $liquido=0;
            for ($z = 0; $z < count($receita); $z++) {
                $valor = $receita[$z]['valor'];
                $porc =$receita[$z]['total_imp_inc'];

                $liquido += $valor * (100-($porc/100));
            }
                $datos[$i]['consultor']=$consultor;
                $datos[$i]['liquido']=$liquido;
                $datos[$i]['fecha']=$fecha;
                
        
    }
  
        return response()->json(['success'=>'Got Simple Ajax Request.','data'=> $datos]);
    }
     public function getGrafico(Request $request)
    {
    $data = $request->all();
    $rango = $data['rango'];
    $consultores = $data['consultores'];
    $fecha = explode('-', $rango);


    $f1 = new DateTime($fecha[0]);
    $f2 = new DateTime($fecha[1]);

    $cant_meses = $f2->diff($f1);
    $cant_meses = $cant_meses->format('%m'); //devuelve el numero de meses entre ambas fechas.
    $listaMeses = array($f1->format('Y-m-d'));

    for ($i = 1; $i <= $cant_meses; $i++) {

        $ultimaFecha = end($listaMeses);
        $ultimaFecha = new DateTime($ultimaFecha);
        $nuevaFecha = $ultimaFecha->add(new DateInterval("P1M"));
        $nuevaFecha = $nuevaFecha->format('Y-m-d');

        array_push($listaMeses, $nuevaFecha) ;
    }
for ($x = 0; $x < count($listaMeses); $x++) {
        $fecha = $listaMeses[$x];
        $mes = substr($fecha,0,-3);
        $nuevaFecha = new DateTime($fecha);
        $nuevaFecha = $nuevaFecha->format('F');
        $cant=count($consultores);
         $prom=0;
        for ($i = 0; $i < count($consultores); $i++) {
            $consultor=$consultores[$i];

            $cons = CaoUsuario::select('cao_usuario.*')
            ->where('cao_usuario.no_usuario','=',$consultor)
            ->get();
            $user=$cons[0]['co_usuario'];

            $salario = CaoSalario::select('cao_salario.brut_salario')
            ->where('cao_salario.co_usuario','=',$user)
            ->get();
            for ($r = 0; $r < count($salario); $r++) {
                $fixo=$salario[0]['brut_salario'];
                $prom=$prom+$fixo;
            }
             $receita = CaoFatura::select('cao_fatura.*')
            ->join('cao_os','cao_os.co_os','=','cao_fatura.co_os')
            ->where('cao_os.co_usuario','=',$user)
            ->where('cao_fatura.data_emissao','like',$mes.'%')
            ->get()
            ;
            $liquido=0;

            for ($z = 0; $z < count($receita); $z++) {
                $valor = $receita[$z]['valor'];
                $porc =$receita[$z]['total_imp_inc'];
                $liquido += $valor * (100-($porc/100));
            }
                $datos[$x][$i]['salario']=$fixo;
                $datos[$x][$i]['liquido']=$liquido;
                $datos[$x][$i]['consultor']=$consultor;
        }
        $prom=$prom/$cant;
        $datos[$x]['rango']=$rango;
        $datos[$x]['fecha']=$nuevaFecha;
        $datos[$x]['promedio']=$prom;
        $datos[$x]['length']=$cant;

    }
        return response()->json(['success'=>'Got Simple Ajax Request.','data'=> $datos]);
    }
}
