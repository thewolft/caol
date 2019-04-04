 $(function () {
        var fecha = <?php echo json_encode ($fecha)?>;
        var promedio = <?php echo json_encode ($promedio)?>;
        var datos = <?php echo json_encode($data);?>;
        //var fechas = fecha.split(',');
       var cant = fecha.length;
        //console.log(fecha);
        //console.log(datos);
        
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')

function randomColor() {
    var color = Math.floor(0x1000000 * Math.random()).toString(16);
    return '#' + ('000000' + color).slice(-6);
}
  
 
Chart.defaults.global.defaultFontFamily = "Lato";
Chart.defaults.global.defaultFontSize = 18;
  var labels=[];
  var densityData2=[]

  var line = {
      label: 'Cuxto Fixo Medio',
      data: promedio,
      lineTension: 0.3,
      fill: false,
      borderColor:  'rgba(0, 0, 0, .5)',
      backgroundColor: ' rgba(0, 0, 0, .5)',
      pointBorderColor: ' rgba(0, 0, 0, .5)',
      pointBackgroundColor: ' rgba(0, 0, 0, .5)',
      pointRadius: 5,
      pointHoverRadius: 15,
      pointHitRadius: 50,
      pointBorderWidth: 2,

      type: 'line'
  };
 densityData2.push(line);

     //console.log(datos[1][5]);
   for (var i = 0;i<cant;i++) {
      var values =[];
      labels.push(fecha[i]);
      var cant2 = datos[i]['length'];

      console.log('result: ' + JSON.stringify( cant) );
    }
    function random_rgba() {
    var o = Math.round, r = Math.random, s = 255;
    return 'rgba(' + o(r()*s) + ',' + o(r()*s) + ',' + o(r()*s) + ',' + r().toFixed(1) + ')';
}
    function randomColor() {
      var color = Math.floor(0x1000000 * Math.random()).toString(16);
      return '#' + ('000000' + color).slice(-6);
    }
    for (var x = 0;x< cant2;x++) {
        var data=[];
        var label=[];

         label.push(datos[0][x]['consultor']);
        for (var r = 0;r<cant;r++) {
         
         data.push(datos[r][x]['liquido']);
        }
         var color = random_rgba();

        var $dat={
            label: label,
            data: data,
            backgroundColor: color,
            borderWidth: 0,
            yAxisID: "y-axis-density"
          }
          densityData2.push($dat);
      }
    console.log(densityData2);
 

var planetData = {
  labels: labels,
  datasets: densityData2
};


var chartOptions = {
  legend: {
                display: true,
                position: 'bottom'
          },
  title: {
      display: true,
      text: 'Performance Comercial'
    },
  scales: {
    xAxes: [{
      barPercentage: 1,
      categoryPercentage: 0.6,

    }],
    yAxes: [{
      gridLines: {
        color: "black",
        borderDash: [2, 5],
      },
      id: "y-axis-density",
      ticks: {
                beginAtZero:true
            }
    
    }]
  }
};

var barChart = new Chart(pieChartCanvas, {
  type: 'bar',
  data: planetData,
  options: chartOptions
});




});