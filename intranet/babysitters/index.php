<?php
  session_start();
  $now = time();
  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
      if($now > $_SESSION['expire']) {
          session_destroy();
          header("Status: 301 Moved Permanently");
          header("Location: ./login.php");
          exit;
    }
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
    include( "../../assets/incrustado/head.php" );
	?>
</head>
<body style="background-color: #f5f5f5 !important;">
<section class="navegacion">
    <header class="cabecera">
		<?php
		include( "../../assets/incrustado/navbar.php" );
		?>
    </header>
</section>
<?php
include( "../../assets/incrustado/pie-js.php" );
?>
</body>
</html>
<?php
}else{
    header("Status: 301 Moved Permanently");
    header("Location: ./login.php");
    exit;
} ?>
