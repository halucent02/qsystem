<?php require_once 'header.php'; ?>

<body class="loginbody">
<div class="background">
	
	<div class="logo"></div>
   <quesys>QUEUING SYSTEM</quesys>
   <username>USERNAME:</username>
   <?php echo form_open('/login/verifyUser') ;?>
   <input name="username" type="text" class="userss">
   <pass>PASSWORD:</pass>
   <input name="password" type="password" class="password">


   <?php 
   $quebutton = array(
   				'type'=>'submit',
				'class'=>'log',
				'name'=>'login',
				'content'=>'LOGIN',
   );
   echo form_button($quebutton) ;?>
   
<?php echo form_close() ;?>



<div class="tag"></div>




</div><!-- div for background -->

<?php require_once 'footer.php'; ?>