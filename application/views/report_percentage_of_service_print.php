<!doctype html>
<head>
    <title></title>

    <!--use for printing-->
    <script>
        function printme(){
            window.print();
        }
        window.onload= printme();
    </script>
    <!--use for printing-->

    <link rel="stylesheet" type="text/css" href="print.css" media="print">

</head>
<body>


<script src="<?php echo base_url('javascripts/jquery1.11.1.min.js') ;?>"></script>
<script src="<?php echo base_url('javascripts/highcharts.js') ;?>"></script>
<script src="<?php echo base_url('javascripts/exporting.js') ;?>"></script>


<div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: 1,//null,
            plotShadow: false
        },
        title: {
            text: 'Percentage of service'
			
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Transaction share',
            data: [
            <?php
                    echo "['Releasing',".   $percentage_of_service[0]/100*$percentage_of_service[4]."],";
                    echo "['Inquiry',".     $percentage_of_service[1]/100*$percentage_of_service[4]."],";
                    echo "['For Repair',".  $percentage_of_service[2]/100*$percentage_of_service[4]."],";
                    echo "['Appointment',". $percentage_of_service[3]/100*$percentage_of_service[4]."],";  
            ?>
            ]
        }]
    });
});

</script>

<center>
    <h4>
	 <?php echo $this->table->generate($yes); ?>
    </h4>
</center>
</body>
</html>