<?php
session_start();
  if (isset($_POST["email"], $_POST["password"]) && $_SESSION['errores'] <3 ) {

    $host_db = "localhost";
    $user_db = "root";
    $pass_db = "";
    $db_name = "db_estacionamiento";
    $tbl_name = "Usuarios";
    $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

    if ($conexion->connect_error) {
        header("Status: 301 Moved Permanently");
        header("Location: ./../index.php");
        exit;
    }
    $recuerdame = $_POST['recuerdame'];
    $username = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM $tbl_name WHERE emailUsuario = '$username'";
    $result = $conexion->query($sql);
    if ($result->num_rows > 0) {

    }
    $row = $result->fetch_array(MYSQLI_ASSOC);
    if (($password == $row['passwordUsuario'])) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        $_SESSION['perfil'] = $row['perfilUsuario'];
        $_SESSION['start'] = time();
        $_SESSION['error'] = false;
        $_SESSION['errores'] = 0;

        //Se evalua si la opcion de recordar sesion esta activada (==1).
        if ($recuerdame == 1) {
            //Sesion dura 1 semana, se expresa en segundos
            // (dias * horas/dia * minutos/hora * segundos/minuto)
            $_SESSION['expire'] = $_SESSION['start'] + (7 * 24 * 60 * 60);

        } else {
            //Sesion dura 5 minutos, se expresa en segundos
            $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);

        }

        header("Status: 301 Moved Permanently");
        header("Location: ./index.php");
        exit;

    } else {
        //Sesion Error.
        $_SESSION['error'] = true;
        $_SESSION['errores']++;
        header("Status: 301 Moved Permanently");
        header("Location: ./login.php");
        exit;
    }
    mysqli_close($conexion);
}else if ($_SESSION['errores']>=3){
    header("Status: 301 Moved Permanently");
    header("Location: ./../index.php");
    exit;
} else {
    header("Status: 301 Moved Permanently");
    header("Location: ./login.php");
    exit;
}
?>
