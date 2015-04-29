
	<div class="workspace">
    	<div class="namess"><?php echo $this->session->userdata('firstname') ? "Hi ".$this->session->userdata('firstname') : "Your not an authorized user" ;?></div>
   		
        <div class="pending">  
        
            
   <div class="radios">
  <?php echo form_open_multipart("../frontline/job","id='selectjob'");

        $status = $this->session->userdata('status');
        $jobview = array(
        		'id' =>'jobview',
	  			'name'=>'job',
	  			'class'=>'jobstat',
	  			'value'=>'job',
	  			'checked'=> 'job' == $status ? TRUE : FALSE,
	  );
	  
	  $allview = array(
	  			'id' =>'allview',
	  			'name'=>'job',
	  			'class'=>'jobstat',
	  			'value'=>'all',
	  			'checked'=> 'all' == $status ? TRUE : FALSE,
	  );
	  
	  echo form_radio($jobview)."JOB";
	  echo form_radio($allview)."ALL";
	 
   	  echo form_close() 
   
   ;?>
   
   </div> 
   
<div class="titpends">
		<div class="pendnum"><?php echo $pending_count ;?></div>
   	  <pendingn>PENDING</pendingn>
                    
   		  </div> <!------ titpends close ----->
                     
                        
                        <div class="pendarea">
                        		<?php if(isset($pending)): foreach ($pending as $pends) : ?>
                        			<?php
										$frontline = new Frontline;	
									?>
                                <div class="pendform">
                                	<div class="nums"><?php echo  $pends['numberque'] ;?></div>
                                    <div class="names"><?php echo  $pends['firstname']." ".$pends['lastname'] ;?></div>
                                    <div class="status"><?php echo  $pends['status'] ;?></div>
                                			<div class="serveby<?php echo $pends['flag']? "1" : "" ;?>">
                                				<?php echo $pends['flag']?  "Serving by: ".$frontline->tagger($pends['flag'])."." : "AVAILABLE" ;?>
                                			</div>		
                          </div> <!----- pendform close ---->
                                                   <br>
                                <?php endforeach; endif; ?>
                                               
                                            
                                         
		  </div><!--PENDAREACLOSE--->
                        	
	  </div><!-----pending close ----->
                
             
             
                
                
        <div class="servved">
        <div class="titserve">
        <div class="servenum"><?php echo $served_count ;?></div>
                	<serven>SERVED</serven>
                    
                		
                        </div> <!----- titserve close --->
                        
                   	  <div class="servearea">
                                	<?php if(isset($served)): foreach($served as $serves) :?>
	                                	<div class="serform">
		                                	<div class="sernums"><?php echo  $serves['numberque'] ;?></div>
		                                    <div class="sernames"><?php echo  $serves['firstname']." ".$serves['lastname'] ;?></div>
		                                    <div class="serstatus"><?php echo  $serves['status'] ;?></div>
		                                    <div class="sercs"><?php echo  $serves['agent'] ;?></div>
	     
	                                    </div> <!------serform ------>
                                        <br>
                                   <?php endforeach; endif;?>
                     </div> <!----- serve area --->
                     
                        
        </div><!------SERVVED CLASS close ----> 
        
        
        
        <div class="skipped">
        		<div class="titskip">
                 <div class="skipnum"><?php echo $skipped_count ;?></div>
                	<skipn>SKIPPED</skipn>
                   
                		</div> <!------titskip close----->
        
              
                   <div class="pendarea">
                        		<?php if(isset($skipped)): foreach($skipped as $skips) :?>
                                <div class="pendform">
                                	<div class="nums"><?php echo  $skips['numberque'] ;?></div>
                                    <div class="names"><?php echo  $skips['firstname']." ".$skips['lastname'] ;?></div>
                                    <div class="status11"><?php echo  $skips['status'] ;?></div>
                                </div>
                                <br>
                                <?php endforeach ; endif;?>
                                                    
                     </div>                             
        		</div><!----SKIPPED CLASS CLOSE--->
   
   
   <div class="countnum"><?php echo $this->session->userdata('counter') ? $this->session->userdata('counter') : "" ?></div>
   		<div class="counternum">COUNTER NUMBER </div>
        <div class="statuscounter"><?php echo $this->session->userdata('transaction') ? $this->session->userdata('transaction') : "" ?></div>
   
   	<?php
   	echo form_open("logout");
   $logoutbutton = array(
   				'type'=>'submit',
				'class'=>'logsout',
				'name'=>'LOGout',
				'content'=>'LOG OUT',
   );
   echo form_button($logoutbutton);
   echo form_close(); 
   ;?>
  
  
  
   	<?php 
   $editcounterbutton = array(
   				'type'=>'submit',
				'class'=>'editcounter',
				'name'=>'CHANGE COUNTER',
				'content'=>'CHANGE COUNTER',
   );
   echo form_button($editcounterbutton) ;?>
   
  
   <?php
   echo form_open("","id=form_menu");
   $backtabesbutton = array(
   				'type'=>'button',
   				'id'=>'backbtn',
				'class'=>'backtabes',
				'name'=>'saves',
   );

   echo form_button($backtabesbutton);
  echo form_close();

   ?>
  
   
   
   
    </div><!-----WORKspace-->
<?php require_once 'popupjumpque.php'; ?>    
<?php require_once 'popupque.php'; ?>  
<?php require_once 'footer.php'; ?>
