$(document).ready(function() {

  var ctx = document.getElementById("myChart2");
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Hoy"],
        datasets: [{
            label: '# De entradas',
            data: [12],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',

            ],
            borderColor: [
                'rgba(255,99,132,1)',

            ],
            borderWidth: 1
        },{
            label: '# De salidas',
            data: [12],
            backgroundColor: [
                'rgba(91, 51, 255, 0.2)',

            ],
            borderColor: [
                'rgba(91, 51, 255, 1)',

            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});

$.ajax({
  url: 'adminAdds/historial/consultarHistorialDiario.php',
  type: 'POST',
  datatype: 'json',
  success: function(data){
      var a = JSON.parse(data);
      myChart.data.datasets[0].data[0]=a[0].cuentaE;
      myChart.data.datasets[1].data[0]=a[1].cuentaS;
      myChart.update();
    }
  });
});


function fAjax(){
  var temp;
  $.ajax({
    url: 'adminAdds/historial/consultarHistorialDiario.php',
    type: 'POST',
    data: $("#formReporte").serialize(),
    datatype: 'json',
    success: function(data){
    }
  });
}
