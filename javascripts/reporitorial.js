$(document).ready(function(){
     $(".fromthisyear").datepicker();
     $(".tothisyear").datepicker();
     $(".percentage_of_service").click(function(){
         $("#form_date").attr("action","reporitorial/percentage_of_service").submit();
     });

      $(".service_duration").click(function(){
         $("#form_date").attr("action","reporitorial/service_duration").submit();
     });

      $(".service_time_per_agent").click(function(){
         $("#form_date").attr("action","reporitorial/service_time_per_agent").submit();
     });

      $(".clients_by_date").click(function(){
         $("#form_date").attr("action","reporitorial/clients_by_date").submit();
     });

      $(".clients_arrival_per_hour").click(function(){
         $("#form_date").attr("action","reporitorial/clients_arrival_per_hour").submit();
     });

      $(".clients_per_weekday").click(function(){
         $("#form_date").attr("action","reporitorial/clients_per_weekday").submit();
     });
    $(".dt").click(function(){
        $("#form_date").attr("action","reporitorial/daily_transaction").submit();
    });
    $(".dtsa").click(function(){
        $("#form_date").attr("action","reporitorial/daily_transaction_by_SA").submit();
    });
    $(".dts").click(function(){
        $("#form_date").attr("action","reporitorial/daily_transaction_by_S").submit();
    });

});