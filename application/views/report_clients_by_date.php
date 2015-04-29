<!doctype html>
<head>
    <title></title>
</head>
<link href='<?php echo base_url("stylesheets/print.css") ;?>' rel='stylesheet' type='text/css' media="screen" />
<div class="prints">
    <div class="report_print_btn"></div>
        <div class="backtomenu"><?php echo form_open("","id=form_menu"); echo form_close();?></div>
</div>

<body>
<script src="<?php echo base_url('javascripts/jquery1.11.1.min.js') ;?>"></script>
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

<div id="report_print_div">

<div id="container" style="min-width: 500px; height: 400px; margin: 0 auto"></div>



<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Clients by date'
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            type: 'category',
            labels: {
                rotation: -45,
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Clients'
            }
        },
        legend: {
            enabled: false
        },
        tooltip: {
            pointFormat: 'Population in 2008: <b>{point.y:.1f} millions</b>'
        },
        series: [{
            name: 'Population',
            data: [
                ['Dec 1,2014', 23],
                ['Dec 2,2014', 16],
                ['Dec 3,2014', 14],
                ['Dec 4,2014', 14],
                ['Dec 5,2014', 12],
                ['Dec 6,2014', 12],
                ['Dec 7,2014', 11],
                ['Dec 8,2014', 11],
                ['Dec 9,2014', 11],
                ['Dec 10,2014', 11],
                ['Dec 11,2014', 10],
                ['Dec 12,2014', 10],
                ['Dec 13,2014', 10],
                ['Dec 14,2014', 9],
                ['Dec 15,2014', 9],
                ['Dec 16,2014', 9],
                ['Dec 17,2014', 8],
                ['Dec 18,2014', 23],
                ['Dec 19,2014', 17],
                ['Dec 20,2014', 18],
                ['Dec 21,2014', 12],
                ['Dec 22,2014', 20],
                ['Dec 23,2014', 25],
                ['Dec 24,2014', 13],
                ['Dec 25,2014', 23],
                ['Dec 26,2014', 23],
                ['Dec 27,2014', 13],
                ['Dec 28,2014', 20],
                ['Dec 29 ,2014', 10],
                ['Dec 30,2014', 30],
                ['Dec 31,2014', 10],
            ],
            dataLabels: {
                enabled: true,
                rotation: -90,
                color: '#FFFFFF',
                align: 'right',
                x: 4,
                y: 10,
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif',
                    textShadow: '0 0 3px black'
                }
            }
        }]
    });
});
</script>
</div>
<?php require_once 'footer.php'; ?>