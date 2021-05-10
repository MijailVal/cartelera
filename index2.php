<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIENDAS EFE</title>
    <link rel='stylesheet' type='text/css'  href="style.css">
</head>
<body>
    <h3 class="titulo">TIENDAS EFE </h3>
   
	<a  class="boton" href="index.php">Smarthones</a>
	  <a class="boton" href="index2.php">Electrodomesticos</a>
	  <a  class="boton" href="index3.php">Accesorios</a>
   
<section style="text-align: center;">

			<?php 
			include "model/database1.php";
			$consulta="SELECT * FROM cartelera2";
			$resultado=$conn->prepare($consulta);
			$resultado->execute();
			$show=$resultado->fetchAll(PDO::FETCH_ASSOC);
		
   			?>
			   	<?php  foreach($show as $mostrar){ 
					   ?>
							<h3><?php echo $mostrar['nombre'] ?></h3>
							 <p><?php echo $mostrar['descripcion'] ?></p>
							<img  src="data:image/png;base64,<?php echo base64_encode($mostrar['image'])?>"alt="image01">
                 <?php } ?>
			</section>
</body>
</html>