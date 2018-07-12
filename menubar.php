<div class="row menubar col-md-12">
<nav class="navbar navbar-default" role="navigation" style="background-color:yellow;"> 
<div class="navbar-header"> 
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse"> 
<span class="sr-only">Toggle navigation</span>
 <span class="icon-bar"></span> <span class="icon-bar"></span> 
 <span class="icon-bar"></span> </button>
 <a class="navbar-brand" href="./">Home</a> </div> 
 <div class="collapse navbar-collapse" id="example-navbar-collapse"> 
 <ul class="nav navbar-nav"> 
<li class="dropdown">
 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Servicios<b class="caret"></b> </a>
 <ul class="dropdown-menu">
 <li><a href="./addproduct.php">Peluqueria Canina</a></li> 
 <li><a id="ncita" href="#">Solicitar cita</a></li> 
 <li><a href="#">Vacunacion</a></li> 
 <li><a href="#">Fumigacion</a></li> 
 </ul> 
 </li> 
<li class="dropdown">
 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ofertas<b class="caret"></b> </a>
 <ul class="dropdown-menu"> 
 <li><a href="./addproduct.php">Oferta del día</a></li> 
 <li><a href="#">Ofertas de esta semana</a></li> 
 </ul> 
 </li> 
  <li><a href="#">Videos</a></li> 
   <li><a href="#">Preguntas frecuentes</a></li> 

    <li><a href="#">Contactanos</a></li> 
	<li class="dropdown">
 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login<b class="caret"></b> </a>
 <ul class="dropdown-menu"> 
 <li><a href="./login.php">Iniciar session</a></li>
  <li><a href="./newuser.php" id="newclte">Registrarse</a></li> 
 </ul> 
 </li> 
 </ul> 
 <div class="from-group col-md-2">
 <form class="form-inline" style="margin-top:10px;">
<div class="form-group">
 <input class="form-control col-md-2" type="search" placeholder="Search" aria-label="Search">
 </input>
  <button class="btn btn-outline-success btn-md" style="position:absolute;float:right;"type="submit">buscar</button>
</div>
</form></div>
 </div>

 </nav>
 </div>
 <script>
 $("#ncita").click(function(evento){
	 evento.preventDefault();
	 $("#slideryq").css('display','none');
	 $("#areawork").load('./newcita.php');
 });
  $("#newclte").click(function(evento){
	 evento.preventDefault();
	 $("#slideryq").css('display','none');
	 $("#areawork").load('./newuser.php');
 });
 </script>