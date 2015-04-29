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
<script src="<?php echo base_url('javascripts/highcharts-3d.js') ;?>"></script>
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
<div id="container"></div>

<script type="text/javascript">
 $(function () {
    // Set up the chart
    var chart = new Highcharts.Chart({
        chart: {
            renderTo: 'container',
            type: 'column',
            margin: 75,
            options3d: {
                enabled: true,
                alpha: 15,
                beta: 15,
                depth: 50,
                viewDistance: 25
            }
        },
        title: {
            text: 'Client per Weekday'
        },
        subtitle: {
            text: ''
        },
        plotOptions: {
            column: {
                depth: 25
            }
        },
        series: [{
            data: [29.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]
        }]

    });

    function showValues() {
        $('#R0-value').html(chart.options.chart.options3d.alpha);
        $('#R1-value').html(chart.options.chart.options3d.beta);
    }

    // Activate the sliders
    $('#R0').on('change', function () {
        chart.options.chart.options3d.alpha = this.value;
        showValues();
        chart.redraw(false);
    });
    $('#R1').on('change', function () {
        chart.options.chart.options3d.beta = this.value;
        showValues();
        chart.redraw(false);
    });

    showValues();
});
</script>
     </div>
<?php require_once 'footer.php'; ?>