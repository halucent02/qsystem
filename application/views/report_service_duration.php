<!doctype html>
<head>
    <title></title>
    <link href='<?php echo base_url("stylesheets/print.css") ;?>' rel='stylesheet' type='text/css' media="screen" />
</head>
<body>
<script src="<?php echo base_url('javascripts/jquery1.11.1.min.js') ;?>"></script>
<script src="<?php echo base_url('javascripts/highcharts.js') ;?>"></script>
<script src="<?php echo base_url('javascripts/data.js') ;?>"></script>
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

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
<h4> <center>
<table id="datatable">
    <thead>
    <tr>
        <th></th>
        <th>Jane</th>
        <th>John</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th>Apples</th>
        <td>3</td>
        <td>4</td>
    </tr>
    <tr>
        <th>Pears</th>
        <td>2</td>
        <td>0</td>
    </tr>
    <tr>
        <th>Plums</th>
        <td>5</td>
        <td>11</td>
    </tr>
    <tr>
        <th>Bananas</th>
        <td>1</td>
        <td>1</td>
    </tr>
    <tr>
        <th>Oranges</th>
        <td>2</td>
        <td>4</td>
    </tr>
    </tbody>
</table>
</h4></center>
<script type="text/javascript">
    $(function () {
        $('#container').highcharts({
            data: {
                table: document.getElementById('datatable')
            },
            chart: {
                type: 'column'
            },
            title: {
                text: 'Service Duration'
            },
            yAxis: {
                allowDecimals: false,
                title: {
                    text: 'Units'
                }
            },
            tooltip: {
                formatter: function () {
                    return '<b>' + this.series.name + '</b><br/>' +
                    this.point.y + ' ' + this.point.name.toLowerCase();
                }
            }
        });
    });
</script>


<?php require_once 'footer.php'; ?>