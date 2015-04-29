<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="refresh" content="10">
	<meta name="apple-mobile-web-app-capable" content="yes">
	
	<link href='<?php echo base_url("stylesheets/quelogin.css") ;?>' rel='stylesheet' type='text/css' />
	<script src='<?php echo base_url("javascripts/jquery1.11.1.min.js") ;?>' type="text/javascript"></script>
	<script src='<?php echo base_url("javascripts/header.js") ;?>'></script>


</head>

<script type="text/javascript">
	$(document).ready(function () {

			function talkToMe () {
				var worte = new SpeechSynthesisUtterance();
				var ar = document.getElementById("say").value;
				var voice = window.speechSynthesis.getVoices();
				worte.voice = voice[42];
				// worte.pitch = 2;
				// 2
				// 42
				worte.rate = 1;
				worte.text = "please prepare a-r number "+ar;
				window.speechSynthesis.speak(worte);
				// setTimeout(talkToMe(),3000);
               }
			// document.body.onload = talkToMe();
			document.body.onload = talkToMe ();
			
			// setInterval(function () {
			        // $(".logintab").load("http://localhost:4000/qsystem/backroom/index");
			    // }, 2000);
// 			    
			    // $("#talk").click(function(e){
			    	// e.preventDefault();
			    	 // talkToMe();
			    // })
			   
			    
	});
    
</script>
<body class="logintab">
	<input type="hidden" value="<?php echo isset($to_speak->ar) ? $to_speak->ar : '' ?>" id="<?php echo isset($to_speak->ar) ? 'say' : 'nothing' ?>" />
	<script>
		
		
	</script>
   <div class="brw">

       <?php
       echo form_open("","id=form_menu");
       $backsbutton = array(
                'type'=>'button',
				'class'=>'backs',
				'name'=>'logout',
        );
        echo form_button($backsbutton);
        echo form_close();
   ?>
       
	 
	 <?php
	echo form_open("logout");
   $LOGbutton = array(
   				'type'=>'submit',
				'class'=>'logback',
				'name'=>'logout',
				'content'=>'LOG OUT',
   );
   echo form_button($LOGbutton) ;
   echo form_close();
   ?> <!--- logout button --->
   		
        
		<div class="logos"></div> 
   		<div class="tags"></div>
        
        
        
<div class="backws">

 
   
   
	<div class="titleback">BACKROOM QUERY</div>
    <div class="arbox">
    <div class="releasebox">RELEASING</div>
    
    
    
    	<div class="nfc">
        <div class="nameofc">NAME OF CLIENT</div>
        
    	<div class="arno">AR#</div>
   			
        	<div class="nfcform">
        		<?php foreach($not_prepared as $value) : ;?>
            	   <div class="nfcl">
	        	        <div class="arfsno"><?php echo $value['ar'];?></div>
	                	<div class="nameclient"><?php echo $value['firstname']." ".$value['lastname'] ;?></div>
	                	<?php echo anchor("../backroom/prepared/".$value['id'],"PREPARED","class='prepared'") ;?>
                    </div><!---nfcl closure-->
               <?php endforeach ;?>
                    
                		
                		
        
            	</div><!----nfc form closure--->
             
        	
        </div>

    </div>




<!---------------------- prepared SECTION----->

 <div class="prepbox">
    <div class="preparedbox">PREPARED</div>
    
 <div class="prepsi">
    	<div class="prepno">AR#</div>
    
        
    	<div class="nfcpreps">
        <div class="prepofc">NAME OF CLIENT</div>
        	<div class="nfcformprep">
                 <?php foreach($prepared as $value) : ;?>
                 <div class="nfclprep">
	        			<div class="arfsnoprep"><?php echo $value['ar'] ;?></div>
	               		<div class="nameclientprep"><?php echo $value['firstname']." ".$value['lastname'] ;?></div>
                 </div><!---arfsprep closure--> 
                  <?php endforeach ;?>     
                        
                        
            	</div><!----nfclprep form closure--->
                     
        </div><!----nfcform form closure--->

    </div>

</div>
	

</div>
</div>

<?php require_once 'footer.php'; ?>