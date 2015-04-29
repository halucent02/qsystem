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

<body class="adminqueb">
	
	<div class="admins">
    	<div class="adminhead">ADMIN PANEL</div>
        <div class="firstlast">
        	 <firstn>FIRST NAME:</firstn>
             <input name="firstf" type="text" class="ff">
             <lastn>LAST NAME:</lastn>
             <input name="lastf" type="text" class="nn">
        </div>
   
   
       <div class="userpass">
        	 <usern>USER NAME:</usern>
             <input name="username" type="text" class="uu">
             <passn>PASSWORD:</passn>
             <input name="password" type="password" class="pp">
             <acc>ACCOUNT TYPE:</acc>
             
    <select name="account_type" class="acctype">
  		 <option>---SELECT---</option>
 		 <option value="admin">Administrator</option>	
         <option value="cs-frontline">Staff-frontline</option>
         <option value="cs-backroom">Staff-backroom</option>
	</select>
    
    
       <?php 
   $savebutton = array(
   				'type'=>'button',
   				'id'=>'adminbtn',
				'class'=>'save',
				'name'=>'saves',
				'content'=>'SAVE INFO',
   );
   echo form_button($savebutton) ;?>
   <?php echo form_close() ;?>
  
             
        </div> <!--- user pass closure ------>
    
    



<!-------------------------------FOR IP PANE --------------->

	<div class="ippane">
        	 <ipaddress>IP ADDRESS:</ipaddress>
             <input name="ipadd" type="text" class="ipad">
             <named>IP NAME:</named>
             <input name="nameds" type="text" class="nems">
             
                <?php 
   $savedbutton = array(
   				'type'=>'button',
   				'id'=>'adminbtnd',
				'class'=>'saveds',
				'name'=>'saves',
				'content'=>'SAVE',
   );
   echo form_button($savedbutton) ;?>
   <?php echo form_close() ;?>
    
    	<powered>POWERED BY: ESG</powered>
    <div class="logs"></div>
    
    <?php
    echo form_open("","id=form_menu");
    $backbutton = array(
   				'type'=>'button',
   				'id'=>'backbtn',
				'class'=>'back',
				'name'=>'saves',
			
   );
   echo form_button($backbutton) ;?>
   <?php echo form_close() ;?>
  
        </div> <!------ippane close ----->
    </div> <!---- admins closure ---->
    
    
    			<div class="listusers-cont">
                	<div class="listofusers-h">LIST OF USERS</div>
                    	<div class="list-cont">
                        	<div class="user-contain">
                            	<div class="name-h">NAME:</div>
                                <div class="name-f">DARYL VILLARBA MICHAEL JOE</div>
                                	<div class="name-h">ACCOUNT TYPE:</div>
                                	<div class="acctype-f">STAFF-FRONTLINE</div>
                                 
                                		<div class="name-h">ACTIVATED?:</div>
                                		<div class="activated-f">YES</div>

                                                    <div class="list-btn-cont">
                                                             <?php 
                                                               $demotebutton = array(
                                                                            'type'=>'button',
                                                                            'class'=>'demotebtn',
                                                                            'id'=>'demotebtn',
                                                                            'content'=>'DEMOTE',
                                                               );
                                                               echo form_button($demotebutton) ;?>
                                                               
                                                                <?php 
                                                               $activatebutton = array(
                                                                            'type'=>'button',
                                                                            'class'=>'demotebtn',
                                                                            'id'=>'activatebtn',
                                                                            'content'=>'ACTIVATE',
                                                               );
                                                               echo form_button($activatebutton) ;?>
                                                               
                                                               
                                                               <?php 
                                                               $deletebutton = array(
                                                                            'type'=>'button',
                                                                            'id'=>'deletebtn',
                                                                            'class'=>'demotebtn',
                                                                            'content'=>'DELETE',
                                                               );
                                                               echo form_button($deletebutton) ;?>
                                                    </div><!-----list-btn-cont-->
                            </div>  <!---usercontainer---->
                         
                        </div>
              
                </div><!--listusers-cont-->
                
                
 <center><h1><?php echo isset($adduser_confirmation) ? $adduser_confirmation : "" ;?></h1></center>     
	<?php echo form_open_multipart('admin/adduser','id="admin_form"') ?>

<?php require_once 'footer.php'; ?>

