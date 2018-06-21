<?php
  session_start();
  $now = time();
  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
      if($now > $_SESSION['expire']) {
          session_destroy();
          $ses = false;
        }
        $ses = true;
    }else{
        $ses = false;
    }
     ?>
