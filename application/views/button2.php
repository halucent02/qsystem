<?php require_once 'header.php'; ?>
<style>
.ui-dialog-titlebar-close {
  visibility: hidden;
}
</style>
<body class="logintab">
 <div class="heads">
 	<?php 
      if($this->session->userdata('call_prepared')=='1'){ 
        echo "<div class='green'></div>";
	  }elseif($this->session->userdata('call_prepared')=='0'){
       echo "<div class='yellow'></div>";
	  }
   ?>
<div class="buts2">
        
        	
            <?php echo anchor("../frontline/serveque","<img class='SERVE'>","class=''") ;?>
            <?php echo anchor("../frontline/skipque","<img class='SKIP'>","class=''") ;?>
            <?php echo anchor("../frontline/callque","<img class='CALL'>","class=''") ;?>
        </div>
      
      <nowserve>NOW SERVING:</nowserve> 
      <?php 
	      $data = array(
	      'name'        => 'quename',
	      'class'       => 'servename',
	      'readonly'    => TRUE,
	      'value'       => "[".
	                       $this->session->userdata('call_number')."] ".
	                       $this->session->userdata('call_salutation')." ".
	                       $this->session->userdata('call_fname')." ".
	                       $this->session->userdata('call_lname'),
	      );
	
	  	 echo form_textarea($data);
      
     ?>    

 </div>
