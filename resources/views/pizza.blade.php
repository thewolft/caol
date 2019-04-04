<?php
    $data=$_REQUEST['datos'];

    $consultor=$_REQUEST['consultores'];
    $listado = "";
    $liquido = "";
            for($x=0;$x < count($consultor); $x++) {
                
                    $liquido.="".$data[$x]['liquido'].",";
                    $listado.="".$data[$x]['consultor'].",";
            }
            $listado = substr($listado, 0, -1);
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
       <div id='container'>
    
</div>
    </div>
    <!-- /.box-body -->
</div>

<!-- /.box -->
<script> 
$(function () {

    var consultor = "<?php echo $listado?>";
    var liquido = "<?php echo $liquido?>";
    var consultores = consultor.split(',');
    var receita = liquido.split(',');
    var dat=[];
    for (var i = 0;i<consultores.length;i++) {
        dat.push({
            name:consultores[i],
            y: parseInt(receita[i]),
            sliced: true,
            selected: true
        });
    }
    var PieData=[{
        type: 'pie',
        name: 'Browser share',
        data:dat
    }];
       

    Highcharts.chart('container', {
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45,
                beta: 0
            }
        },
        title: {
            text: 'Browser market shares at a specific website, 2014'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                depth: 35,
                dataLabels: {
                enabled: false
            },
                showInLegend: true
            }
        },
        series: PieData,
        exporting: {
                enabled:false
        }
    });
});
</script>