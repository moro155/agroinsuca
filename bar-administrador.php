<div class="row col-md-12">
<nav class="navbar navbar-default" role="navigation" style="background-color:yellow;"> 
<div class="navbar-header"> 
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse"> 
<span class="sr-only">Toggle navigation</span>
 <span class="icon-bar"></span> <span class="icon-bar"></span> 
 <span class="icon-bar"></span> </button>
 <a class="navbar-brand actived" href="./">Administrador</a> </div> 
 <div class="collapse navbar-collapse" id="example-navbar-collapse"> 
 <ul class="nav navbar-nav"> 
<li class="dropdown">
 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Herramientas<b class="caret"></b> </a>
 <ul class="dropdown-menu"> 
 <li><a id="btncrearp" href="#">Crear producto</a></li> 
 <li><a href="#" id="btnverprod">Ver productos</a></li> 
  <li><a href="#">Lista de videos</a></li> 
 <li><a href="#">Subir archivo</a></li> 
 </ul> 
 </li> 
  <li class="dropdown">
 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Citas<b class="caret"></b> </a>
 <ul class="dropdown-menu"> 
 <li><a href="./addproduct.php">Ver citas</a></li> 
 <li><a href="#"></a></li> 
 <li><a href="#"></a></li> 
 <li><a href="#"></a></li> 
 </ul> 
 </li> 
 <li class="dropdown">
 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Consultas<b class="caret"></b> </a>
 <ul class="dropdown-menu"> 
 <li><a href="./addproduct.php">Ver Consultas</a></li> 
 <li><a href="#"></a></li> 
 <li><a href="#"></a></li> 
 <li><a href="#"></a></li> 
 </ul> 
 </li> 
   <li class="dropdown">
 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Correos<b class="caret"></b> </a>
 <ul class="dropdown-menu"> 
 <li><a href="./addproduct.php">Ver Correos</a></li> 
 <li><a href="#">Enviar Correo</a></li> 
 <li><a href="#"></a></li> 
 <li><a href="#"></a></li> 
 </ul> 
 </li> 
 <li class="dropdown">
 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Clientes<b class="caret"></b> </a>
 <ul class="dropdown-menu"> 
 <li><a href="./addproduct.php">Ver lista de clientes</a></li> 
 <li><a href="#">Crear Cliente</a></li> 
 <li><a href="#"></a></li> 
 <li><a href="#"></a></li> 
 </ul> 
 </li>  
  <li><a href="#" id="prueba">prueba</a></li> 
 </ul>
 <ul class="nav tabs-pills">
 <li class="dropdown pull-right">
 <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['cliente']['user'];?><br><img class="img img-rounded" width="50px" height="50px" src="./media-edwuin/users/<?php echo $_SESSION['cliente']['imagen']; ?>"></IMG><b class="caret"></b> </a>
 <ul class="dropdown-menu"> 
 <li><a href="#">Seguridad</a></li> 
 <li><a href="./salir.php">Salir</a></li> 
 <li><a href="#"></a></li> 
 </ul> 
 </li></ul>
</div>
 </nav>
 </div>
 <script>
 $("#btncrearp").click(function(evento){
	 //evento.preventDefault();
	 $("#marcodetrabajo").load('./addproduct.php');
 });
 $("#btnverprod").click(function(evento){
	 evento.preventDefault();
	 $("#marcodetrabajo").load('./catalog.php');
 });
 </script>