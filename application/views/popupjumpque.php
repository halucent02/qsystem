
<div class="popupjumps">
<?php echo form_open("../frontline/jumpque","id='jumpform'") ;?>
<div class="number">ENTER THE SKIPPED NUMBER:</div>
<input name="skip" type="text" class="numbsf" id="skip">


  <?php 
   $okbutton = array(
   				'type'=>'submit',
				'class'=>'okpop',
				'name'=>'okjump',
				'content'=>'OK',
   );
   echo form_button($okbutton) ;?>
  
   
 <?php
   $cancelsbutton = array(
   				'type'=>'submit',
				'class'=>'cancelpops',
				'name'=>'canceljump',
				'content'=>'CANCEL',
   );
   echo form_button($cancelsbutton) ;?>
<?php echo form_open("frontline/jumpque") ;?>
</div>