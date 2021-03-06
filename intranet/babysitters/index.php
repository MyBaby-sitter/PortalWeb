<?php
  include ("../../assets/incrustado/sesion.php");
     ?>
     <?php
     if (!$ses == true){
       session_destroy();
       header("Status: 301 Moved Permanently");
       header("Location: ./login.php");
       exit;
     }
      ?>
     <!doctype html>
     <html lang="en">
       <head>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         <meta name="description" content="">
         <meta name="author" content="">
         <?php
           include( "../../assets/incrustado/head.php" );
       	?>
         <title>My-Babisitter</title>
         <!-- Custom styles for this template -->
         <link href="dashboard.css" rel="stylesheet">
       </head>
       <body>
         <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
           <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="">Volver a sitio Principal</a>
           <ul class="navbar-nav px-3">
             <li class="nav-item text-nowrap">
               <a class="nav-link" href="intranet/logout.php">Cerrar Sesión</a>
             </li>
           </ul>
         </nav>

         <div class="container-fluid">
           <div class="row">
             <nav class="col-md-2 d-none d-md-block bg-light sidebar">
               <div class="sidebar-sticky">
                 <ul class="nav flex-column">
                   <li class="nav-item">
                     <a class="nav-link active" href="#">
                       <span data-feather="home"></span>
                       Principal <span class="sr-only">(current)</span>
                     </a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link" href="#">
                       <span data-feather="file"></span>
                       Reporte de cuenta
                     </a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link" href="#">
                       <span data-feather="shopping-cart"></span>
                       Pagos
                     </a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link" href="#">
                       <span data-feather="users"></span>
                       Modificar perfil
                     </a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link" href="#">
                       <span data-feather="bar-chart-2"></span>
                       Reports
                     </a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link" href="#">
                       <span data-feather="layers"></span>
                       Integrations
                     </a>
                   </li>
                 </ul>
               </div>
             </nav>

             <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
               <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                 <h1 class="h2">Movimiento Semanal</h1>
               </div>

               <canvas class="my-4 w-100" id="dineros" width="900" height="380"></canvas>
             </main>
           </div>
         </div>

         <!-- Bootstrap core JavaScript
         ================================================== -->
         <!-- Placed at the end of the document so the pages load faster -->
         <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
         <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
         <script src="../../assets/js/vendor/popper.min.js"></script>
         <script src="../../dist/js/bootstrap.min.js"></script>

         <!-- Icons -->
         <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
         <script>
           feather.replace()
         </script>

         <!-- Graphs -->
         <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
         <script>
           var ctx = document.getElementById("dineros");
           var myChart = new Chart(ctx, {
             type: 'line',
             data: {
               labels: ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo"],
               datasets: [{
                 data: [0, 40000, 60000, 0, 5000, 25000, 10000],
                 lineTension: 0,
                 backgroundColor: 'transparent',
                 borderColor: '#007bff',
                 borderWidth: 4,
                 pointBackgroundColor: '#007bff'
               }]
             },
             options: {
               scales: {
                 yAxes: [{
                   ticks: {
                     beginAtZero: false
                   }
                 }]
               },
               legend: {
                 display: false,
               }
             }
           });
         </script>
       </body>
     </html>
