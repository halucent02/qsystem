<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="">
<!--<![endif]-->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <meta name="viewport" content="width=device-width, initial-scale=100%"> -->

<title>Qsystem report</title>
    <script src='<?php echo base_url("javascripts/jquery1.11.1.min.js") ;?>' type="text/javascript"></script>
    <script src='<?php echo base_url("javascripts/reports.js") ;?>' type="text/javascript"></script>
    <script src="<?php echo base_url('javascripts/1.11.0-jquery-ui.js');?>"  type="text/javascript"></script>
    <script src="<?php echo base_url('javascripts/respond.min.js') ?>"></script>
    
    <link href="<?php echo base_url('stylesheets/boilerplate.css');?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('stylesheets/fluids.css');?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('stylesheets/reports2.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('stylesheets/1.11.0-jquery-ui.css');?>" rel="stylesheet" type="text/css" />
    
    
<!-- 
To learn more about the conditional comments around the html tags at the top of the file:
paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/

Do the following if you're using your customized build of modernizr (http://www.modernizr.com/):
* insert the link to your js here
* remove the link below to the html5shiv
* add the "no-js" class to the html tags at the top
* you can also remove the link to respond.min.js if you included the MQ Polyfill in your modernizr build 
-->
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body class="bgs">
<div class="gridContainer clearfix">
  <div id="LayoutDiv1">
        <div class="emptyb"></div>      
             <!----------------------displayblock1-->  
         
          <?php echo form_open_multipart('','id="fromtoinput"') ;?>
                <div class="db1">
                    <div class="statsblockfr1">
                              		<div class="report"></div>
                              		<div class="fromtof">
                                    <datess>DATE &nbsp; &nbsp; &nbsp;:</datess>
                             
                                            <input name="froms" type="text" class="frominputs" placeholder="FROM" id="fromyof_froms">
                                            <input name="tos" type="text" class="toinputs"  placeholder="TO" id="fromyof_to">
                                	</div> <!--fromtof-->
                                       
                                    <div class="agents">AGENT &nbsp;: </div>
                                    <div class="radioagent">
                                                <label>
                                                <input type="radio" name="agentreds" value="all" id="stats2">
                                                ALL</label>
                                                <label>
                                               <input type="radio" name="agentreds" value="selectedagent" id="stats3">
                                               SELECTED AGENT</label>               
                                    </div> <!---radioagentend-->
                     </div> <!---statsblockfr1-->    
               </div> <!--db1end-->                                           
            <!------------------------------displayblock1 end-->      
            <!-----------displayblock2-->   
                                <div class="db2">
                                	<div class="statsblockfr2">
                                    		<div class="checksbox">
                                    		    <?php 
                                        		    foreach ($users as $user) {
                                        		        $data = array(
                                                                    'name'  => 'agents',
                                                                    'id'    => 'agent',
                                                                    'class' => 'agentsss',
                                                                    'value' => $user['id'],
                                                        );
    													echo form_checkbox($data);
    													echo $user['firstname'].' '.$user['lastname']." ''".$user['username']."''";
    													echo br();
    												}
                                    		    ?>
                                            </div>
                                    </div><!--statsblockfr2-->
                                </div> <!---db2end-->   
           <!-----------displayblock2end-->    
           <!-----------displayblock3-->  
                                <div class="db3">
                                        <div class="statsblockfr3">
                                            <statusbull>STATUS   :</statusbull>
                                            <div class="radiostatus">
                                            		  <label>
                                            		    <input type="radio" name="statusreds" value="all" id="stats0">
                                            		    ALL</label>
                                            		  <label>
                                            		    <input type="radio" name="statusreds" value="selectedstat" id="stats1">
                                            		    SELECTED STATUS</label>
                                            </div> <!--radiostatusend-->
                                            <div class="checkeds">
                                                	 <label>
                                                	    <input type="checkbox" name="Checkboxstatus" value="RELEASING" class="stat" id="Checkboxstatus_0">
                                                	    RELEASING</label>
                                                	  <label>
                                                	    <input type="checkbox" name="Checkboxstatus" value="INQUIRY" class="stat" id="Checkboxstatus_1">
                                                	    INQUIRY</label>
                                                	  <label>
                                                	    <input type="checkbox" name="Checkboxstatus" value="FOR REPAIR" class="stat" id="Checkboxstatus_2">
                                                	    FOR REPAIR</label>
                                                	  <label>
                                                	    <input type="checkbox" name="Checkboxstatus" value="APPOINTMENT" class="stat" id="Checkboxstatus_3">
                                                	    APPOINTMENT</label>
                                            </div> <!--checkedsend-->
                                            
                                   
                                       <?php echo form_button('quer','QUERY','class="qry" id="query" '); ?>
                                       <?php echo form_button('exprt','EXPORT','class="expt" id="export"'); ?>
                               	    </div><!--statsblockfr3end-->
                             </div> <!--db3 end-->
                <?php echo form_close() ;?>  
        <!-----------displayblock3-->
        
        <div class="emptyb"></div>
  </div> <!--layoutdiv1end-->
<!------------------------------------------------------------>
    <div id="leftcol">
                <div class="fromto2f">
                        	<div class="froms">FROM:</div>
                        	<div class="fromfff"><!-- date from--></div>
                        	<div class="tosn">TO:</div>
                            <div class="tossf"><!-- date to--></div>
                </div> <!---fromto2f-->
                <div class="secondcontainer">
                        <div class="fportionf">
                        	<div class="headertab">
                            		<div class="datehead">DATE</div>
                                    <div class="statushead">STATUS</div>
                            		<div class="agenthead">AGENT</div>
                            </div><!--headertab-->
                            <div class="ffportion">
                            		<!-- data : viewdata will populate here -->
                            </div> <!--ffportionend-->
                       </div> <!--fportionf-->
               </div> 
    </div>

    <div id="secright">
        <div class="secondsright">
            <div class="logoss"></div>
            <div class="transactsf">
                 <!--- trasaction counts will show here -->            
           </div> <!---transactsf end-->
<!-------------------------------------------------------------------------------------->
           <div class="peragentf">
                 <div class="peragentname">PER AGENT</div>
                       <div class="agentf">
                        <!-- Per agent values -->  
                         
                     </div> <!------agentfend-->
               </div> <!-----------peragentf end------>
          </div> <!----secondrightend-->	
   </div>


</div><!--gridocontainerend-->
</body>
<?php require 'httprequest.php' ;?>
</html>

