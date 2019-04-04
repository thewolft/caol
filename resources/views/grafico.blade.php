<?php
$data=$_REQUEST['datos'];
$fecha= array_values(array_column($data, 'fecha'));
$promedio= array_values(array_column($data, 'promedio'));

?>
<div class="box box-danger">
<div class="box-header with-border">
<h3 class="box-title">Pizza</h3>

<div class="box-tools pull-right">
<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
</button>
<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
</div>
</div>
<div class="box-body">
<div id="container"></div>
</div>
<!-- /.box-body -->
</div>
<!-- /.box -->
<script>
$(function () {
    var fecha = <?php echo json_encode ($fecha)?>;
    var promedio = <?php echo json_encode ($promedio)?>;
    var datos = <?php echo json_encode($data);?>;
    var rang = datos[0]['rango'];
    var cant = fecha.length;
    var labels=[];
    var densityData2=[];
    for (var i = 0;i<cant;i++) {
        var values =[];
        labels.push(fecha[i]);
        var cant2 = datos[i]['length'];
    }
    for (var x = 0;x< cant2;x++) {
        var data=[];
        var label=[];
        label.push(datos[0][x]['consultor']);
        for (var r = 0;r<cant;r++) {
            data.push(parseInt(datos[r][x]['liquido']));
        }
        var $dat={
            type: 'column',
            name: label,
            data: data,
        }
        densityData2.push($dat);
    }
    var prom =[];
    for (var i = 0; i< promedio.length; i++) {
        prom.push(parseInt(promedio[i]));
    }
    var line = {
        type: 'spline',
        name: 'Average',
        data: prom,
        marker: {
            lineWidth: 2,
            lineColor: Highcharts.getOptions().colors[3],
            fillColor: 'white'
        }
    };
    densityData2.push(line);
    Highcharts.chart('container', {
        title: {
            text: 'Performance Comercial '+rang
        },
        xAxis: {
            categories: labels
        },
        labels: {
            items: [{
                style: {
                    left: '50px',
                    top: '18px',
                    color: (Highcharts.theme && Highcharts.theme.textColor) || 'black'
                }
            }]
        },
        series: densityData2,
        exporting: {
            enabled:false
        }
    });
});
</script>