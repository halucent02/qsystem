<?php require_once 'header.php'; ?>

<body class="bodymenu">
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


    <div class="worksed">

    
    <div class="buttonsfmenu">
    
    	<!--<div class="buttons1"></div>
       	<div class="buttons2"></div>
        <div class="buttons3"></div>
        <div class="buttons4"></div> -->
    
       
    <?php
	//source
   $buttons1button = array(
   				'type'=>'button',
				'class'=>'buttons1',
				'name'=>'butts1',
				
   );
   
   $buttons1button1 = array(
   				'type'=>'button',
				'class'=>'buttons1a',
				'name'=>'butts1',
				
   );
   $buttons2button = array(
   				'type'=>'button',
				'class'=>'buttons2',
				'name'=>'rels',
				
   );
   
   $buttons2button_1 = array(
   				'type'=>'button',
				'class'=>'buttons2_1',
				'name'=>'rels',
				
   );
   
   
   $buttons3button = array(
   				'type'=>'button',
				'class'=>'buttons3',
				'name'=>'apps',
				
   );
   
      $buttons3button1 = array(
   				'type'=>'button',
				'class'=>'buttons31a',
				'name'=>'apps',
				
   );
   $buttons4button = array(
   				'type'=>'button',
				'class'=>'buttons4',
				'name'=>'inqs',
				
   );
   
      $buttons4button1 = array(
   				'type'=>'button',
				'class'=>'buttons4a',
				'name'=>'inqs',
				
   );

   //end source
 ?>
 
    <?= form_open_multipart("","id=form_menu"); ?>
    <div class="b1que">
		<?= form_button($buttons1button) ;?>
        <?= form_button($buttons1button1) ;?>
    </div>
    <div class="b2que">
    	<?= form_button($buttons2button) ;?>
        <?= form_button($buttons2button_1) ;?>
    </div>
    <div class="b3que">
    <?= form_button($buttons3button) ;?>
    <?= form_button($buttons3button1) ;?>
    </div>
    <div class="b4que">
    <?= form_button($buttons4button) ;?>
    <?= form_button($buttons4button1) ;?>
    </div>
    <?= form_close();?>
   
   
  
    
    
    			</div><!---buttonsfmenuend-->
    </div> <!---worksend-->









<?php require_once 'footer.php'; ?>