<script src="Highcharts/highcharts.js"></script>
<script src="Highcharts/series-label.js"></script>
<script src="Highcharts/exporting.js"></script>
<script src="Highcharts/export-data.js"></script>
<div id="container"></div>
<script type="text/javascript">
Highcharts.chart('container', {
    chart: {
        zoomType: 'x'
    },
    title: {
        text: 'Producción por minuto por fases',
    },
    xAxis: {
        categories: [<?php foreach ($data as $result){ ?>
            '<?php echo htmlentities($result['Fecha']); ?>',
        <?php }?>]
                                    },
    yAxis: {
        title: {
            text: 'Produccion por minuto'
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },
    plotOptions: {
        series: {
            label: {
                connectorAllowed: false
            }
        }
    },
    series: [{
        name: 'Fase 1',
        data: [<?php foreach ($data as $result){
            echo htmlentities($result['fase_1']).',';
        }?>]
    },
            {
        name: 'Fase 2',
        data: [<?php foreach ($data as $result){
            echo htmlentities($result['fase_2']).',';
        }?>]
    },
            {
        name: 'Fase 3',
        data: [<?php foreach ($data as $result){
            echo htmlentities($result['fase_3']).',';
        }?>]
    }
        ],
    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom'
                }
            }
        }]
    },
});
Highcharts.setOptions({
    chart: {
        style: {
            fontFamily:' "Muli", sans-serif;',
        }
    }
});
</script>