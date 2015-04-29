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
            text: 'Client Arrival per Hour'
        },
        xAxis: {
            categories: ['10 AM','11 AM','12 NN','1 PM','2 PM','3 PM','4 PM','5 PM','6 PM','7 PM','8 PM','9 PM']
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Number Of CLients'
            },
            stackLabels: {
                enabled: true,
                style: {
                    fontWeight: 'bold',
                    color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
                }
            }
        },
        legend: {
            align: 'right',
            x: -70,
            verticalAlign: 'top',
            y: 20,
            floating: true,
            backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || 'white',
            borderColor: '#CCC',
            borderWidth: 1,
            shadow: false
        },
        tooltip: {
            formatter: function () {
                return '<b>' + this.x + '</b><br/>' +
                    this.series.name + ': ' + this.y + '<br/>' +
                    'Total: ' + this.point.stackTotal;
            }
        },
        plotOptions: {
            column: {
                stacking: 'normal',
                dataLabels: {
                    enabled: true,
                    color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white',
                    style: {
                        textShadow: '0 0 3px black, 0 0 3px black'
                    }
                }
            }
        },
        series: [{
            name: 'Inquiry',
            data: [5, 3, 4, 7,9,2,3,4,2,10,11,12]
        }, {
            name: 'For Repair',
            data: [2, 2, 3, 2,1,2,3,1,8,3,2,1]
        }, {
            name: 'Releasing',
            data: [3, 4, 4, 20,2,13,52,12,4,1,2,4]
        }, {
            name: 'Releasing',
            data: [4,1,3,10,17,4,2,4,12,3,4,10]
        }]
    });
});
</script>
    </div>
<?php require_once 'footer.php'; ?>