	<?php
		//session_start();
		if(empty($_SESSION['active']))
		{
			header('location: ../'); 
		}
	?>

	<header>
		<div class="header">
			<?php //<img src="../img/sewingmachine1.png"> ?>
			<h1>Sistema IoT Confecciones</h1>
			<div class="optionsBar">
				<p>Colombia, <?php echo fechaC(); ?> </p>
				<span>|</span>
				<span class="user"><?php echo $_SESSION['user'].' - '.$_SESSION['rol']; ?></span>
				<img class="photouser" src="img/user.png" alt="Usuario">
				<a href="salir.php"><img class="close" src="img/salir.png" alt="Salir del sistema" title="Salir"></a>
			</div>
		</div>
		<?php  include "nav.php" ?>
	</header>

	<div class="modal">
		<div class="bodyModal"></div>
	</div>