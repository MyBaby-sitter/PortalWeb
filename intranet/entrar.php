<?php
session_start();
  if (isset($_GET["t"], $_POST["rut"], $_POST["password"])) {
    include( "../clases/config.php" );
    $tbl_name = "cuentas".$_GET["t"];
    if ($conexion->connect_error) {
        echo "Error";
        exit;
    }
    $recuerdame = false;
    $rut = $_POST['rut'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM $tbl_name WHERE rut = '$rut' and contrasena = '$password'";

    $result = $conexion->query($sql);
    if ($result->num_rows > 0) {

      $row = $result->fetch_array(MYSQLI_ASSOC);
        $_SESSION['loggedin'] = true;
        $_SESSION['rut']= $rut;
        $_SESSION['tipoCuenta']=$_GET["t"];
        $_SESSION['perfil'] = $row['cuentaActivada'];
        $_SESSION['start'] = time();
        //Se evalua si la opcion de recordar sesion esta activada (==1).
        if ($recuerdame == 1) {
            //Sesion dura 1 semana, se expresa en segundos
            // (dias * horas/dia * minutos/hora * segundos/minuto)
            $_SESSION['expire'] = $_SESSION['start'] + (7 * 24 * 60 * 60);

        } else {
            //Sesion dura 5 minutos, se expresa en segundos
            $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);
              echo "aqui";
        }
      }else{
        //Cuenta no valida
      }
}
?>
