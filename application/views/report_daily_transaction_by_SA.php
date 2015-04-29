<!doctype html>
<head>
    <title></title>

    <link href='<?php echo base_url("stylesheets/print.css") ;?>' rel='stylesheet' type='text/css' media="all" />

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

<center>
    <div class="title_daily_transaction_SA">DAILY TRANSACTIONS BY SERVICE AGENT</div>
<h1><table cellspacing="0px">
    <tr class="test_h">
        <th> &nbsp;&nbsp;Service Agent&nbsp;</th>
        <th>&nbsp;&nbsp;Row #&nbsp;</th>
        <th>&nbsp;&nbsp;Arrival Time&nbsp;</th>
        <th>&nbsp;&nbsp;Time Served&nbsp;</th>
        <th>&nbsp;&nbsp;Time Ended&nbsp;</th>
        <th>&nbsp;&nbsp;Wait Time&nbsp;</th>
        <th>&nbsp;&nbsp;Service Time&nbsp;</th>
        <th>&nbsp;&nbsp;Service&nbsp;</th>
    </tr>
<!--1-->
    <tr class="test">
      <td>Releasing</td>
        <td>100</td>
       <td>11:40am</td>
        <td>12:00pm</td>
      <td>12:01</td>
      <td>1 min.</td>
       <td>10:40</td>
        <td>Daryl V.</td>
    </tr>

<!--2-->
    <tr class="test">
        <td>Releasing</td>
        <td>100</td>
        <td>11:40am</td>
        <td>12:00pm</td>
        <td>12:01pm</td>
        <td>1 min.</td>
        <td>10:40</td>
        <td>Daryl V.</td>
    </tr>
<!--3-->
    <tr class="test">
        <td>Releasing</td>
        <td>100</td>
        <td>11:40am</td>
        <td>12:00pm</td>
        <td>12:01pm</td>
        <td>1 min.</td>
        <td>10:40</td>
        <td>Daryl V.</td>
    </tr>
<!--4-->
    <tr class="test">
        <td>Releasing</td>
        <td>100</td>
        <td>11:40am</td>
        <td>12:00pm</td>
        <td>12:01pm</td>
        <td>1 min.</td>
        <td>10:40</td>
        <td>Daryl V.</td>
    </tr>

<!--5-->
    <tr class="test">
        <td>Releasing</td>
        <td>100</td>
        <td>11:40am</td>
        <td>12:00pm</td>
        <td>12:01pm</td>
        <td>1 min.</td>
        <td>10:40</td>
        <td>Daryl V.</td>
    </tr>
<!--6-->
    <tr class="test">
        <td>Releasing</td>
        <td>100</td>
        <td>11:40am</td>
        <td>12:00pm</td>
        <td>12:01pm</td>
        <td>1 min.</td>
        <td>10:40</td>
        <td>Daryl V.</td>
    </tr>
<!--7-->
    <tr class="test">
        <td>Releasing</td>
        <td>100</td>
        <td>11:40am</td>
        <td>12:00pm</td>
        <td>12:01pm</td>
        <td>1 min.</td>
        <td>10:40</td>
        <td>Daryl V.</td>
    </tr>
 <!--8-->
    <tr class="test">
        <td>Releasing</td>
        <td>100</td>
        <td>11:40am</td>
        <td>12:00pm</td>
        <td>12:01pm</td>
        <td>1 min.</td>
        <td>10:40</td>
        <td>Daryl V.</td>
    </tr>
 <!--9-->
    <tr class="test">
        <td>Releasing</td>
        <td>100</td>
        <td>11:40am</td>
        <td>12:00pm</td>
        <td>12:01pm</td>
        <td>1 min.</td>
        <td>10:40</td>
        <td>Daryl V.</td>
    </tr>
 <!--10-->
    <tr class="test">
        <td>Releasing</td>
        <td>100</td>
        <td>11:40am</td>
        <td>12:00pm</td>
        <td>12:01pm</td>
        <td>1 min.</td>
        <td>10:40</td>
        <td>Daryl V.</td>
    </tr>
<!--11-->
    <tr class="test">
        <td>Releasing</td>
        <td>100</td>
        <td>11:40am</td>
        <td>12:00pm</td>
        <td>12:01pm</td>
        <td>1 min.</td>
        <td>10:40</td>
        <td>Daryl V.</td>
    </tr>
 <!--12-->
    <tr class="test">
        <td>Releasing</td>
        <td>100</td>
        <td>11:40am</td>
        <td>12:00pm</td>
        <td>12:01pm</td>
        <td>1 min.</td>
        <td>10:40</td>
        <td>Daryl V.</td>
    </tr>
<!--13-->
    <tr class="test">
        <td>Releasing</td>
        <td>100</td>
        <td>11:40am</td>
        <td>12:00pm</td>
        <td>12:01pm</td>
        <td>1 min.</td>
        <td>10:40</td>
        <td>Daryl V.</td>
    </tr>
<!--14-->
    <tr class="test">
        <td>Releasing</td>
        <td>100</td>
        <td>11:40am</td>
        <td>12:00pm</td>
        <td>12:01pm</td>
        <td>1 min.</td>
        <td>10:40</td>
        <td>Daryl V.</td>
    </tr>
<!--15-->
    <tr class="test">
        <td>Releasing</td>
        <td>100</td>
        <td>11:40am</td>
        <td>12:00pm</td>
        <td>12:01pm</td>
        <td>1 min.</td>
        <td>10:40</td>
        <td>Daryl V.</td>
    </tr>
 <!--16-->
    <tr class="test">
        <td>Releasing</td>
        <td>100</td>
        <td>11:40am</td>
        <td>12:00pm</td>
        <td>12:01pm</td>
        <td>1 min.</td>
        <td>10:40</td>
        <td>Daryl V.</td>
    </tr>
 <!--17-->
    <tr class="test">
        <td>Releasing</td>
        <td>100</td>
        <td>11:40am</td>
        <td>12:00pm</td>
        <td>12:01pm</td>
        <td>1 min.</td>
        <td>10:40</td>
        <td>Daryl V.</td>
    </tr>
 <!--18-->
    <tr class="test">
        <td>Releasing</td>
        <td>100</td>
        <td>11:40am</td>
        <td>12:00pm</td>
        <td>12:01pm</td>
        <td>1 min.</td>
        <td>10:40</td>
        <td>Daryl V.</td>
    </tr>
 <!--19-->
    <tr class="test">
        <td>Releasing</td>
        <td>100</td>
        <td>11:40am</td>
        <td>12:00pm</td>
        <td>12:01pm</td>
        <td>1 min.</td>
        <td>10:40</td>
        <td>Daryl V.</td>
    </tr>
<!--20-->
    <tr class="test">
        <td>Releasing</td>
        <td>100</td>
        <td>11:40am</td>
        <td>12:00pm</td>
        <td>12:01pm</td>
        <td>1 min.</td>
        <td>10:40</td>
        <td>Daryl V.</td>
    </tr>
<!--21-->
    <tr class="test">
        <td>Releasing</td>
        <td>100</td>
        <td>11:40am</td>
        <td>12:00pm</td>
        <td>12:01pm</td>
        <td>1 min.</td>
        <td>10:40</td>
        <td>Daryl V.</td>
    </tr>
 <!--22-->
    <tr class="test">
        <td>Releasing</td>
        <td>100</td>
        <td>11:40am</td>
        <td>12:00pm</td>
        <td>12:01pm</td>
        <td>1 min.</td>
        <td>10:40</td>
        <td>Daryl V.</td>
    </tr>
<!--23-->
    <tr class="test">
        <td>Releasing</td>
        <td>100</td>
        <td>11:40am</td>
        <td>12:00pm</td>
        <td>12:01pm</td>
        <td>1 min.</td>
        <td>10:40</td>
        <td>Daryl V.</td>
    </tr>
<!--24-->
    <tr class="test">
        <td>Releasing</td>
        <td>100</td>
        <td>11:40am</td>
        <td>12:00pm</td>
        <td>12:01pm</td>
        <td>1 min.</td>
        <td>10:40</td>
        <td>Daryl V.</td>
    </tr>
<!--25-->
    <tr class="test">
        <td>Releasing</td>
        <td>100</td>
        <td>11:40am</td>
        <td>12:00pm</td>
        <td>12:01pm</td>
        <td>1 min.</td>
        <td>10:40</td>
        <td>Daryl V.</td>
    </tr>
 <!--26-->
    <tr class="test">
        <td>Releasing</td>
        <td>100</td>
        <td>11:40am</td>
        <td>12:00pm</td>
        <td>12:01pm</td>
        <td>1 min.</td>
        <td>10:40</td>
        <td>Daryl V.</td>
    </tr>
 <!--27-->
    <tr class="test">
        <td>Releasing</td>
        <td>100</td>
        <td>11:40am</td>
        <td>12:00pm</td>
        <td>12:01pm</td>
        <td>1 min.</td>
        <td>10:40</td>
        <td>Daryl V.</td>
    </tr>
<!--28-->
    <tr class="test">
        <td>Releasing</td>
        <td>100</td>
        <td>11:40am</td>
        <td>12:00pm</td>
        <td>12:01pm</td>
        <td>1 min.</td>
        <td>10:40</td>
        <td>Daryl V.</td>
    </tr>
 <!--29-->
    <tr class="test">
        <td>Releasing</td>
        <td>100</td>
        <td>11:40am</td>
        <td>12:00pm</td>
        <td>12:01pm</td>
        <td>1 min.</td>
        <td>10:40</td>
        <td>Daryl V.</td>
    </tr>
<!--30-->
    <tr class="test">
        <td>Releasing</td>
        <td>100</td>
        <td>11:40am</td>
        <td>12:00pm</td>
        <td>12:01pm</td>
        <td>1 min.</td>
        <td>10:40</td>
        <td>Daryl V.</td>
    </tr>



</table> </h1>
</center>

</div>

<div class="universal_pagination">
    <div class="first_left"></div>
    <div class="left"></div>
    <div class="pagination_num">123456789</div>
    <div class="right"></div>
    <div class="end_right"></div>
</div>

<?php require_once 'footer.php'; ?>