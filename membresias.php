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
    <title>My Baby-sitter</title>
	<?php
include( "assets/incrustado/head.php" );
	?>
</head>
<body>
<section class="navegacion">
    <header class="cabecera">
      <?php
        include( "assets/incrustado/navbar.php" );
       ?>
    </header>
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
     <h1 class="display-4">Membresias</h1>
     <p class="lead">Tenemos diferentes membresias, necesitas pagar una para poder contratar a una babysitter</p>
   </div>

   <div class="container">
     <div class="card-deck mb-3 text-center">
       <div class="card mb-4 box-shadow">
         <div class="card-header">
           <h4 class="my-0 font-weight-normal">Plan Express</h4>
         </div>
         <div class="card-body">
           <h1 class="card-title pricing-card-title">$6.000</h1>
           <ul class="list-unstyled mt-3 mb-4">
             <li>Válido por 1 día</li>
             <li>Para cada vez que necesites una de nuestras babysitters puedes contar con ellas</li>
             </ul>
           <?php
           if ($ses == true){
             ?>
             <button type="button" class="btn btn-lg btn-block btn-outline-primary">Contratar</button>
             <?php
           }else{
             ?>
             <a href="intranet/padres/registro.php" class="btn btn-lg btn-block btn-outline-primary">Registrate</a>
             <?php
           }
            ?>


         </div>
       </div>
       <div class="card mb-4 box-shadow">
         <div class="card-header">
           <h4 class="my-0 font-weight-normal"> Plan mensual</h4>
         </div>
         <div class="card-body">
           <h1 class="card-title pricing-card-title">$ 37.000</h1>
           <ul class="list-unstyled mt-3 mb-4">
             <li>Valido por un mes</li>
             <li>Con este plan solicita babysitters las veces que necesites durante un mes</li>
           </ul>
           <?php
           if ($ses == true){
             ?>
             <button type="button" class="btn btn-lg btn-block btn-outline-primary">Contratar</button>
             <?php
           }else{
             ?>
             <a href="intranet/padres/registro.php" class="btn btn-lg btn-block btn-outline-primary">Registrate</a>
             <?php
           }
            ?>
         </div>
       </div>

       <div class="card mb-4 box-shadow">
         <div class="card-header">
           <h4 class="my-0 font-weight-normal">Jardin a Domicilio</h4>
         </div>
         <div class="card-body">
           <h1 class="card-title pricing-card-title">$ 150.000</h1>
           <ul class="list-unstyled mt-3 mb-4">
             <li>Ponte de acuerdo con tus amigos y te llevaremos el jardín a tu casa (2 niños mínimo) </li>
           </ul>
           <?php
           if ($ses == true){
             ?>
             <button type="button" class="btn btn-lg btn-block btn-outline-primary">Contratar</button>
             <?php
           }else{
             ?>
             <a href="intranet/padres/registro.php" class="btn btn-lg btn-block btn-outline-primary">Registrate</a>
             <?php
           }
            ?>
         </div>
       </div>

       <div class="card mb-4 box-shadow">
         <div class="card-header">
           <h4 class="my-0 font-weight-normal">Servicios Especiales</h4>
         </div>
         <div class="card-body">
           <h1 class="card-title pricing-card-title">$ 170.000</h1>
           <ul class="list-unstyled mt-3 mb-4">
                  <li>Si necesitas algo especial y hecho a tu medida, dinos que necesitas y veremos como podemos ayudarte </li>
           </ul>
           <?php
           if ($ses == true){
             ?>
             <button type="button" class="btn btn-lg btn-block btn-outline-primary">Contratar</button>
             <?php
           }else{
             ?>
             <a href="intranet/padres/registro.php" class="btn btn-lg btn-block btn-outline-primary">Registrate</a>
             <?php
           }
            ?>
         </div>
       </div>
     </div
</section>
<?php
include( "assets/incrustado/pie-js.php" );
?>
</body>
</html>
