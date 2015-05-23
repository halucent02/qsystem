$(document).ready(function(){
    $(".popupjumps").hide();
    $("div.message").hide();
    $(".popup").hide();
    $(".popupqs").hide();


    $("#adminbtn").click(function(event){
        event.preventDefault();
        if (confirm("Are you sure the details are correct?") == true) {
            $("#admin_form").submit();
        }
    });

    $(".jobstat").click(function(event){
        event.preventDefault();
        $("#selectjob").submit();
    });

    $(".buttons1").click(function(event){
        event.preventDefault();
        $("#form_menu").attr("action","frontline").submit();
    });

    $(".buttons2").click(function(event){
        event.preventDefault();
        $("#form_menu").attr("action","backroom").submit();
    });

    $(".buttons3").click(function(event){
        event.preventDefault();
        $("#form_menu").attr("action","admin").submit();
    });

    $(".buttons4").click(function(event){
        event.preventDefault();
        $("#form_menu").attr("action","reporitorial").submit();
    });

    $(".buttons1s").click(function(event){
        event.preventDefault();
        $("#form_menu").attr("action","frontline").submit();
    });

    $(".buttons2s").click(function(event){
        event.preventDefault();
        $("#form_menu").attr("action","backroom").submit();
    });

    $(".backtabes").click(function(event){
        event.preventDefault();
        var acctype = $("#acctype").val();
        var httpbase = $("#httpbase").val();
        if(acctype == 'admin'){
            $("#form_menu").attr("action",httpbase+"menu").submit();
        }else{
            $("#form_menu").attr("action",httpbase+"menustaff").submit();
        }
    });

    $(".backs").click(function(event){
        event.preventDefault();
        var acctype = $("#acctype").val();
        var httpbase = $("#httpbase").val();
        if(acctype == 'admin'){
            $("#form_menu").attr("action",httpbase+"menu").submit();
        }else{
            $("#form_menu").attr("action",httpbase+"menustaff").submit();
        }
    })

    $(".back").click(function(event){
        event.preventDefault();
        var acctype = $("#acctype").val();
        var httpbase = $("#httpbase").val();
        if(acctype == 'admin'){
            $("#form_menu").attr("action",httpbase+"menu").submit();
        }else{
            $("#form_menu").attr("action",httpbase+"menustaff").submit();
        }
    })

    $(".backmenu").click(function(event){
        event.preventDefault();
        var acctype = $("#acctype").val();
        var httpbase = $("#httpbase").val();
        if(acctype == 'admin'){
            $("#form_menu").attr("action",httpbase+"menu").submit();
        }else{
            $("#form_menu").attr("action",httpbase+"menustaff").submit();
        }
    })
    
    //check qued list
     function checklist(){
		var httpbase = $('#httpbase').val();
		var selected = $('.selected_que').val();
    	
    	$.post(httpbase+"quelist/updatelist",
  		{selected: selected})
  		.done(function(data){
  		$(".listaf").html(data);
		$(".hide_que").show();	
  		})
		.fail(function(data){
		var httpbase2 = $('#httpbase').val();
		var disconnected = "";
		disconnected +="<tr>";
		disconnected +="<td>";
		disconnected +="<h4>";
		disconnected +='<img src="http://localhost/qsystem/images/sysimg/logot.png" alt="NO INTERNET CONNECTION">';
		disconnected +="</h4>";
		disconnected +="</td>";
		disconnected +="</tr>";
		
		$(".listaf").html(disconnected);
		$(".hide_que").hide();
		
		});
		
  		
  		setTimeout(function(){checklist();}, 5000);
     }
     checklist();
     
     $("#allque").click(function(){
		 $('.selected_que').val("ALL");
     	checklist();
     });
	  $("#forrepair_que").click(function(){
		   $('.selected_que').val("FOR REPAIR");
     	checklist();
     })
	  $("#inquiry_que").click(function(){
		   $('.selected_que').val("INQUIRY");
     	checklist();
     })
	  $("#appointment_que").click(function(){
		   $('.selected_que').val("APPOINTMENT");
     	checklist();
     })
	  $("#releasing_que").click(function(){
		   $('.selected_que').val("RELEASING");
     	checklist();
     })
	// end check qued list

  
});