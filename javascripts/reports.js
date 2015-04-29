$(document).ready(function(){
   
    
    $("#leftcol").hide();
    $("#secright").hide();
    $(".db2").hide();
    $('.checkeds :input').attr('disabled', true);
    $("#stats0").attr("checked", true);
    $("#stats2").attr("checked", true);
    
     $( "#fromyof_froms" ).datepicker();
     $( "#fromyof_to" ).datepicker();
     
     
     // function getValueUsingClass(){
    // /* declare an checkbox array */
    // var agentsssArray = [];
//     
    // /* look for all checkboes that have a class 'chk' attached to it and check if it was checked */
    // $(".agentsss:checked").each(function() {
        // agentsssArray.push($(this).val());
    // });
//     
    // /* we join the array separated by the comma */
    // var selected;
    // selected = agentsssArray.join(',') + ",";
//     
    // return selected;
// }
     
    $("#query").click(function(){
        //json format to submit data
                 
         if($("input[name=agentreds]:checked").val() == "selectedagent"){
             var agentsarray = new Array();
             $("input[name=agents]:checked").each(function() {  agentsarray.push($(this).val());});
         }else{
             var agentsarray = new Array();
             $("input[name=agents]").each(function() {  agentsarray.push($(this).val());});
         }
         
         
         if($("input[name=statusreds]:checked").val() == "selectedstat"){
             var statusarray = new Array();
             $("input[name=Checkboxstatus]:checked").each(function() {  statusarray.push($(this).val());});
         }else{
             var statusarray = new Array();
             $("input[name=Checkboxstatus]").each(function() {  statusarray.push($(this).val());});
         }
     
         var httpbase = $('#httpbase').val();
         var date_from= $('#fromyof_froms').val();
         var date_to= $('#fromyof_to').val();
         
         $.post(httpbase+'reports/query',{date_from:date_from, date_to:date_to, agents:agentsarray, status:statusarray},function(data){
             $(".fromfff").html(data.date_from);
             $(".tossf").html(data.date_to);
             $(".ffportion").html(data.viewtab);
             $(".transactsf").html(data.transac);
             $(".agentf").html(data.peragent);
      
             
             
             // $(".agentf").html(data.agent);
             
         },"json");
        //end jason process
        
        $(".emptyb").hide('10000');
        $("#leftcol").show('10000');
        $("#secright").show('10000');
    });
    
    $("#stats0").click(function(){
        $('.checkeds :input').attr('disabled', true);
        $('.stat').attr("checked", false);
    });
    
    $("#stats1").click(function(){
        $('.checkeds :input').attr('disabled', false);
    });
    
    $("#stats2").click(function(){
        $(".db2").hide('10000');
        $('.agentsss').attr("checked", false);
    });
    
     $("#stats3").click(function(){
        $(".db2").show('10000'); 
    });

});