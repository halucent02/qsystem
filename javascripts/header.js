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

  
});