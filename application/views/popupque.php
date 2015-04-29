
	<div class="popupqs">
	<div class="counternumbs">COUNTER NUMBER:</div>
    
    
    	<select name="counter" class="ddownnum" id="counter">
	  		 <option value="">---SELECT---</option>
	  		 <!-- <?php 
				$c = 0;
				foreach($optionval as $value){
					$c = $c+1;
					$disabled = $value['sit']=="taken" ? 'disabled' : "";
					$taken = $disabled == 'disabled' ? 'Not available' : "";
					echo '<option value="'.$c.'" '.$disabled.'>'.$c." ".$taken.'</option>';
				}
		
			?> -->
			<?php 
				$c = 0;
				$agent = ucfirst(strtolower($this->session->userdata('firstname')))." ".ucfirst(substr($this->session->userdata('lastname'),0,1)).".";
				foreach($optionval as $value){
					$c = $c+1;
					$disabled = $value['sit'] &&  $value['sit'] != $agent ? 'disabled' : "" ;
					if($disabled == 'disabled'){
						$taken = $value['sit'];
					}else if( $value['sit'] == $agent){
						$taken = "My sit number";
					}else{
						$taken = "";
					}
					echo '<option value="'.$c.'" '.$disabled.'>'.$c." ".$taken.'</option>';
				}
		
			?>
	 		 <!-- <option value="1">1</option>	
	         <option value="2">2</option>
	  		 <option value="3">3</option>
	 		 <option value="4">4</option>
	         <option value="5">5</option>
	         <option value="6">6</option>	
	         <option value="7">7</option>
	  		 <option value="8">8</option>
	 		 <option value="9">9</option>
	         <option value="10">10</option>
	         <option value="11">11</option> -->
		</select>
    
    <div class="accepting">ACCEPTING:</div>
    
    
    
        <select name="transaction" class="accepts" id="transaction">
	  		 <option value="">---SELECT---</option>
	 		 <option value="FOR REPAIR">FOR REPAIR</option>	
	         <option value="RELEASING">RELEASING</option>
	  		 <option value="APPOINTMENT">APPOINTMENT</option>
	 		 <option value="INQUIRY">INQUIRY</option>
     
		</select>
    
    
    
   <?php 
   $savessbutton = array(
   				'type'=>'submit',
				'class'=>'savepop',
				'name'=>'saves',
				'content'=>'SAVE',
   );
   echo form_button($savessbutton) ;?>
  
   
 <?php 
   $cancelbutton = array(
   				'type'=>'submit',
				'class'=>'cancelpop',
				'name'=>'cancels',
				'content'=>'CANCEL',
   );
   echo form_button($cancelbutton) ;?>
   

    </div> 