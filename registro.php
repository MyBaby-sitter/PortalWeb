<?php
  include ("assets/incrustado/sesion.php");
     ?>
     <!doctype html>
<html lang="es-CL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
	<?php
	include( "assets/incrustado/head.php" );
	?>
</head>
<body style="background-color:#f5f5f5!important;">
<section class="navegacion">
    <header class="cabecera">
		<?php
		include( "assets/incrustado/navbar.php" );
		?>
    </header>
    <section class="inscripcion">
        <div id="tm-hero"
             class="tm-hero uk-block uk-block-large uk-cover-background uk-flex uk-flex-middle tm-height-viewport">
            <div class="uk-container uk-container-center">
                <div class="tm-panel">
                    <div class="uk-grid uk-flex-middle uk-grid-divider uk-grid-match" data-uk-grid-margin>
                        <div class="uk-width-large-1-2">
                            <div>
                                <h1 class="uk-text-center">
                                    <span class="fa-stack fa-2x">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fas fa-users fa-stack-1x fa-inverse"></i>
                                    </span>
                                </h1>
                                <h2 class="uk-text-center">¿Necesitas babysitter?</h2>
                                <p class="uk-text-center">
                                    Inscríbete en nuestra comunidad.<br>
                                    Acá tendrás acceso a nuestro directorio de babysitters, podrás editar tu perfil ,
                                    hacer
                                    evaluaciones y mucho más
                                    <br> <br>
                                  </p>
                                  <p class="uk-form-row uk-margin-small-bottom">
                                    <a class="uk-button uk-button-primary uk-button-large uk-width-1-1" href="intranet/padres/registro.php">
                                            REGISTRARSE
                                    </a>
                                  </p>
                            </div>
                        </div>
                        <div class="uk-width-large-1-2">
                            <div>
                                <h1 class="uk-text-center">
                                    <span class="fa-stack fa-2x">
                                        <i class="fas fa-heart fa-stack-2x" style="color:red"></i>
                                        <i class="fas fa-child fa-stack-1x fa-inverse fa-xs"></i>
                                    </span>
                                </h1>
                                <h2 class="uk-text-center">¿Quieres ser babysitter?</h2>
                                <p class="uk-text-center">
                                    Inscríbete en nuestra comunidad.<br>
                                    Podrás aparecer en los resultados de búsqueda que hagan los Padres, podrás editar tu perfil, recibir evaluaciones y mucho más.
                                    <br> <br></p>
                                    <p class="uk-form-row uk-margin-small-bottom">
                                      <a class="uk-button uk-button-primary uk-button-large uk-width-1-1" href="intranet/babysitters/registro.php">
                                              REGISTRARSE
                                      </a>
                                    </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
<?php
include( "assets/incrustado/pie-js.php" );
?>
</body>
</html>
