<!doctype html>
<head>
    <title>Quesystem Reporitorial</title>
    
    <script src='<?php echo base_url("javascripts/jquery1.11.1.min.js") ;?>' type="text/javascript"></script>
    <script src='<?php echo base_url("javascripts/reporitorial.js") ;?>' type="text/javascript"></script>
    <script src="<?php echo base_url('javascripts/1.11.0-jquery-ui.js');?>"  type="text/javascript"></script>
    <script src='<?php echo base_url("javascripts/header.js") ;?>'></script>
    
 
    <link href="<?php echo base_url('stylesheets/1.11.0-jquery-ui.css');?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('stylesheets/reporitorical.css');?>" rel="stylesheet" type="text/css" />
    
</head>

<body class="bgreps">

    <div class="reportws">
    
    	<h1>
        <center>REPORT MENU<center>
        </h1>

        <?php
        $from_year = array(
            'name'=>'fromyear',
            'placeholder'=>'From year',
            'class'=>'fromthisyear',
        );
        $to_year = array(
            'name'=>'toyear',
            'placeholder'=>'To year',
            'class'=>'tothisyear',
        );
        $form_date = array(
            'id'=>'form_date'
        );

        echo form_open_multipart("","id='form_date'");
        echo form_input($from_year);
        echo form_input($to_year);
        echo form_close();

        ?>



        <div class="tabulist">
    <div class ="title1"></div>
            <ul class="tabslist">
                <li>
                    <div class="dtcontainer"> <!--DAILY TRANSACTIONS-->
                        <div class="dt"></div>
                        <div class="dt1"></div>
                    </div>
                </li>
                <li>
                    <div class="dtcontainer_SA"> <!--DAILY TRANSACTIONS BY SERVICE AGENT-->
                        <div class="dtsa"></div>
                        <div class="dtsa1"></div>

                    </div>
                </li>
                <li>
                    <div class="dtcontainer_S"> <!--DAILY TRANSACTIONS BY SERVICE -->
                        <div class="dts"></div>
                        <div class="dts1"></div>

                    </div>
                </li>

            </ul>
        </div> <!--tabulist menu-->



        <div class="graphlist">
            <div class ="title2"></div>


    	<ul class="menulist">
        <li>
        	<div class="p1">
             <div class="percentage_of_service"></div>
            		<div class="percentage_of_service1"></div>
            </div>
        </li>
        <li>
            
            <div class="sd1">
                <div class="service_duration"></div> 
                	<div class="service_duration1"></div>
            </div>
            
        </li>
        <li>
            <div class="stpa">
                <div class="service_time_per_agent"></div>
                <div class="service_time_per_agent1"></div>
           	</div>
        </li>
        <li>
            
            <div class="cbd">
                <div class="clients_by_date"></div> 
                <div class="clients_by_date1"></div>	
                
            </div> 

               
          
        </li>
        <li>
           	<div class="caph">
                <div class="clients_arrival_per_hour"></div> 
                <div class="clients_arrival_per_hour1"></div>
            </div>
            
        </li>
        <li>
            <div class="cpw">
                <div class="clients_per_weekday"></div> 
                <div class="clients_per_weekday1"></div> 
            </div>
            
        </li>
    </ul>
        </div>

    <?php
    echo form_open("","id=form_menu");
    $backmenubutton = array(
   				'type'=>'button',
				'class'=>'backmenu',
				'name'=>'backmenu',
   );
   echo form_button($backmenubutton);
   echo form_close();
   ?>
    
    </div><!--reportws-->
<?php require_once 'footer.php'; ?>