
 <?php 
  if(isset($_SESSION['cliente'])){
 require('./bar-administrador.php');
 ?>
<div class="row col-md-2" id="barrra-left" style="background-color:#337ab7;min-height:600px;">
</div>
<div class="row col-md-10" id="marcodetrabajo" style="background-color:#f8f8f8;">

</div>
<?php
 require('./footer.php');
}
  else{
	  require('./login.php');
	  
  }
?>
<script>

</script>



