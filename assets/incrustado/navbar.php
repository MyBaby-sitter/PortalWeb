<nav class="navbar navbar-expand-lg navbar-light uk-navbar-container bg-light" uk-navbar>
	<button class="navbar-toggler" type="button" data-toggle="collapse"
	        data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01"
	        aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
		<a class="navbar-brand" href="#">
			<img alt="logo" src="assets/img/logo.png" style="width: 70px; height: 70px">
		</a>
		<ul class="navbar-nav mr-auto uk-navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="/">Inicio</a>
			</li>


			<li class="nav-item">
				<a href="galeria.php">BabySitters</a>
			</li>

			<li class="nav-item">
				<a href="membresias.php" title="">Membresias</a>
			</li>
			<li class="nav-item">
				<a href="contacto.php" title="">Contacto</a>
			</li>
			<li class="nav-item">
				<a href="registro.php" title="">Registrate</a>
			</li>
		</ul>
		<div class="btn-group">
			<?php if($ses == true){?>
				<a class="btn btn-danger"  href="intranet/logout.php">
					<i class="fas fa-user-circle"></i> Cerrar Sesión
				</a>
			<?php }else{?>
			<button type="button" class="btn btn-danger dropdown-toggle"
			        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<i class="fas fa-user-circle"></i> Iniciar Sesión
			</button>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="/intranet/babysitters">Babysitters</a>
				<a class="dropdown-item" href="/intranet/padres">Padres</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="/intranet/administracion">Administracion</a>
			</div>
		<?php }?>
		</div>
	</div>
</nav>
