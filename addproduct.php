<?php 
include('./core/core.php');
$crearproducto= new core_agroinsuca;
$crearproducto->crear_producto();
@SESSION_START();
?>
<script>
$(':file').change(function(){
/*var fileExtension="";
        var file = $("#imgp")[0].files[0];
        var fileName = file.name;
        fileExtension = fileName.substring(fileName.lastIndexOf('.') + 1);
        var fileSize = file.size;
        var fileType = file.type;
*/
	});
$("#btnguardar").click(function(evento){
	   var fileExtension="";
        var file = $("#imgp")[0].files[0];
        var fileName = file.name;
        fileExtension = fileName.substring(fileName.lastIndexOf('.') + 1);
        var fileSize = file.size;
        var fileType = file.type;
	evento.preventDefault();
	var datos={
	"np":$("#np").val(),
	"dsp":$("#dsp").val(),
	"prp":$("#prp").val(),
	"imgp": fileName,
	"catp":$("#catp").val(),
	"descp":$("#descp").val()
	};
	 $.ajax({
		 data: datos,
		 url: './addproduct.php',
		 type: 'POST',
		 beforeSend:msgsending,
		 success:function(response){
		$("#marcodetrabajo").html(response);
		msgsend();
		 },
		 error:function(){
			 alert("No se pudo guardar los datos, intente de nuevo");
		 }
	 });
	 $("#marcodetrabajo").load('./addproduct.php');
	 function msgsending(){
		 $("#msgr").html("Enviando datos..");
	 }
	 function msgsend(){
		 $("#msgr").html("Operacion exitosa..");
		  $("#msgr").focus();
	 }
	 
 });
</script>
<div class="row col-md-2"></div>
<div class="row col-md-8 jumbotron">
<p id="msgr"></p>
<form  id="formulario" enctype="multipart/form-data">
<div class="form-group">
<label>Nombre del producto</label>
<input class="form-control" type="text" maxlength="20" id="np" name="np" placeholder="Ecriba aqui el nombre del producto" required></input>
</div>
<div class="form-group">
<label>Descripcion del producto</label>
<textarea class="form-control" maxlength="250" id="dsp" placeholder="Escriba aqui una breve descripcion del producto..." name="dsp" required></textarea>
</div>
<div class="form-group">
<label>Precio del producto</label>
<input class="form-control" type="text" maxlength="9" id="prp" name="prp" placeholder="Escriba aqui el precio del producto" required></input>
</div>
<div class="form-group">
<label>Imagen del producto</label><br>
<img width="150px" height="150px" src="./media-edwuin/src/amitrax.jpg"></img>
<input  type="file"  id="imgp" name="imgp" required></input>
<p></p>
</div>
<div class="form-group">
<label>Categoria</label>
<select id="catp" name="catp">
<option>seleccione</option>
<option>Garrapatizida</option>
<option>Fungicida</option>
<option>Nutricion</option>
<option>Cosmetico</option>
<option>Aseo</option>
<option>Accesorio</option>
<option>Vacuna</option>
</select>
</div>
<div class="form-group">
<label>Descuento (ejemplo: 10%)</label>
<input class="form-control" type="text" maxlength="3" id="descp" name="descp" placeholder="0%" required ></input>
</div>
<p></p>
<div class="form-group">
<input class="btn btn-primary" type="button" id="btnguardar" value="Guardar"></button>
<a class="btn btn-danger" type="submit" id="btnsalir" href="./">Cancelar</a>
</div>
</form>
</div>
</div>
<div class="row col-md-2"></div>
<?php //require('footer.php');?>