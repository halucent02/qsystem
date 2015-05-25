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
     	localStorage.removeItem('imgdowninternet');
		var httpbase = $('#httpbase').val();
		var selected = $('.selected_que').val();
		
		if(localStorage){
			if(!(localStorage.getItem('imgdowninternet'))){
				var imagedatafordowningternet = httpbase+"images/sysimg/noconnection.png";
				localStorage.setItem('imgdowninternet',imagedatafordowningternet);
			}
		}
    	
    	$.post(httpbase+"quelist/updatelist",
  		{selected: selected})
  		.done(function(data){
  		$(".listaf").html(data);
		$(".listaf2").html("");
		$(".hide_que").show();	
  		})
		.fail(function(data){
		var disconnected = "";
		disconnected +="<div class='row'>";
		disconnected +="<div class='col-lg-12 col -md-12 col-xs-12'>";
		disconnected +='<img src="'+localStorage.getItem("imgdowninternet")+'" class="img-responsive" alt="NO INTERNET CONNECTION">';
		disconnected +="</div>";
		disconnected +="</div>";
		
		
		/*disconnected +="<tr>";
		disconnected +="<td>";
		disconnected +="<h4>";
		disconnected +='<img src="'+localStorage.getItem("imgdowninternet")+'" alt="NO INTERNET CONNECTION">';
		disconnected +="</h4>";
		disconnected +="</td>";
		disconnected +="</tr>";*/
		$(".listaf").html("");
		$(".listaf2").html(disconnected);
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