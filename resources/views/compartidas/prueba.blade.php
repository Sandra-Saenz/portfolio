<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>GRAFICA</title>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
</head>
<body>
  <div class="container mt-5">
    <div class="row">
      <div class="col">
        <div id="container">

        </div>

      </div>
    </div>
  </div>


</body>

<script>

  Highcharts.chart('container', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'informe general'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.y:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.y:.1f} %'
            }
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: {!! $promedios !!}
    }]
});
</script>

</html>
