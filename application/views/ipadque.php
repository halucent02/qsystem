 <?php require_once 'header.php'; ?>

<style>
error{color:#C33;}
success{color:#FFF;}

.message{
	width:1024px; height:100px; margin:auto; margin-top:240px;
	text-align:center; font-family:din_reg; font-size: 40px; font-weight:bolder;
	background-color:#039;  border-radius:20px;
	}
.ui-dialog-titlebar-close {
  visibility: hidden;
}
</style>

<body class="ipadbody">
<div class="bgpad">
<div class="headerpad"></div>
<div class="mids">
	<form id="ipadinfo1">
			<salutation>SALUTATION:</salutation>
			<firstname>FIRST NAME:</firstname>
		    <lastname>LAST NAME:</lastname>
			<input name="fnames" maxlength="10" type="text" class="fn" id="ipadinfo_fn">
		    
		    <select name="salutation" class="ddownab" id="ipadinfo_sl">
		    	 <option value="">--SELECT--</option>
		 		 <option value="MR">Mr.</option>	
		         <option value="MS">Ms.</option>
		  		 <option value="MRS">Mrs.</option>
			</select>
		    
		    <input name="lnames" maxlength="15" type="text" class="ln" id="ipadinfo_ln">
   </form>
    <div class="pleasepress"> Please PRESS on the service you require:</div>
    <div class="message1s">Welcome to Power Mac Center Apple Authorized Service Provider Glorietta 5<br>
    	<center><div class="ipadquefont">Please fill out the details below and press on the service you require.</div></center>
			</div>
				</div>
                
                
<div class="bots">
<!--<a href=""><img class="forep"></a>
<a href=""><img class="rel"></a>
<a href=""><img class="app"></a>
<a href=""><img class="inq"></a>
-->
	
   
    <?php
	//source
   $forepbutton = array(
   				'type'=>'submit',
				'class'=>'forep',
				'name'=>'rep',
				
   );
   $relbutton = array(
   				'type'=>'submit',
				'class'=>'rel',
				'name'=>'rels',
				
   );
   $appbutton = array(
   				'type'=>'submit',
				'class'=>'app',
				'name'=>'apps',
				
   );
   $inqbutton = array(
   				'type'=>'submit',
				'class'=>'inq',
				'name'=>'inqs',
				
   );
   //end source
   echo form_button($forepbutton) ;
   echo form_button($relbutton) ;
   echo form_button($appbutton) ;
   echo form_button($inqbutton) ;
   
   
   ?>

<div class="message">
</div>




</div><!--div for ipadboddy-->

<?php require_once 'popupipad.php'; ?>
<?php require_once 'footer.php'; ?>