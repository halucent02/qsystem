<!DOCTYPE html>
<html>
<head>
	<meta name="apple-mobile-web-app-capable" content="yes">

	<script src='<?php echo base_url("javascripts/jquery1.11.1.min.js") ;?>' type="text/javascript"></script>
	<script src="<?php echo base_url('javascripts/assets/jquery.fittext.js');?>"  type="text/javascript"></script>
	<script src="<?php echo base_url('javascripts/assets/jquery.lettering.js');?>"  type="text/javascript"></script>
	<script src="<?php echo base_url('javascripts/jquery.textillate.js');?>"  type="text/javascript"></script>
	<script src="<?php echo base_url('javascripts/jquery.blink.js');?>"  type="text/javascript"></script>
	
	<link href="<?php echo base_url('stylesheets/1.11.0-jquery-ui.css');?>" rel="stylesheet" type="text/css" media="screen">
	<link href="<?php echo base_url('javascripts/assets/animate.css');?>" rel="stylesheet" type="text/css" media="screen">
	<link href='<?php echo base_url("stylesheets/quelogin.css") ;?>' rel='stylesheet' type='text/css' />

<script type='text/javascript'>

			 // var colors = ['red','yellow','orange'];

			$(document).ready(function() {
				
				var httpbase = $('#httpbase').val();
				// play sound of doorbell
				//$('#sound_element').html('<embed src="'+httpbase+'sound/sound.mp3" hidden="true" autostart="true" loop="false" />');
				$('#sound_element').html('<embed src="'+httpbase+'sound/sound.mp3" hidden="true" autostart="true" loop="false" style="float:left"/>')
					// The 'status' blinks indefinitely. Simple default behavior.
					$('#status').blink(); 

					// 'title' exhibits is a little bit more complex behavior.
					$('.bannersf').blink({
							maxBlinks: 7,
							speed: 700,
							onMaxBlinks:
							function() {
								$('.bannersf').delay(7000).fadeOut('1000');
							}
					});
					
					$('.blinkYes').blink({
							maxBlinks: 7,
							speed: 700,
					});
					
					// setInterval(function () {
			        // $(".servednames").load();
			    	// }, 5*1000);
// 			    	
			    	// function deletecall(){
			    		// var httpbase = $('#httpbase').val();	
						// $.post(httpbase+"frontline/clear_call");
						// }
					// deletecall();
			    	
			});
</script>
</head>

<body class="quetvbody">
	<?php if($qd->pandora) : ; ?>
	<div id="sound_element"></div>
	<? endif ;?>
	
<div class="bgtv">      
	<div class="floor">
    	<div class="table">
        	<div class="nositters">
            	<div id="nosit1" class="blink<?php echo $quedata->banner_num == "1" && $qd->pandora ? 'Yes' : '' ?>">1</div>
                <div id="nosit2" class="blink<?php echo $quedata->banner_num == "2" && $qd->pandora ? 'Yes' : '' ?>">2</div>
            	<div id="nosit3" class="blink<?php echo $quedata->banner_num == "3" && $qd->pandora ? 'Yes' : '' ?>">3</div> 
                <div id="nosit4" class="blink<?php echo $quedata->banner_num == "4" && $qd->pandora ? 'Yes' : '' ?>">4</div>
                <div id="nosit5" class="blink<?php echo $quedata->banner_num == "5" && $qd->pandora ? 'Yes' : '' ?>">5</div>
                <div id="nosit6" class="blink<?php echo $quedata->banner_num == "6" && $qd->pandora ? 'Yes' : '' ?>">6</div>
                <div id="nosit7" class="blink<?php echo $quedata->banner_num == "7" && $qd->pandora ? 'Yes' : '' ?>">7</div>
                           
            
            				</div> <!-- no sitters ---- close -->
            
            <div class="sitters">
            	<div class="sit1"></div>
                <div class="sit2"></div>
        		<div class="sit3"></div>
                <div class="sit4"></div>
                <div class="sit5"></div>
                <div class="sit6"></div>
                <div class="sit7"></div>
              
            					</div> <!-- sitters close -->
       	
        <div class="nositters2">
        		<div id="nosit8" class="blink<?php echo $quedata->banner_num == "8" && $qd->pandora ? 'Yes' : '' ?>">8</div>
                <div id="nosit9" class="blink<?php echo $quedata->banner_num == "9" && $qd->pandora ? 'Yes' : '' ?>">9</div>
                <div id="nosit10" class="blink<?php echo $quedata->banner_num == "10" && $qd->pandora ? 'Yes' : '' ?>">10</div>
                <div id="nosit11" class="blink<?php echo $quedata->banner_num == "11" && $qd->pandora ? 'Yes' : '' ?>">11</div>
        		
        </div> <!--nositters2close -->
        
        
         <div class="sitters2">
        		<div class="sit8"></div>
                <div class="sit9"></div>
        		<div class="sit10"></div>
                <div class="sit11"></div>
        
       			 </div><!-- sitters 2 closure -->
        
       <?php if($qd->pandora) : ; ?>
     <div class="bannersf">	
     								
        	<div class="bannername"><?php echo $quedata->banner_name ;?></div>
            <?php echo $quedata->banner_num == "1" ? '<div id="counter1"></div>' : '' ?>
            <?php echo $quedata->banner_num == "2" ? '<div id="counter2"></div>' : '' ?>
            <?php echo $quedata->banner_num == "3" ? '<div id="counter3"></div>' : '' ?>
            <?php echo $quedata->banner_num == "4" ? '<div id="counter4"></div>' : '' ?>
            <?php echo $quedata->banner_num == "5" ? '<div id="counter5"></div>' : '' ?>
            <?php echo $quedata->banner_num == "6" ? '<div id="counter6"></div>' : '' ?>
            <?php echo $quedata->banner_num == "7" ? '<div id="counter7"></div>' : '' ?>
            <?php echo $quedata->banner_num == "8" ? '<div id="counter8"></div>' : '' ?>
            <?php echo $quedata->banner_num == "9" ? '<div id="counter9"></div>' : '' ?>
            <?php echo $quedata->banner_num == "10" ? '<div id="counter10"></div>' : '' ?>
            <?php echo $quedata->banner_num == "11" ? '<div id="counter11"></div>' : '' ?>  
       	         
    </div>
       <?php endif ; ?> 
        
        
        
        
        <div class="listquef">
        		<div class="listss">
                
                   <div class="seps"></div>
                <?php
                 $counter = 0;
				 if($qd->pandora1) : ;
                 foreach ($pendingfive as $showpending): ;?>
                	<?php $counter = $counter+1; ?>
	                <div id="row<?php echo $counter  ;?>">
	                <div id="numbr<?php echo $counter  ;?>"><?php echo $showpending['numberque'] ?></div>
	                <div id="namenum<?php echo $counter  ;?>" class="tlt"><?php echo $showpending['firstname']." ".$showpending['lastname'] ?></div>
	                <div id="namenumstats<?php echo $counter  ;?>" class="tlt1"><?php echo $showpending['status'] ?></div>
	                </div> <!--row 1 close-->
                <?php endforeach ; endif ;?>
                </div> <!--listss close-->
        
        </div><!--listquef-->
        
        
        
  </div> <!--closetable-->
 
 
   </div> <!-- closefloor -->









<div class="pmclogo"></div>
<div class="nextnumsf">
	
		<img class="nextnumsfirst" src="<?php echo base_url() ;?>images/sysimg/quetv/engref.png">
       
       
       
</div><!-- nextnumsf close -->

 	<div class="servingname">
 	SERVING:
	 </div>
 
		<div class="servednames">
			<?php 
			$counter = 0;
			if($qd->pandora1) : ;
			foreach ($serve as $serving) :;?>
			<?php $counter = $counter+1 ?>
			<div class="s<?php echo $counter ;?>">
            	<div class="s<?php echo $counter ;?>num"><?php echo $serving['counter_number'] ?></div>
                <div class="s<?php echo $counter ;?>name"><?php echo $serving['client_name'] ?></div>
                <div class="s<?php echo $counter ;?>stat"><?php echo $serving['status'] ?></div>
            </div>
          <br>
          <br>
           <br>
           <?php endforeach ; endif ;?>
 		</div>
</div> <!--close-bgtv-->


</body>

<script>

  $(function (){

    /*animateClasses = 'flash bounce shake tada swing wobble pulse flip flipInX flipOutX flipInY flipOutY fadeIn fadeInUp fadeInDown fadeInLeft fadeInRight fadeInUpBig fadeInDownBig fadeInLeftBig fadeInRightBig fadeOut fadeOutUp fadeOutDown fadeOutLeft fadeOutRight fadeOutUpBig fadeOutDownBig fadeOutLeftBig fadeOutRightBig bounceIn bounceInDown bounceInUp bounceInLeft bounceInRight bounceOut bounceOutDown bounceOutUp bounceOutLeft bounceOutRight rotateIn rotateInDownLeft rotateInDownRight rotateInUpLeft rotateInUpRight rotateOut rotateOutDownLeft rotateOutDownRight rotateOutUpLeft rotateOutUpRight hinge rollIn rollOut';*/

    $('.tlt')
      .fitText(1.6)
      .textillate({ 
    					initialDelay: 0,
    				in: {
      					effect: 'fadeInLeftBig',
      					delayScale: 1.5,
      					delay: 50,
      					sync: false,
      					shuffle: false
    					},
    				out: {
      					effect: 'none',
      					delayScale: 1.5,
      					delay: 50,
      					sync: false,
      					shuffle: true,
    					},
    					minDisplayTime: 30000,
    					loop: true,
      });
      $('.tlt1')
      .fitText(1.6)
      .textillate({ 
    					initialDelay: 0,
    				in: {
      					effect: 'fadeInLeftBig',
      					delayScale: 1.5,
      					delay: 50,
      					sync: false,
      					shuffle: false
    					},
    				out: {
      					effect: 'none',
      					delayScale: 1.5,
      					delay: 50,
      					sync: false,
      					shuffle: true,
    					},
    					minDisplayTime: 30000,
    					loop: true,
      });
  });
</script>
<?php require 'httprequest.php' ;?>
</html>
