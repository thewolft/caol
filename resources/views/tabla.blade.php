<?php
	$data=$_REQUEST['datos'];
	$consultor=$_REQUEST['consultores'];
?>
@for ($i = 0; $i < count($data); $i++)
<div class="box">
    <div class="box-body">
        <div class="form-group">
            <label>{{$consultor[$i]}}:</label>
        </div>

		<table id="example2" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Periodo</th>
					<th>Receita Liquida</th>
					<th>Custo Fixo</th>
					<th>Comissão</th>
					<th>Lucro</th>
				</tr>
			</thead>
			<tbody>
				@for ($x = 0; $x < count($data[$i]); $x++)
				<tr>
					<td>{{$data[$i][$x]['fecha']}}</td>
					<td>{{$data[$i][$x]['liquido']}}</td>
					<td>{{$data[$i][$x]['salario']}}</td>
					<td>{{$data[$i][$x]['comissao']}}</td>
					<td>{{$data[$i][$x]['lucro']}}</td>
				</tr>
				@endfor
			</tbody>
		</table>
    </div>
</div>
@endfor