<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Yghor admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Yghor admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="Webck">
    <link rel="icon" href="lib/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="lib/images/favicon.png" type="image/x-icon" />
    <title>Yghor Meira - Dashboard</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="lib/css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="lib/css/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="lib/css/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="lib/css/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="lib/css/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="lib/css/animate.css">
    <link rel="stylesheet" type="text/css" href="lib/css/chartist.css">
    <link rel="stylesheet" type="text/css" href="lib/css/date-picker.css">
    <link rel="stylesheet" type="text/css" href="lib/css/prism.css">
    <link rel="stylesheet" type="text/css" href="lib/css/vector-map.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="lib/css/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="lib/css/style.css">
    <link id="color" rel="stylesheet" href="lib/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="lib/css/responsive.css">
  </head>
  <body class="vsc-initialized dark-only">
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="theme-loader">    
        <div class="loader-p"></div>
      </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start -->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <div class="page-main-header">
        <div class="main-header-right row m-0">
          <div class="main-header-left">
            <div class="logo-wrapper"><a href="index.php"><img class="img-fluid" src="lib/images/logo/logo.png" alt=""></a></div>
            <div class="dark-logo-wrapper"><a href="index.php"><img class="img-fluid" src="lib/images/logo/dark-logo.png" alt=""></a></div>
            <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle"></i></div>
          </div>
          <div class="left-menu-header col">
            <ul>
              <li>
                <form class="form-inline search-form">
                  <div class="search-bg"><i class="fa fa-search"></i>
                    <input class="form-control-plaintext" placeholder="BUSCAR...">
                  </div>
                </form><span class="d-sm-none mobile-search search-bg"><i class="fa fa-search"></i></span>
              </li>
            </ul>
          </div>
          <div class="nav-right col pull-right right-menu p-0">
            <ul class="nav-menus">
              <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
              <li class="onhover-dropdown">
                <div class="bookmark-box"><i data-feather="star"></i></div>
                <div class="bookmark-dropdown onhover-show-div">
                  <div class="form-group mb-0">
                    <div class="input-group">
                      <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-search"></i></span></div>
                      <input class="form-control" type="text" placeholder="Buscar por favoritos...">
                    </div>
                  </div>
                  <ul class="m-t-5">
                    <li class="add-to-bookmark"><i class="bookmark-icon" data-feather="inbox"></i>Email<span class="pull-right"><i data-feather="star"></i></span></li>
                  </ul>
                </div>
              </li>
              <li class="onhover-dropdown">
                <div class="notification-box"><i data-feather="bell"></i><span class="dot-animated"></span></div>
                <ul class="notification-dropdown onhover-show-div">
                  <li>
                    <p class="f-w-700 mb-0">Quatro notifica????es<span class="pull-right badge badge-primary badge-pill">4</span></p>
                  </li>
                  <li class="noti-primary">
                    <div class="media"><span class="notification-bg bg-light-primary"><i data-feather="activity"> </i></span>
                      <div class="media-body">
                        <p>Boleto pago </p><span>10 minutos atr??s</span>
                      </div>
                    </div>
                  </li>
                  <li class="noti-secondary">
                    <div class="media"><span class="notification-bg bg-light-secondary"><i data-feather="check-circle"> </i></span>
                      <div class="media-body">
                        <p>Tratamento completo</p><span>1 hora atr??s</span>
                      </div>
                    </div>
                  </li>
                  <li class="noti-success">
                    <div class="media"><span class="notification-bg bg-light-success"><i data-feather="file-text"> </i></span>
                      <div class="media-body">
                        <p>Boleto gerado</p><span>3 horas atr??s</span>
                      </div>
                    </div>
                  </li>
                  <li class="noti-danger">
                    <div class="media"><span class="notification-bg bg-light-danger"><i data-feather="user-check"> </i></span>
                      <div class="media-body">
                        <p>Boleto cancelado</p><span>6 horas atr??s</span>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li>
                <div class="mode"><i class="fa fa-moon-o"></i></div>
              </li>
              <li class="onhover-dropdown"><i data-feather="message-square"></i>
                <ul class="chat-dropdown onhover-show-div">
                  <li>
                    <div class="media"><img class="img-fluid rounded-circle me-3" src="lib/images/user/4.jpg" alt="">
                      <div class="media-body"><span>Ain Chavez</span>
                        <p class="f-12 light-font">Lorem Ipsum is simply dummy...</p>
                      </div>
                      <p class="f-12">32 minutos atr??s</p>
                    </div>
                  </li>
                  <li>
                    <div class="media"><img class="img-fluid rounded-circle me-3" src="lib/images/user/1.jpg" alt="">
                      <div class="media-body"><span>Erica Hughes</span>
                        <p class="f-12 light-font">Lorem Ipsum is simply dummy...</p>
                      </div>
                      <p class="f-12">58 minutos atr??s</p>
                    </div>
                  </li>
                  <li>
                    <div class="media"><img class="img-fluid rounded-circle me-3" src="lib/images/user/2.jpg" alt="">
                      <div class="media-body"><span>Kori Thomas</span>
                        <p class="f-12 light-font">Lorem Ipsum is simply dummy...</p>
                      </div>
                      <p class="f-12">1 hora atr??s</p>
                    </div>
                  </li>
                  <li class="text-center"> <a class="f-w-700" href="javascript:void(0)">Ver todos     </a></li>
                </ul>
              </li>
              <li class="onhover-dropdown p-0">
                <button class="btn btn-primary-light" type="button"><a href="login.php"><i data-feather="log-out"></i>Sair</a></button>
              </li>
            </ul>
          </div>
          <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
        </div>
      </div>
      <!-- Page Header Ends -->

      <!-- Page Body Start-->
      <div class="page-body-wrapper sidebar-icon">
        <!-- Page Sidebar Start -->
        <header class="main-nav">
          <div class="sidebar-user text-center"><a class="setting-primary" href="javascript:void(0)"><i data-feather="settings"></i></a><img class="img-90 rounded-circle" src="assets/images/dashboard/1.png" alt="">
            <div class="badge-bottom"><span class="badge badge-primary">Fisioterapeuta</span></div><a href="user-profile.php">
              <h6 class="mt-3 f-14 f-w-600">Yghor Meira S??</h6></a>
            <p class="mb-0 font-roboto">Admin</p>
          </div>

        <?php include("lib/php/sidebar.php"); ?>
        </header>
        <!-- Page Sidebar Ends-->

        <div class="page-body">
          <!-- Container-fluid starts-->
          ----
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 footer-copyright">
                <p class="mb-0">Copyright 2022 ?? Webck Desenvolvimentos.</p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- latest jquery-->
    <script src="lib/js/jquery-3.5.1.min.js"></script>
    <!-- feather icon js-->
    <script src="lib/js/icons/feather-icon/feather.min.js"></script>
    <script src="lib/js/icons/feather-icon/feather-icon.js"></script>
    <!-- Sidebar jquery-->
    <script src="lib/js/sidebar-menu.js"></script>
    <script src="lib/js/config.js"></script>
    <!-- Bootstrap js-->
    <script src="lib/js/bootstrap/popper.min.js"></script>
    <script src="lib/js/bootstrap/bootstrap.min.js"></script>
    <!-- Plugins JS start-->
    <script src="lib/js/chart/chartist/chartist.js"></script>
    <script src="lib/js/chart/chartist/chartist-plugin-tooltip.js"></script>
    <script src="lib/js/chart/knob/knob.min.js"></script>
    <script src="lib/js/chart/knob/knob-chart.js"></script>
    <script src="lib/js/chart/apex-chart/apex-chart.js"></script>
    <script src="lib/js/chart/apex-chart/stock-prices.js"></script>
    <script src="lib/js/prism/prism.min.js"></script>
    <script src="lib/js/clipboard/clipboard.min.js"></script>
    <script src="lib/js/counter/jquery.waypoints.min.js"></script>
    <script src="lib/js/counter/jquery.counterup.min.js"></script>
    <script src="lib/js/counter/counter-custom.js"></script>
    <script src="lib/js/custom-card/custom-card.js"></script>
    <script src="lib/js/notify/bootstrap-notify.min.js"></script>
    <script src="lib/js/vector-map/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="lib/js/vector-map/map/jquery-jvectormap-world-mill-en.js"></script>
    <script src="lib/js/vector-map/map/jquery-jvectormap-us-aea-en.js"></script>
    <script src="lib/js/vector-map/map/jquery-jvectormap-uk-mill-en.js"></script>
    <script src="lib/js/vector-map/map/jquery-jvectormap-au-mill.js"></script>
    <script src="lib/js/vector-map/map/jquery-jvectormap-chicago-mill-en.js"></script>
    <script src="lib/js/vector-map/map/jquery-jvectormap-in-mill.js"></script>
    <script src="lib/js/vector-map/map/jquery-jvectormap-asia-mill.js"></script>
    <script src="lib/js/dashboard/default.js"></script>
    <script src="lib/js/datepicker/date-picker/datepicker.js"></script>
    <script src="lib/js/datepicker/date-picker/datepicker.en.js"></script>
    <script src="lib/js/datepicker/date-picker/datepicker.custom.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="lib/js/script.js"></script>
    <script src="lib/js/theme-customizer/customizer.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
  </body>
</html>