//s +++++++ RELEASING ++++++++++++++
$(".popup").dialog({modal: true,
  									autoOpen: false,
  									});
  	$(".rel").click(function(){
  		$( ".popup" ).dialog({
  							autoOpen: true,
  							title: "Enter the AR number",
  							show: {effect: "clip", duration: 700},
  							height: 350,
  							width: 580,
							position: {my:"center", at:"center",of: $(".bgpad")},
  							resizable: false, 
  							});
    });
  	$(".popup").dialog({
  							hide: { effect: "clip", duration: 800 },
  							closeOnEscape: false,
  					});
  					
   $(".cancelpad").click(function(){
   		$(".popup").dialog('close');
   		$("#arf").val('');
   		//document.getElementById('arf').value ="";
   });
   
   $(".okpad").click(function(){
   	$(".popup").dialog('close');
   	
    if (confirm("Are all the details correct?") == true) {
    	
    	var httpbase = $('#httpbase').val();
  		var salutation = $('#ipadinfo_sl').val();
  		var firstname = $("#ipadinfo_fn").val();
  		var lastname = $("#ipadinfo_ln").val();
  		var ar = $("#arf").val();
  		var status = "RELEASING";
		
		$.post(httpbase+"ipadque/addpending",
  		{salutation:salutation, firstname:firstname, lastname:lastname, ar:ar, status:status},
  		function(data){
  		$(".message").html(data);	
  		});
		
			
    	$("#arf").val('');
    	$("#ipadinfo_sl").val('');
        $("#ipadinfo_fn").val('');
        $("#ipadinfo_ln").val('');
        $("div.message").fadeIn(300).delay(5000).fadeOut(300);
        
        // setTimeout(function(){
    		// location.reload();
			// },6000);
		
    } else {
        alert("All fields will be reverted!");
        $("#arf").val('');
        $("#ipadinfo_sl").val('');
        $("#ipadinfo_fn").val('');
        $("#ipadinfo_ln").val('');
    }
    

	});
 //s +++++++ END RELEASING ++++++++++++++
 
//s +++++++ FOR REPAIR++++++++++++++
$(".forep").click(function(){
   	
    if (confirm("Are all the details correct?") == true) {
    	
    	var httpbase = $('#httpbase').val();
  		var salutation = $('#ipadinfo_sl').val();
  		var firstname = $("#ipadinfo_fn").val();
  		var lastname = $("#ipadinfo_ln").val();
  		var ar = "";
  		var status = "FOR REPAIR";
		
		$.post(httpbase+"ipadque/addpending",
  		{salutation:salutation, firstname:firstname, lastname:lastname, ar:ar, status:status},
  		function(data){
  		$(".message").html(data);	
  		});
		
    	$("#ipadinfo_sl").val('');
        $("#ipadinfo_fn").val('');
        $("#ipadinfo_ln").val('');
        $("div.message").fadeIn(300).delay(5000).fadeOut(300);
        
		
    } else {
        alert("All fields will be reverted!");
        $("#ipadinfo_sl").val('');
        $("#ipadinfo_fn").val('');
        $("#ipadinfo_ln").val('');
    };
    
});
 //s +++++++ END FOR REPAIR++++++++++++++

//s +++++++ APPOINTMENT++++++++++++++
$(".app").click(function(){
   	
    if (confirm("Are all the details correct?") == true) {
    	
    	var httpbase = $('#httpbase').val();
  		var salutation = $('#ipadinfo_sl').val();
  		var firstname = $("#ipadinfo_fn").val();
  		var lastname = $("#ipadinfo_ln").val();
  		var ar = "";
  		var status = "APPOINTMENT";
		
		$.post(httpbase+"ipadque/addpending",
  		{salutation:salutation, firstname:firstname, lastname:lastname, ar:ar, status:status},
  		function(data){
  		$(".message").html(data);	
  		});
		
    	$("#ipadinfo_sl").val('');
        $("#ipadinfo_fn").val('');
        $("#ipadinfo_ln").val('');
        $("div.message").fadeIn(300).delay(5000).fadeOut(300);
        
		
    } else {
        alert("All fields will be reverted!");
        $("#ipadinfo_sl").val('');
        $("#ipadinfo_fn").val('');
        $("#ipadinfo_ln").val('');
    };
    
});
 //s +++++++ END APPOINTMENT++++++++++++++
 
//s +++++++ INQUIRY++++++++++++++
$(".inq").click(function(){
   	
    if (confirm("Are all the details correct?") == true) {
    	
    	var httpbase = $('#httpbase').val();
  		var salutation = $('#ipadinfo_sl').val();
  		var firstname = $("#ipadinfo_fn").val();
  		var lastname = $("#ipadinfo_ln").val();
  		var ar = "";
  		var status = "INQUIRY";
		
		$.post(httpbase+"ipadque/addpending",
  		{salutation:salutation, firstname:firstname, lastname:lastname, ar:ar, status:status},
  		function(data){
  		$(".message").html(data);	
  		});
		
    	$("#ipadinfo_sl").val('');
        $("#ipadinfo_fn").val('');
        $("#ipadinfo_ln").val('');
        $("div.message").fadeIn(300).delay(5000).fadeOut(300);
        
		
    } else {
        alert("All fields will be reverted!");
        $("#ipadinfo_sl").val('');
        $("#ipadinfo_fn").val('');
        $("#ipadinfo_ln").val('');
    };
    
});
 //s +++++++ END INQUIRY++++++++++++++
 
 //s ++++++++  LOGINTABLE POPUPJUMPQUE ++++++++++
$(".popupjumps").dialog({modal: true,
  									autoOpen: false,
  									});
  	$("#jumpbtn").click(function(){
  		$( ".popupjumps" ).dialog({
  							autoOpen: true,
  							title: "The skipped number to be serve",
  							show: {effect: "clip", duration: 700},
  							height: 230,
  							width: 394,
							position: {my:"center", at:"center",of: $(".logintab")},
  							resizable: false, 
  							});
    });
  	$(".popupjumps").dialog({
  							hide: { effect: "clip", duration: 800 },
  							closeOnEscape: false,
  					});
  					
   $(".cancelpops").click(function(){
   		$(".popupjumps").dialog('close');

   });
   
   $(".okpop").click(function(){
   	$(".popupjumps").dialog('close');
   	
    if (confirm("Serve this skipped number?") == true) {
    	
		$("#jumpform").submit();
	
    } else {
        alert("Skipped serving canceled!");

    }
    

	});

//s ++++++++ END LOGINTABLE POPUPJUMPQUE ++++++++++
 
//s ++++++++ LOGINTABLE POPUPQUE ++++++++++

$(".popupqs").dialog({modal: true,
  									autoOpen: false,
  									});
  	$(".editcounter").click(function(){
  		$( ".popupqs" ).dialog({
  							autoOpen: true,
  							title: "Select Counter and Transaction",
  							show: {effect: "clip", duration: 700},
  							height: 230,
  							width: 390,
							position: {my:"center", at:"center",of: $(".logintab")},
  							resizable: false, 
  							});
    });
  	$(".popupqs").dialog({
  							hide: { effect: "clip", duration: 800 },
  							closeOnEscape: false,
  					});
  					
   $(".cancelpop").click(function(){
   		$(".popupqs").dialog('close');
   });
   
   $(".savepop").click(function(){
   	$(".popupqs").dialog('close');
   	
    if (confirm("Save changes?") == true) {
    	
    	var httpbase = $('#httpbase').val();
  		var counter = $('#counter').val();
  		var transaction = $('#transaction').val();
		
		$.post(httpbase+"frontline/update_users_handle",
  		{counter:counter,transaction:transaction}
  		);
		
		//you can delete the content here or not
    	//$("#ipadinfo_sl").val('');
        //$("#ipadinfo_fn").val('');
       setTimeout(function(){location.reload();},6000);
        
		
    } else {
        alert("No changes happened!");

    }
    

	});
//s ++++++++ END LOGINTABLE POPUPQUE ++++++++++
