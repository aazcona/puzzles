<?PHP
	require_once("./include/membersite_config.php");
	$logged = $fgmembersite->CheckLogin();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" type="text/css" href="css/common.css">
		<title>Perfil</title>
	</head>
	<body>
	<p class="go-back-link"> <a href="index.html"> Volver al Inicio </a></p>
		<?PHP if ($logged){?>
				<div id="logged-profile-user">
					<span class="center">Perfil de <?= $fgmembersite->UserFullName(); ?>.</span>
				</div>
			<?php } else { ?>
        		<p class="profile-title"> <b> ¡Regístrate en World Puzzles para guardar y ver aquí las puntuaciones de tu niveles! </b> </p>
    	<?php } ?>
		<div class="profile-box-left">
			<?PHP if ($logged){?>
			<p> <b> |1| Ceuta </b> </p>
				<p>La Casa de los Dragones. 
					<?PHP if ($logged){?>
						 Puntos: <?= $fgmembersite->readPoints(1); ?></p>
					<?PHP } ?>
				<p>Parque Marítimo del Mediterráneo.
					<?PHP if ($logged){?>
						 Puntos: <?= $fgmembersite->readPoints(2); ?></p>
					<?PHP } ?>
				<p>Las Murallas Reales.
					<?PHP if ($logged){?>
						 Puntos: <?= $fgmembersite->readPoints(3); ?></p>
					<?PHP } ?></p>
			<p> <b> |2| Melilla </b> </p>
				<p>Faro de Melilla. 
						<?PHP if ($logged){?>
							Puntos: <?= $fgmembersite->readPoints(4); ?></p>
						<?PHP } ?>
					<p>Parque Hernández.
						<?PHP if ($logged){?>
							Puntos: <?= $fgmembersite->readPoints(5); ?></p>
						<?PHP } ?>
					<p>Iglesia de la Purísima Concepción.
						<?PHP if ($logged){?>
							Puntos: <?= $fgmembersite->readPoints(6); ?></p>
						<?PHP } ?></p>
			<p> <b> |3| Málaga </b> </p>
				<p>Jardín Botánico de la Concepción. 
					<?PHP if ($logged){?>
						Puntos: <?= $fgmembersite->readPoints(7); ?></p>
					<?PHP } ?>
				<p>Centro Histórico.
					<?PHP if ($logged){?>
						Puntos: <?= $fgmembersite->readPoints(8); ?></p>
					<?PHP } ?></p>					
				<p>Teatro Romano.
					<?PHP if ($logged){?>
						Puntos: <?= $fgmembersite->readPoints(9); ?></p>
					<?PHP } ?></p>
			<p> <b> |4| Segovia </b> </p>
				<p>Acueducto Romano. 
					<?PHP if ($logged){?>
						Puntos: <?= $fgmembersite->readPoints(10); ?></p>
					<?PHP } ?>
				<p>Alcázar de Segovia.
					<?PHP if ($logged){?>
						Puntos: <?= $fgmembersite->readPoints(11); ?></p>
					<?PHP } ?></p>					
				<p>Plaza de la Artillería.
					<?PHP if ($logged){?>
						Puntos: <?= $fgmembersite->readPoints(12); ?></p>
					<?PHP } ?></p>
				<?php } ?>	
		</div>
		<div class="profile-box-right">
			<?PHP if ($logged){?>
			<p> <b> |5| Granada </b> </p>
				<p>Iglesia de Santo Domingo. 
					<?PHP if ($logged){?>
						Puntos: <?= $fgmembersite->readPoints(13); ?></p>
					<?PHP } ?>
				<p>Parque de Federico García Lorca.
					<?PHP if ($logged){?>
						Puntos: <?= $fgmembersite->readPoints(14); ?></p>
					<?PHP } ?></p>					
				<p>Plaza Bib-Rambla.
					<?PHP if ($logged){?>
						Puntos: <?= $fgmembersite->readPoints(15); ?></p>
					<?PHP } ?></p>	
			<p> <b> |6| Sevilla </b> </p>
				<p>Portal del Palacio de San Telmo. 
					<?PHP if ($logged){?>
						Puntos: <?= $fgmembersite->readPoints(16); ?></p>
					<?PHP } ?>
				<p>Alcázar de Sevilla.
					<?PHP if ($logged){?>
						Puntos: <?= $fgmembersite->readPoints(17); ?></p>
					<?PHP } ?></p>					
				<p>Plaza de España.
					<?PHP if ($logged){?>
						Puntos: <?= $fgmembersite->readPoints(18); ?></p>
					<?PHP } ?></p>		
			<p> <b> |7| Madrid </b> </p>
				<p>Plaza Mayor. 
					<?PHP if ($logged){?>
						Puntos: <?= $fgmembersite->readPoints(19); ?></p>
					<?PHP } ?>
				<p>Puerta de Alcalá.
					<?PHP if ($logged){?>
						Puntos: <?= $fgmembersite->readPoints(20); ?></p>
					<?PHP } ?></p>					
				<p>Puerta del Sol.
					<?PHP if ($logged){?>
						Puntos: <?= $fgmembersite->readPoints(21); ?></p>
					<?PHP } ?></p>
			<p> <b> |8| Barcelona </b> </p>
				<p>Palacio de la Generalidad. 
					<?PHP if ($logged){?>
						Puntos: <?= $fgmembersite->readPoints(22); ?></p>
					<?PHP } ?>
				<p>Puerto de Barcelona.
					<?PHP if ($logged){?>
						Puntos: <?= $fgmembersite->readPoints(23); ?></p>
					<?PHP } ?></p>					
				<p>Rambla de Barcelona.
					<?PHP if ($logged){?>
						Puntos: <?= $fgmembersite->readPoints(24); ?></p>
					<?PHP } ?></p>				
			<?php } ?>				
		</div>
	</body>
</html>