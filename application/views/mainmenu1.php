<?php require_once 'header.php'; ?>

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


<body class="bodymenu">
	
    <div class="worksed">
    
    <div class="buttonsfmenu">
    
    	<!--<div class="buttons1"></div>
       	<div class="buttons2"></div>
        <div class="buttons3"></div>
        <div class="buttons4"></div> -->
    
       
    <?php
	//source
   $buttons_1buttons = array(
   				'type'=>'submit',
				'class'=>'buttons1s',
				'name'=>'buttons1s',
				
   );
   
      $buttons_1abuttons = array(
   				'type'=>'submit',
				'class'=>'buttons_1s',
				'name'=>'que_1a',
				
   );
   
   
   $buttons_2buttons = array(
   				'type'=>'submit',
				'class'=>'buttons2s',
				'name'=>'rels2',
				
   );
   
     $buttons_2sbuttons = array(
   				'type'=>'submit',
				'class'=>'buttons_2s',
				'name'=>'rels2',
				
   );
    //end source
     ?>
  
  
      <?= form_open_multipart("","id=form_menu"); ?>
      
      <div class="b_1que">
     <?= form_button($buttons_1buttons) ; ?>
     <?= form_button($buttons_1abuttons) ; ?>
     </div>
     
     <div class="b_2que">
     <?= form_button($buttons_2buttons) ; ?>
     <?= form_button($buttons_2sbuttons) ; ?>
     </div>
    <?= form_close(); ?>

   

    
    
    			</div><!---buttonsfmenuend-->
    </div> <!---worksend-->









<?php require_once 'footer.php'; ?>