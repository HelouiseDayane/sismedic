<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Yghor admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Yghor admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="Webck">
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
    <title>Yghor Meira - Dashboard</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="assets/css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="assets/css/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/feather-icon.css">
   <!-- Plugins css start-->
   <link rel="stylesheet" type="text/css" href="assets/css/jsgrid.css">
   <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link id="color" rel="stylesheet" href="assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
  </head>
  <body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="theme-loader">    
        <div class="loader-p"></div>
      </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start       -->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <div class="page-main-header">
        <div class="main-header-right row m-0">
          <div class="main-header-left">
            <div class="logo-wrapper"><a href="index.php"><img class="img-fluid" src="assets/images/logo/logo.png" alt=""></a></div>
            <div class="dark-logo-wrapper"><a href="index.php"><img class="img-fluid" src="assets/images/logo/dark-logo.png" alt=""></a></div>
            <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle"></i></div>
          </div>
          <div class="left-menu-header col">
            <ul>
              <li>
                <form class="form-inline search-form">
                  <div class="search-bg"><i class="fa fa-search"></i>
                    <input class="form-control-plaintext" placeholder="Buscar.....">
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
                    <p class="f-w-700 mb-0">Quatro notifica??es<span class="pull-right badge badge-primary badge-pill">4</span></p>
                  </li>
                  <li class="noti-primary">
                    <div class="media"><span class="notification-bg bg-light-primary"><i data-feather="activity"> </i></span>
                      <div class="media-body">
                        <p>Boleto pago </p><span>10 minutos atr?s</span>
                      </div>
                    </div>
                  </li>
                  <li class="noti-secondary">
                    <div class="media"><span class="notification-bg bg-light-secondary"><i data-feather="check-circle"> </i></span>
                      <div class="media-body">
                        <p>Tratamento completo</p><span>1 hora atr?s</span>
                      </div>
                    </div>
                  </li>
                  <li class="noti-success">
                    <div class="media"><span class="notification-bg bg-light-success"><i data-feather="file-text"> </i></span>
                      <div class="media-body">
                        <p>Boleto gerado</p><span>3 horas atr?s</span>
                      </div>
                    </div>
                  </li>
                  <li class="noti-danger">
                    <div class="media"><span class="notification-bg bg-light-danger"><i data-feather="user-check"> </i></span>
                      <div class="media-body">
                        <p>Boleto cancelado</p><span>6 horas atr?s</span>
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
                    <div class="media"><img class="img-fluid rounded-circle me-3" src="assets/images/user/4.jpg" alt="">
                      <div class="media-body"><span>Ain Chavez</span>
                        <p class="f-12 light-font">Lorem Ipsum is simply dummy...</p>
                      </div>
                      <p class="f-12">32 minutos atr?s</p>
                    </div>
                  </li>
                  <li>
                    <div class="media"><img class="img-fluid rounded-circle me-3" src="assets/images/user/1.jpg" alt="">
                      <div class="media-body"><span>Erica Hughes</span>
                        <p class="f-12 light-font">Lorem Ipsum is simply dummy...</p>
                      </div>
                      <p class="f-12">58 minutos atr?s</p>
                    </div>
                  </li>
                  <li>
                    <div class="media"><img class="img-fluid rounded-circle me-3" src="assets/images/user/2.jpg" alt="">
                      <div class="media-body"><span>Kori Thomas</span>
                        <p class="f-12 light-font">Lorem Ipsum is simply dummy...</p>
                      </div>
                      <p class="f-12">1 hora atr?s</p>
                    </div>
                  </li>
                  <li class="text-center"> <a class="f-w-700" href="javascript:void(0)">Ver todos     </a></li>
                </ul>
              </li>
              <li class="onhover-dropdown p-0">
                <button class="btn btn-primary-light" type="button"><a href="login_two.php"><i data-feather="log-out"></i>Sair</a></button>
              </li>
            </ul>
          </div>
          <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
        </div>
      </div>
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper sidebar-icon">
        <!-- Page Sidebar Start-->
        <header class="main-nav">
          <div class="sidebar-user text-center"><a class="setting-primary" href="javascript:void(0)"><i data-feather="settings"></i></a><img class="img-90 rounded-circle" src="assets/images/dashboard/1.png" alt="">
            <div class="badge-bottom"><span class="badge badge-primary">Fisioterapeuta</span></div><a href="user-profile.php">
              <h6 class="mt-3 f-14 f-w-600">Yghor Meira</h6></a>
            <p class="mb-0 font-roboto">Admin</p>
            <ul>
              <li><span><span class="counter">35</span></span>
                <p>Pacientes</p>
              </li>
              <li><span><span class="counter">3.2</span>k</span>
                <p>Faturamento</p>
              </li>
              <li><span><span class="counter">10</span></span>
                <p>Boletos</p>
              </li>
            </ul>
          </div>
          <nav>
            <div class="main-navbar">
              <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
              <div id="mainnav">           
                <ul class="nav-menu custom-scrollbar">
                  <li class="back-btn">
                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                  </li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6>Dashboard</h6>
                    </div>
                  </li>
                  <li class="dropdown"><a  class="nav-link menu-title" href="index.php"><i data-feather="home"></i><span>Home</span></a>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="user"></i><span>Pacientes</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="pacientes.php">Lista de Pacientes</a></li>
                      <li><a href="cadastro.php">Cadastrar Paciente</a></li>
                      <li><a href="perfil.php">Perfil do Paciente</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a  class="nav-link menu-title" href="agenda.php"><i data-feather="home"></i><span>Agenda da Semana</span></a>
                  </li>
                </ul>
              </div>
              <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </div>
          </nav>
        </header>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-sm-6">
                  <h3><br>Agenda da Semana</h3>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Agenda</li>
                  </ol>
                </div>
                <div class="col-sm-6">
                  <!-- Bookmark Start-->
            
                  <!-- Bookmark Ends-->
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped custom-table datatable">
                        <thead>
                            <tr>
                                <th>Paciente</th>
                                <th>Segunda - 04</th>
                                <th>Ter?a - 05</th>
                                <th>Quarta - 06</th>
                                <th>Quinta - 07</th>
                                <th>Sexta - 08</th>
                                <th>S?bado - 09</th>
                                <th>Domingo - 10</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <h2 class="table-avatar">
                                        <a href="profile.php" class="avatar"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
                                        <a href="profile.php">John Doe <span>Fisioterapia</span></a>
                                    </h2>
                                </td>
                                <td>
                                    <div class="user-add-shedule-list">
                                        <h2>
                                            <a href="#" data-toggle="modal" data-target="#edit_schedule" style="border:2px dashed #1eb53a">
                                            <span class="username-info m-b-10">6:30 - 9:30 </span>
                                            <span class="userrole-info">Fisioterapia</span>
                                            </a>
                                        </h2>
                                    </div>
                                </td>
                                <td>
                                    <div class="user-add-shedule-list">
                                        <a href="#" data-toggle="modal" data-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="user-add-shedule-list">
                                        <a href="#" data-toggle="modal" data-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="user-add-shedule-list">
                                        <a href="#" data-toggle="modal" data-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="user-add-shedule-list">
                                        <a href="#" data-toggle="modal" data-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="user-add-shedule-list">
                                        <a href="#" data-toggle="modal" data-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="user-add-shedule-list">
                                        <h2>
                                            <a href="#" data-toggle="modal" data-target="#edit_schedule" style="border:2px dashed #1eb53a">
                                            <span class="username-info m-b-10">10:30 - 12:30</span>
                                            <span class="userrole-info">Fisioterapia</span>
                                            </a>
                                        </h2>
                                    </div>
                                </td>     
                            </tr>
                            <tr>
                                <td>
                                    <h2 class="table-avatar">
                                        <a href="profile.php" class="avatar"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
                                        <a href="profile.php">Richard Miles <span>Avalia??o</span></a>
                                    </h2>
                                </td>
                                
                                <td>
                                    <div class="user-add-shedule-list">
                                        <a href="#" data-toggle="modal" data-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="user-add-shedule-list">
                                        <h2>
                                            <a href="#" data-toggle="modal" data-target="#edit_schedule" style="border:2px dashed #1eb53a">
                                            <span class="username-info m-b-10">6:30 - 9:30</span>
                                            <span class="userrole-info">Avalia??o</span>
                                            </a>
                                        </h2>
                                    </div>
                                </td>
                                <td>
                                    <div class="user-add-shedule-list">
                                        <a href="#" data-toggle="modal" data-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="user-add-shedule-list">
                                        <a href="#" data-toggle="modal" data-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="user-add-shedule-list">
                                        <a href="#" data-toggle="modal" data-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="user-add-shedule-list">
                                        <a href="#" data-toggle="modal" data-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                        </a>
                                    </div>
                                </td>
                              
                                <td>
                                    <div class="user-add-shedule-list">
                                        <a href="#" data-toggle="modal" data-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h2 class="table-avatar">
                                        <a href="profile.php" class="avatar"><img alt="" src="assets/img/profiles/avatar-10.jpg"></a>
                                        <a href="profile.php">John Smith <span>Pilates</span></a>
                                    </h2>
                                </td>
                                
                                <td>
                                    <div class="user-add-shedule-list">
                                        <a href="#" data-toggle="modal" data-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="user-add-shedule-list">
                                        <a href="#" data-toggle="modal" data-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="user-add-shedule-list">
                                        <h2>
                                            <a href="#" data-toggle="modal" data-target="#edit_schedule" style="border:2px dashed #1eb53a">
                                            <span class="username-info m-b-10">6:30 - 10:30</span>
                                            <span class="userrole-info">Pilates</span>
                                            </a>
                                        </h2>
                                    </div>
                                </td>
                                <td>
                                    <div class="user-add-shedule-list">
                                        <a href="#" data-toggle="modal" data-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="user-add-shedule-list">
                                        <a href="#" data-toggle="modal" data-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="user-add-shedule-list">
                                        <a href="#" data-toggle="modal" data-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="user-add-shedule-list">
                                        <h2>
                                            <a href="#" data-toggle="modal" data-target="#edit_schedule" style="border:2px dashed #1eb53a">
                                            <span class="username-info m-b-10">14:30 - 16:30</span>
                                            <span class="userrole-info">Pilates</span>
                                            </a>
                                        </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h2 class="table-avatar">
                                        <a href="profile.php" class="avatar"><img alt="" src="assets/img/profiles/avatar-05.jpg"></a>
                                        <a href="profile.php">Mike Litorus <span>Pilates</span></a>
                                    </h2>
                                </td>
                                
                                <td>
                                    <div class="user-add-shedule-list">
                                        <a href="#" data-toggle="modal" data-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="user-add-shedule-list">
                                        <a href="#" data-toggle="modal" data-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="user-add-shedule-list">
                                        <a href="#" data-toggle="modal" data-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="user-add-shedule-list">
                                        <h2>
                                            <a href="#" data-toggle="modal" data-target="#edit_schedule" style="border:2px dashed #1eb53a">
                                            <span class="username-info m-b-10">10:30 - 12:30</span>
                                            <span class="userrole-info">Pilates</span>
                                            </a>
                                        </h2>
                                    </div>
                                </td>
                                <td>
                                    <div class="user-add-shedule-list">
                                        <a href="#" data-toggle="modal" data-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="user-add-shedule-list">
                                        <a href="#" data-toggle="modal" data-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                        </a>
                                    </div>
                                </td>
                                
                                <td>
                                    <div class="user-add-shedule-list">
                                        <a href="#" data-toggle="modal" data-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                        </a>
                                    </div>
                                </td>
                               
                            </tr>
                            <tr>
                                <td>
                                    <h2 class="table-avatar">
                                        <a href="profile.php" class="avatar"><img alt="" src="assets/img/profiles/avatar-11.jpg"></a>
                                        <a href="profile.php">Wilmer Deluna <span>Fisioterapia</span></a>
                                    </h2>
                                </td>
                                
                                <td>
                                    <div class="user-add-shedule-list">
                                        <a href="#" data-toggle="modal" data-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="user-add-shedule-list">
                                        <h2>
                                            <a href="#" data-toggle="modal" data-target="#edit_schedule" style="border:2px dashed #1eb53a">
                                            <span class="username-info m-b-10">10:30 - 12:30</span>
                                            <span class="userrole-info">Fisioterapia</span>
                                            </a>
                                        </h2>
                                    </div>
                                </td>
                                <td>
                                    <div class="user-add-shedule-list">
                                        <a href="#" data-toggle="modal" data-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="user-add-shedule-list">
                                        <a href="#" data-toggle="modal" data-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="user-add-shedule-list">
                                        <a href="#" data-toggle="modal" data-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="user-add-shedule-list">
                                        <a href="#" data-toggle="modal" data-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="user-add-shedule-list">
                                        <h2>
                                            <a href="#" data-toggle="modal" data-target="#edit_schedule" style="border:2px dashed #1eb53a">
                                            <span class="username-info m-b-10">17:30 - 18:30</span>
                                            <span class="userrole-info">Fisioterapia</span>
                                            </a>
                                        </h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h2 class="table-avatar">
                                        <a href="profile.php" class="avatar"><img alt="" src="assets/img/profiles/avatar-12.jpg"></a>
                                        <a href="profile.php">Jeffrey Warden <span>Avalia??o</span></a>
                                    </h2>
                                </td>
                                
                                <td>
                                    <div class="user-add-shedule-list">
                                        <a href="#" data-toggle="modal" data-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="user-add-shedule-list">
                                        <a href="#" data-toggle="modal" data-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="user-add-shedule-list">
                                        <a href="#" data-toggle="modal" data-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="user-add-shedule-list">
                                        <h2>
                                            <a href="#" data-toggle="modal" data-target="#edit_schedule" style="border:2px dashed #1eb53a">
                                            <span class="username-info m-b-10">6:30 - 9:30</span>
                                            <span class="userrole-info">Avalia??o</span>
                                            </a>
                                        </h2>
                                    </div>
                                </td>
                                <td>
                                    <div class="user-add-shedule-list">
                                        <a href="#" data-toggle="modal" data-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="user-add-shedule-list">
                                        <a href="#" data-toggle="modal" data-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                        </a>
                                    </div>
                                </td>
                                
                                <td>
                                    <div class="user-add-shedule-list">
                                        <a href="#" data-toggle="modal" data-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h2 class="table-avatar">
                                        <a href="profile.php" class="avatar"><img alt="" src="assets/img/profiles/avatar-13.jpg"></a>
                                        <a href="profile.php">Bernardo Galaviz <span>Avalia??o</span></a>
                                    </h2>
                                </td>
                                <td>
                                    <div class="user-add-shedule-list">
                                        <h2>
                                            <a href="#" data-toggle="modal" data-target="#edit_schedule" style="border:2px dashed #1eb53a">
                                            <span class="username-info m-b-10">6:30 - 9:30</span>
                                            <span class="userrole-info">Fisioterapia</span>
                                            </a>
                                        </h2>
                                    </div>
                                </td>
                                <td>
                                    <div class="user-add-shedule-list">
                                        <a href="#" data-toggle="modal" data-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="user-add-shedule-list">
                                        <a href="#" data-toggle="modal" data-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="user-add-shedule-list">
                                        <a href="#" data-toggle="modal" data-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="user-add-shedule-list">
                                        <a href="#" data-toggle="modal" data-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="user-add-shedule-list">
                                        <a href="#" data-toggle="modal" data-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="user-add-shedule-list">
                                        <h2>
                                            <a href="#" data-toggle="modal" data-target="#edit_schedule" style="border:2px dashed #1eb53a">
                                            <span class="username-info m-b-10">6:30 - 9:30</span>
                                            <span class="userrole-info">Fisioterapia</span>
                                            </a>
                                        </h2>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 footer-copyright">
                <p class="mb-0">Copyright 2022 ? Webck Desenvolvimentos.</p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- latest jquery-->
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <!-- feather icon js-->
    <script src="assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- Sidebar jquery-->
    <script src="assets/js/sidebar-menu.js"></script>
    <script src="assets/js/config.js"></script>
    <!-- Bootstrap js-->
    <script src="assets/js/bootstrap/popper.min.js"></script>
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>
    <!-- Plugins JS start-->
    <script src="assets/js/jsgrid/jsgrid.min.js"></script>
    <script src="assets/js/jsgrid/griddata.js"></script>
    <script src="assets/js/jsgrid/jsgrid.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="assets/js/script.js"></script>
    <script src="assets/js/theme-customizer/customizer.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
  </body>
</html>