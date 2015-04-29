<!doctype html>
<head>
    <title></title>

    <link href='<?php echo base_url("stylesheets/print.css") ;?>' rel='stylesheet' type='text/css' media="screen" />

</head>
<body>
<!--<a href="report_percentage_of_service_print.php" class="print2"></a>-->
<script src="<?php echo base_url('javascripts/jquery1.11.1.min.js') ;?>"></script>
<script src="<?php echo base_url('javascripts/reporitorical.js') ;?>"></script>
<script src="<?php echo base_url('javascripts/highcharts.js') ;?>"></script>
<script src="<?php echo base_url('javascripts/exporting.js') ;?>"></script>
<script>
    $(document).ready(function(){
        $(".report_print_btn").click(function(event){
            event.preventDefault();
            var printContents = document.getElementById("report_print_div").innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
            location.reload();
        });

        $(".backtomenu").click(function(event){
            event.preventDefault();
            var acctype = $("#acctype").val();
            var httpbase = $("#httpbase").val();
            if(acctype == 'admin'){
                $("#form_menu").attr("action",httpbase+"reporitorial").submit();
            }else{
                $("#form_menu").attr("action",httpbase+"logout").submit();
            }
        })
    });
</script>



<div class="prints">
    <div class="report_print_btn"></div>
        <div class="backtomenu"><?php echo form_open("","id=form_menu"); echo form_close();?></div>

</div>

<div id="report_print_div">

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

</div>

<?php require_once 'footer.php'; ?>