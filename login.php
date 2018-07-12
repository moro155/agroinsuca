<?php require('metaheader.php');?>
<?php SESSION_START();?>
<?php
if(isset($_SESSION['cliente'])){
	$v1=$_SESSION['cliente']['user'];
	$v2=$_SESSION['cliente']['pasword'];
	$v3=$_SESSION['cliente']['imagen'];
	$con=mysqli_connect('localhost','root','');
	mysqli_select_db($con,"db_agroinsuca");
	$qry="select user,password,imagen from users where user='$v1' and password='$v2'";
	$result=mysqli_query($con,$qry);
	$lista=mysqli_fetch_array($result);
	if($lista){
	$_SESSION['cliente']=array("user"=>$v1,"pasword"=>$v2,"imagen"=>$v3);
	echo "<script>history.pushState('data', '', './administrador.php');</script>";
	require('./administrador.php');
	}else{
		?>
	<script>
function validarform(){
	var v1=$("#lusr").val();
	var v2=$("#lpasw").val();
	
if (v1<1){
	$("#lusr").focus();
	$("#str1").text(" * ");
}else{
	$("#str1").text("");
}
if (v2<1){
	$("#lpasw").focus();
	$("#str2").text(" * ");
}else{
	$("#str2").text("");
}

}
</script>
<div class="row" >
<p></p>
<div class="row col-md-4">
</div>
<div class="form-group col-md-4" style="margin-top:15%;padding:50px;background-color:#f8f8f8;border-radius:15px;">
<center><span id="msgerror" class="danger"></span></center>
<h3>Loggin</h3>
<form role="form" method="POST" action="">
<div class="form-group">
<input type="password" id="lusr" name="lusr" class="form-control" placeholder="Usuario" required></input><span id="str1" style="color:red;float:right;"></span>
</div>
<p></p>
<div class="form-group">
<input type="password" id="lpasw" name="lpasw" class="form-control" placeholder="Clave" required></input><span id="str2" style="color:red;float:right;"></span>
</div><p></p> 
<a class="btn btn-danger pull-right" href="./salir.php">Cancelar</a>
<input type="submit" class="btn btn-success pull-right" style="margin-right:10px;" id="btnentrar" value="Entrar" name="btnentrar"></input>
</form>
<p><br><br></p>
<p><br><a href="./" class="pull-right">Help?</a></p>
</div>
<div class="row col-md-4">
</div>
</div>
<script>
$("#btnentrar").click(function(){
validarform();
});
</script>
<?php
}	
}else{
if(isset($_POST['lusr']) and (isset($_POST['lpasw']))){
$v1=$_POST['lusr'];
$v2=$_POST['lpasw'];
	$con=mysqli_connect('localhost','root','');
	mysqli_select_db($con,"db_agroinsuca");
	$qry="select user,password,imagen from users where user='$v1' and password='$v2'";
	$result=mysqli_query($con,$qry);	
	$lista=mysqli_fetch_row($result);
	$v3=$lista[2];
	if($lista){
		$_SESSION['cliente'] = array("user"=>$v1,"pasword"=>$v2,"imagen"=>$v3);
	echo "<script>history.pushState('data', '', './administrador.php');</script>";
	require('./administrador.php');
	}else{
		?>
	<script>
function validarform(){
	var v1=$("#lusr").val();
	var v2=$("#lpasw").val();
	
if (v1<1){
	$("#lusr").focus();
	$("#str1").text(" * ");
}else{
	$("#str1").text("");
}
if (v2<1){
	$("#lpasw").focus();
	$("#str2").text(" * ");
}else{
	$("#str2").text("");
}

}
</script>
<div class="row" >
<p></p>
<div class="row col-md-4">
</div>
<div class="form-group col-md-4" style="margin-top:15%;padding:50px;background-color:#f8f8f8;border-radius:15px;">
<center><span id="msgerror" class="danger"></span></center>
<h3>Loggin</h3>
<form role="form" method="POST" action="">
<div class="form-group">
<input type="password" id="lusr" name="lusr" class="form-control" placeholder="Usuario" required></input><span id="str1" style="color:red;float:right;"></span>
</div>
<p></p>
<div class="form-group">
<input type="password" id="lpasw" name="lpasw" class="form-control" placeholder="Clave" required></input><span id="str2" style="color:red;float:right;"></span>
</div><p></p> 
<a class="btn btn-danger pull-right" href="./salir.php">Cancelar</a>
<input type="submit" class="btn btn-success pull-right" style="margin-right:10px;" id="btnentrar" value="Entrar" name="btnentrar"></input>
</form>
<p><br><br></p>
<p><br><a href="./" class="pull-right">Help?</a></p>
</div>
<div class="row col-md-4">
</div>
</div>
<script>
$("#btnentrar").click(function(){
validarform();
});
</script>
<?php
}
}else{
}
?>
	<script>
function validarform(){
	var v1=$("#lusr").val();
	var v2=$("#lpasw").val();
	
if (v1<1){
	$("#lusr").focus();
	$("#str1").text(" * ");
}else{
	$("#str1").text("");
}
if (v2<1){
	$("#lpasw").focus();
	$("#str2").text(" * ");
}else{
	$("#str2").text("");
}

}
</script>
<div class="row" >
<p></p>
<div class="row col-md-4">
</div>
<div class="form-group col-md-4" style="margin-top:15%;padding:50px;background-color:#f8f8f8;border-radius:15px;">
<center><span id="msgerror" class="danger"></span></center>
<h3>Loggin</h3>
<form role="form" method="POST" action="">
<div class="form-group">
<input type="password" id="lusr" name="lusr" class="form-control" placeholder="Usuario" required></input><span id="str1" style="color:red;float:right;"></span>
</div>
<p></p>
<div class="form-group">
<input type="password" id="lpasw" name="lpasw" class="form-control" placeholder="Clave" required></input><span id="str2" style="color:red;float:right;"></span>
</div><p></p> 
<a class="btn btn-danger pull-right" href="./salir.php">Cancelar</a>
<input type="submit" class="btn btn-success pull-right" style="margin-right:10px;" id="btnentrar" value="Entrar" name="btnentrar"></input>
</form>
<p><br><br></p>
<p><br><a href="./" class="pull-right">Help?</a></p>
</div>
<div class="row col-md-4">
</div>
</div>
<script>
$("#btnentrar").click(function(){
validarform();
});
</script>
<?php
}
?>
<?php require('footer.php'); ?>
