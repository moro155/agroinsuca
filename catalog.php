<p><br></p>
<div class="row col-md-12">
<div class="catalog col-md-12">
<?php 
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'db_agroinsuca');
$qry="select nombre,descripcion,precio,imagen from producto;";
$consulta=mysqli_query($con,$qry);
$lista=mysqli_fetch_row($consulta);
if($lista){
while($result=mysqli_fetch_row($consulta)){
	echo '<div class="col-md-3 col-xs-12" style="border:1px solid #f1f1f1;padding:2px;background-color:#f8f8f8;margin-top:5px;">';
echo '<div class="thumbnail">'; 
echo '<img style="width:98%;height:120px;" src="./media-edwuin/src/'.$result[3].'" alt=""/></div>'; 	
echo '<div class="caption"> <h3>'.$result[0].'</h3> <p>Precio:'.$result[2].' Bs.F</p></div>'; 
echo '<p> <a href="#" class="btn btn-primary" role="button">Agregar al carrito</a> <a href="#" class="btn btn-info" role="button">Detalles</a>'; 
echo '</p> </div>';
	
}
}else{
	return false();
}

?>

 </div>
</div>