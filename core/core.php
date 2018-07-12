<?php
class core_agroinsuca{
function crear_producto(){
	if(isset($_POST['np'])&& isset($_POST['dsp'])){
	$np=$_POST['np'];
	$dsp=$_POST['dsp'];
	$prp=$_POST['prp'];
	$imgp=$_POST['imgp'];
	$catp=$_POST['catp'];
	$descp=$_POST['descp'];
	$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,"db_agroinsuca");
$qry="insert into producto (nombre,descripcion,precio,imagen,categoria,descuento)values('$np','$dsp','$prp','$imgp','$catp','$descp')";	
$result=@mysqli_query($con, $qry)or die("Error, no sudo ejecutar la operacion, el producto ya existe o faltan datos<a href='./addproduct.php'>regresar</a> <script>(document).load('./addproduct.php');</script>");
	unset($_POST);
}
}


}
?>