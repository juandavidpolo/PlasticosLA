<div id="container"></div>
<script type="text/javascript">
Highcharts.chart('container', {
    chart: {
        zoomType: 'x'
    },
    title: {
        text: 'Producción por minuto',
    },
    xAxis: {
        categories: [<?php foreach ($data as $result){ ?>
            '<?php echo htmlentities($result['Fecha']); ?>',
        <?php }?>]
                                    },
    yAxis: {
        title: {
            text: 'PPM'
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
            echo htmlentities($result[$fase]).',';
        }?>]
    },
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