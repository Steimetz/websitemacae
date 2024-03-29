<!DOCTYPE html>
<html lang="en">
<title>Dashboard Admin</title>
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="/css/bootstrap.min.css" rel="stylesheet" />
  <link href="/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />

</head>


  <div class="wrapper ">
    <div class="sidebar" data-color="blue">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        SPEMACAE
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="/dashboard">
              <i class="fas fa-home"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
          <li>
            <a href="/noticias/create">
              <i class="fas fa-plus"></i>
              <p>Adicionar notícia</p>
            </a>
          </li>
          <li>
            <a href="/noticias/dash_index">
              <i class="fas fa-globe"></i>
              <p>Gerenciar notícias</p>
            </a>
          </li>
          <li>
            <a href="./notifications.html">
              <i class="fas fa-plus"></i>
              <p>Adicionar evento</p>
            </a>
          </li>
          <li>
            <a href="./user.html">
              <i class="fas fa-calendar"></i>
              <p>Gerenciar eventos</p>
            </a>
          </li>
          <li>
            <a href="./tables.html">
              <i class="fas fa-plus"></i>
              <p>Adicionar newsletter</p>
            </a>
          </li>
          <li>
            <a href="./typography.html">
              <i class="fas fa-newspaper"></i>
              <p>Visualizar newsletter</p>
            </a>
          </li>
          <li>
            <a href="./typography.html">
              <i class="fas fa-comments"></i>
              <p>Comentários</p>
            </a>
          </li>
          <li>
            <a href="./typography.html">
              <i class="fas fa-chart-bar"></i>
              <p>Estatísticas</p>
            </a>
          </li>
         
        </ul>
      </div>
    </div>
    <div class="main-panel" style="background-color: #ffff" id="main-panel">
      <!-- Navbar -->
    
      <!-- End Navbar -->
      
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
  <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
    
  </script>
@yield('conteudo')

</html>