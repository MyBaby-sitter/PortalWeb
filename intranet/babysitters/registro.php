<?php
  include ("../../assets/incrustado/sesion.php");
     ?>
     <!doctype html>
<html lang="es-CL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro Niñeras | My Baby-sitter</title>
	<?php
	include( "../../assets/incrustado/head.php" );
	?>
</head>
<body style="background-color:#f5f5f5!important;">
<section class="navegacion">
    <header class="cabecera">
	    <?php
	        include( "../../assets/incrustado/navbar.php" );
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
                                        <i class="fas fa-heart fa-stack-2x" style="color:red"></i>
                                        <i class="fas fa-child fa-stack-1x fa-inverse fa-xs"></i>
                                    </span>
                                </h1>
                                <h2 class="uk-text-center">¿Quieres ser babysitter?</h2>
                                <p class="uk-text-center">
                                    Inscríbete en nuestra comunidad.<br>
                                    Podrás aparecer en los resultados de búsqueda que hagan los Padres, podrás editar tu perfil, recibir evaluaciones y mucho más.
                                    <br> <br>
                                    Llena el formulario y sigue los pasos para completar tu perfil.
                                </p>
                            </div>
                        </div>
                        <div class="uk-width-large-1-2">
                            <form class="uk-form uk-form-stacked" action="/user/authenticate" method="post">
                                <h2 class="uk-text-center">Introduce los siguientes datos</h2>
                                <div class="uk-form-row">
                                    <input class="uk-width-1-1" type="text" name="nombres" placeholder="Nombres"
                                           value="" required>
                                </div>
                                <div class="uk-form-row">
                                    <input class="uk-width-1-1" type="text" name="apellidos" placeholder="Apellidos"
                                           value="" required>
                                </div>
                                <div class="uk-form-row">
                                    <input class="uk-width-1-1" type="text" name="rut" id="rut" placeholder="Rut"
                                           value="" required>
                                </div>
                                <div class="uk-form-row">
                                    <input class="uk-width-1-1" type="text" name="telefono" id="telefono"
                                           placeholder="Teléfono" value="" required>
                                </div>
                                <div class="uk-form-row">
                                    <input class="uk-width-1-1" type="email" name="email" placeholder="Email" value=""
                                           required>
                                </div>
                                <div class="uk-form-row">
                                    <input class="uk-width-1-1" type="password" name="password" placeholder="Password"
                                           required>
                                </div>
                                <div class="uk-form-row">
                                    <input class="uk-width-1-1" type="password" name="password2"
                                           placeholder="Repetir Password" required>
                                </div>
                                <ul class="uk-list uk-flex uk-flex-space-between uk-text-small uk-margin-bottom-remove">
                                    <div class="col-xs-12">
                                        <label><input type="checkbox" name="remember_me"> Acepto
                                            los <a href="https://www.laguarderia.cl/terminos-y-condiciones"
                                                   target="_blank">Términos y
                                                Condiciones</a> </label>
                                    </div>
                                </ul>
                                <div class="space10"></div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 obligatorios">
                                        * Campos obligatorios
                                    </div>
                                </div>
                                <div class="pk-system-messages"></div>

                                <p class="uk-form-row uk-margin-small-bottom">
                                    <button class="uk-button uk-button-primary uk-button-large uk-width-1-1"
                                            type="submit">
                                        REGISTRARSE
                                    </button>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="offcanvas" class="uk-offcanvas">
            <div class="uk-offcanvas-bar uk-offcanvas-bar-flip">

                <ul class="uk-nav uk-nav-offcanvas">

                    <li class="">
                        <a href="/">Home</a>

                    </li>
                    <li class="">
                        <a href="/features">Features</a>

                    </li>
                    <li class="">
                        <a href="/marketplace">Marketplace</a>

                    </li>
                    <li class="">
                        <a href="/docs">Documentation</a>

                    </li>
                    <li class="">
                        <a href="/blog">Blog</a>
                    </li>
                    <li class="uk-parent">
                        <a href="/about">About</a>
                        <ul class="uk-nav-sub">
                            <li class="">
                                <a href="/about">About</a>
                            </li>
                            <li class="">
                                <a href="/get-involved">Get Involved</a>
                            </li>
                            <li class="">
                                <a href="/roadmap">Roadmap</a>
                            </li>
                            <li class="">
                                <a href="/the-marketplace">The Marketplace</a>
                            </li>
                            <li class="">
                                <a href="/trademark-policy">Trademark Policy</a>
                            </li>
                            <li class="">
                                <a href="/logo-guide">Logo Guide</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</section>
<?php
    include( "../../assets/incrustado/pie-js.php" );
?>
</body>
</html>
