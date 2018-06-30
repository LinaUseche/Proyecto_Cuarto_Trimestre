<?php 
if(isset($_GET['inbox'])){

	session_start();
}

if(isset($_SESSION['email'])){
	//Encabezado de la pagina
	include ('templates/head.php');

	//validar errores
	if(isset($_GET['error'])){

		include ('errors/errors.php');
	}

	?>

	<div class="container spacing-top">
		<div class="row">
			<div class="col-4 alert alert-light border border-primary">

				<center>
					
					<figure>
						<?php include('partials/genre.php') ?>
					</figure>

				</center>

			</div>
			<div class="col-8 alert alert-light border border-primary">
				
				<?php
					if(isset($_SESSION['usuario'])){
						echo '<h2 class="title-h1">Bienvenid@: <i>', $_SESSION['usuario'] . '</i></h2>';
					}
					?>	
			</div>
			<div class="col-12 alert alert-info border border-primary">
				<?php include('forms/form_inb.php'); ?>
			</div>
		</div>
	</div>

	<?php include ('templates/foot.php');  

}else{
		header('Location: http://localhost/web/index.php');
	} 
?>