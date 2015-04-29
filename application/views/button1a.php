<?php require_once 'header.php'; ?>
<style>
.ui-dialog-titlebar-close {
  visibility: hidden;
}
</style>
<body class="logintab">
<div class="heads">
   
   
    <div class="buts1">
            <?php echo anchor("","<img class='done'>","class=''") ;?>
    </div>
      
      <nowserve>NOW SERVING:</nowserve>

       <?php 
	        $data = array(
	        'name'        => 'quename',
	        'class'       => 'servename',
	        'readonly'    => TRUE,
	        'value'       => 'Click DONE if transaction is FINISH',
	        );
	
	  	 echo form_textarea($data);
      
       ?>


 </div>
