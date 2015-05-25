<?php require_once 'header.php'; ?>

<div class="container-fluid">
			
            	<div class="row">
                	<div class="que_h_cont col-lg-12">
                		<center><div class="que_h">QUEUEING SYSTEM PROGRESS</div></center>
                    </div>
                </div>
			
                    <div class="row">
                            <div class="table_height col-lg-12 col-xs-12">
                                    <div class="table-responsive">
                                        <table class=" table table-striped table-bordered table-condensed table-hover listaf"></table>
                                    </div>
                            </div>
                    </div>
                    <hr>
                      <div class="row">
                     
                             <div class="btn-group col-lg-2 col-md-12 col-xs-12" role="group">
                                        <button type="button" id ="allque" class="btn btn-primary testings">All Queue</button>
                             </div>
                             
                              <div class="btn-group col-lg-2 col-md-12 col-xs-12"  role="group">
                                        <button type="button" id ="forrepair_que" class="btn btn-primary testings">For Repair</button>
                              </div>
                              <div class="btn-group col-lg-2 col-md-12 col-xs-12" role="group">
                                        <button type="button" id ="releasing_que" class="btn btn-primary testings">Releasing</button>
                              </div>
                                      
                              <div class="btn-group col-lg-2 col-md-12 col-xs-12" role="group">
                                        <button type="button" id ="appointment_que" class="btn btn-primary testings">Appointment</button>
                              </div>
                                      
                              <div class="btn-group col-lg-2 col-md-12 col-xs-12" role="group">
                                        <button type="button" id ="inquiry_que" class="btn btn-primary testings">Inquiry</button>
                              </div>
                 
                 						<input type="hidden" class="selected_que" value="ALL">
                          
                   
                 	  </div><!---row-->   
</div> <!---container-fluid-->




<?php require_once 'footer.php'; ?>