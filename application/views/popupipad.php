
<div class="popup">


<div class="ar">ACKNOWLEDGEMENT RECEIPT NUMBER:</div>
<form id="ipadinfo2">
<input name="arf" type="text" class="arf" id="arf">
</form>



  <?php 
   $okpadbutton = array(
   				'type'=>'submit',
				'class'=>'okpad',
				'name'=>'ok',
				'content'=>'OK',
   );
   echo form_button($okpadbutton) ;?>
  
   
 <?php
   $cancelpadbutton = array(
   				'type'=>'submit',
				'class'=>'cancelpad',
				'name'=>'cancels',
				'content'=>'CANCEL',
   );
   echo form_button($cancelpadbutton) ;?>

</div>

