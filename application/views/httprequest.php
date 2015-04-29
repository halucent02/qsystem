<?php
$actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
$base_link = base_url();
?>
<input type="hidden" id="httprequest" value="<?php echo $actual_link ?>"/>
<input type="hidden" id="httpbase" value="<?php echo $base_link ?>"/>
<input type="hidden" id="error_pass" value="<?php echo "" ;?>"/>
<input type="hidden" id="acctype" value="<?php echo $this->session->userdata('acct_type') ;?>"/>