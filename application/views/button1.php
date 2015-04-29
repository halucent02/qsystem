<?php require_once 'header.php'; ?>
<style>
.ui-dialog-titlebar-close {
  visibility: hidden;
}
</style>
<body class="logintab">
 <div class="heads">
   
   
<div class="buts1">
        <!-- ../frontline/jumpque-->
            <?php echo "<img class='jump' id='jumpbtn'>";?>
            <?php echo anchor("../frontline/nextque","<img class='next'>","class=''") ;?>
        </div>
      
      <nowserve>NOW SERVING:</nowserve>
       <?php 
	      $data = array(
	      'name'        => 'quename',
	      'class'       => 'servename',
	      'readonly'    => TRUE,
	      'value'       => 'Click Next to call new client',
	      );
	
	  	 echo form_textarea($data);
      
     ?>        

 </div>
