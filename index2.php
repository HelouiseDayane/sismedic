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
    <!-- page-wrapper Start       -->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <div class="page-main-header">
        <div class="main-header-right row m-0">
          <div class="main-header-left">
            <div class="logo-wrapper"><a href="index.html"><img class="img-fluid" src="lib/images/logo/logo.png" alt=""></a></div>
            <div class="dark-logo-wrapper"><a href="index.html"><img class="img-fluid" src="lib/images/logo/dark-logo.png" alt=""></a></div>
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
                <button class="btn btn-primary-light" type="button"><a href="login.html"><i data-feather="log-out"></i>Sair</a></button>
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
          <div class="sidebar-user text-center"><a class="setting-primary" href="javascript:void(0)"><i data-feather="settings"></i></a><img class="img-90 rounded-circle" src="lib/images/dashboard/1.png" alt="">
            <div class="badge-bottom"><span class="badge badge-primary">Fisioterapeuta</span></div><a href="user-profile.html">
              <h6 class="mt-3 f-14 f-w-600">Yghor Meira</h6></a>
            <p class="mb-0 font-roboto">Admin</p>

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
                  <li class="dropdown"><a  class="nav-link menu-title" href="index.html"><i data-feather="home"></i><span>Home</span></a>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="pacientes.html"><i data-feather="user"></i><span>Pacientes</span></a>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="financeiro.html"><i data-feather="credit-card"></i><span>Financeiro</span></a>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="planos.html"><i data-feather="airplay"></i><span>Planos</span></a>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="config.html"><i data-feather="settings"></i><span>Configura????es</span></a>
                  </li>
                </ul>
              </div>
              <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </div>
          </nav>
        </header>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <!-- Container-fluid starts-->
          <div class="container-fluid dashboard-default-sec">
            <div class="row">
              <div class="col-xl-5 box-col-12 des-xl-100 dashboard-sec">
                <div class="card">
                  <div class="card-header">
                    <div class="header-top d-sm-flex align-items-center">
                      <h5>Vis??o geral do crescimento</h5>
                      <div class="center-content">
                        <p class="d-flex align-items-center"><i class="toprightarrow-primary fa fa-arrow-up me-2"></i>80% maior</p>
                      </div>
                      <div class="setting-list">
                        <ul class="list-unstyled setting-option">
                          <li>
                            <div class="setting-primary"><i class="icon-settings">                                      </i></div>
                          </li>
                          <li><i class="view-html fa fa-code font-primary"></i></li>
                          <li><i class="icofont icofont-maximize full-card font-primary"></i></li>
                          <li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
                          <li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
                          <li><i class="icofont icofont-error close-card font-primary"></i></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div id="chart-dashbord"></div>
                    <div class="code-box-copy">
                      <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#sell-overview" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                      <pre><code class="language-html" id="sell-overview">                                     &lt;div class="card"&gt; 
                        &lt;div class="card-header"&gt;
                          &lt;div class="header-top d-sm-flex align-items-center"&gt;
                            &lt;h5&gt; Sell Overview &lt;/h5&gt;
                            &lt;div class="center-content" &gt;
                              &lt;p class="d-flex align-items-center"&gt;                                        
                                &lt;i class="toprightarrow-primary fa fa-arrow-up me-2" &gt; &lt;/i&gt;
                                  86% Growth
                              &lt;/p&gt; 
                            &lt;/div&gt;
                            &lt;div class="setting-list"&gt;
                              &lt;ul class="list-unstyled setting-option"&gt;
                                &lt;li&gt;&lt;div class="setting-primary"&gt;&lt;i class="icon-settings"&gt;&lt;/i&gt;&lt;/div&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;i class="view-html fa fa-code font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;i class="icofont icofont-maximize full-card font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;i class="icofont icofont-minus minimize-card font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;i class="icofont icofont-refresh reload-card font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;i class="icofont icofont-error close-card font-primary"&gt; &lt;/i&gt;&lt;/li&gt;
                              &lt;/ul&gt;
                            &lt;/div&gt;
                          &lt;/div&gt;
                        &lt;/div&gt;
                        &lt;div class="card-body p-0"&gt;
                          &lt;div id="chart-dashbord"&gt;&lt;/div&gt;                                       
                        &lt;/div&gt;
                      &lt;/div&gt;</code></pre>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="col-xl-7 box-col-12 des-xl-100 dashboard-sec">
                <div class="card income-card">
                  <div class="card-header">
                    <div class="header-top d-sm-flex align-items-center">
                      <h5>Faturamento Mensal</h5>
                      <div class="center-content">
                        <p class="d-sm-flex align-items-center"><span class="font-primary m-r-10 f-w-700">R$8.25k</span><i class="toprightarrow-primary fa fa-arrow-up m-r-10"></i>86% maior que o ??ltimo m??s</p>
                      </div>
                      <div class="setting-list">
                        <ul class="list-unstyled setting-option">
                          <li>
                            <div class="setting-primary"><i class="icon-settings"></i></div>
                          </li>
                          <li><i class="view-html fa fa-code font-primary"></i></li>
                          <li><i class="icofont icofont-maximize full-card font-primary"></i></li>
                          <li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
                          <li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
                          <li><i class="icofont icofont-error close-card font-primary"></i></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div id="chart-timeline-dashbord"></div>
                    <div class="code-box-copy">
                      <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#yearly-overview" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                      <pre><code class="language-html" id="yearly-overview">&lt;div class="card income-card"&gt; 
  &lt;div class="card-header"&gt;
    &lt;div class="header-top d-sm-flex align-items-center"&gt;
      &lt;h5&gt; yearly overview  &lt;/h5&gt;
       &lt;div class="center-content" &gt;
         &lt;p&gt; 
           &lt;span class="font-primary fontbold-600" &gt; $859.25k &lt;/span&gt;
           &lt;i class="toprightarrow-primary fa fa-arrow-up m-l-10 m-r-10" &gt; &lt;/i&gt;
            86% More than last year
         &lt;/p&gt; 
      &lt;/div&gt;
      &lt;div class="setting-list"&gt;
        &lt;ul class="list-unstyled setting-option"&gt;
          &lt;li&gt;&lt;div class="setting-primary"&gt;&lt;i class="icon-settings"&gt;&lt;/i&gt;&lt;/div&gt;&lt;/li&gt;
          &lt;li&gt;&lt;i class="view-html fa fa-code font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
          &lt;li&gt;&lt;i class="icofont icofont-maximize full-card font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
          &lt;li&gt;&lt;i class="icofont icofont-minus minimize-card font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
          &lt;li&gt;&lt;i class="icofont icofont-refresh reload-card font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
          &lt;li&gt;&lt;i class="icofont icofont-error close-card font-primary"&gt; &lt;/i&gt;&lt;/li&gt;
        &lt;/ul&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="card-body p-0"&gt;
    &lt;div id="chart-timeline-dashbord"&gt;&lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-8 box-col-12 des-xl-100">
                <div class="row">
                  <div class="col-xl-6 col-50 box-col-6 des-xl-50">
           
                      <div class="card trasaction-sec">
                        <div class="card-header">
                          <div class="header-top d-sm-flex align-items-center">
                            <h5>Financeiro</h5>
                            <div class="center-content">
                              <p>5878 Boletos pagos</p>
                            </div>
                            <div class="setting-list">
                              <ul class="list-unstyled setting-option">
                                <li>
                                  <div class="setting-secondary"><i class="icon-settings">                                      </i></div>
                                </li>
                                <li><i class="view-html fa fa-code font-secondary"></i></li>
                                <li><i class="icofont icofont-maximize full-card font-secondary"></i></li>
                                <li><i class="icofont icofont-minus minimize-card font-secondary"></i></li>
                                <li><i class="icofont icofont-refresh reload-card font-secondary"></i></li>
                                <li><i class="icofont icofont-error close-card font-secondary"></i></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="transaction-totalbal">
                          <h2> R$2,09,352k <span class="ms-3"> <a class="btn-arrow arrow-secondary" href="javascript:void(0)"><i class="toprightarrow-secondary fa fa-arrow-up me-2"></i>98.54%</a></span></h2>
                          <p>Faturamento total</p>
                        </div>
                        <div class="card-body p-0">
                          <div id="chart-3dash"></div>
                          <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#transaction" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                            <pre><code class="language-html" id="transaction">&lt;div class="card trasaction-sec"&gt;
   &lt;div class="card-header"&gt;
     &lt;div class="header-top d-sm-flex align-items-center"&gt;
       &lt;h5&gt;Transaction&lt;/h5&gt;
     &lt;div class="center-content"&gt;
       &lt;p&gt;5878 Suceessfull Transaction&lt;/p&gt;
     &lt;/div&gt;
     &lt;div class="setting-list"&gt;
       &lt;ul class="list-unstyled setting-option"&gt;
         &lt;li&gt;
           &lt;div class="setting-secondary"&gt;
             &lt;i class="icon-settings"&gt; &lt;/i&gt;
           &lt;/div&gt;
         &lt;/li&gt;
         &lt;li&gt;
           &lt;i class="view-html fa fa-code font-secondary"&gt;&lt;/i&gt;
         &lt;/li&gt;
         &lt;li&gt;
           &lt;i class="icofont icofont-maximize full-card font-secondary"&gt;&lt;/i&gt;
         &lt;/li&gt;
         &lt;li&gt;
           &lt;i class="icofont icofont-minus minimize-card font-secondary"&gt;&lt;/i&gt;
         &lt;/li&gt;
         &lt;li&gt;
           &lt;i class="icofont icofont-refresh reload-card font-secondary"&gt;&lt;/i&gt;
         &lt;/li&gt;
         &lt;li&gt;
           &lt;i class="icofont icofont-error close-card font-secondary"&gt;&lt;/i&gt;
         &lt;/li&gt;
       &lt;/ul&gt;
     &lt;/div&gt;
   &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="transaction-totalbal"&gt;
   &lt;h2&gt; $2,09,352k 
     &lt;span class="ms-3"&gt;
       &lt;a class="btn-arrow arrow-secondary" href="javascript:void(0)"&gt;
         &lt;i class="toprightarrow-secondary fa fa-arrow-up me-2"&gt;&lt;/i&gt;98.54%
       &lt;/a&gt;
     &lt;/span&gt;
   &lt;/h2&gt;
   &lt;p&gt;Total Balance&lt;/p&gt;
  &lt;/div&gt;
   &lt;div class="card-body p-0"&gt;
     &lt;div id="chart-3dash"&gt;&lt;/div&gt;
   &lt;/div&gt;
  &lt;/div&gt;</code></pre>
                          </div>
                        </div>
                      </div>
                
                  </div>
                  <div class="col-xl-6 col-50 box-col-6 des-xl-50">
                    <div class="card latest-update-sec">
                      <div class="card-header">
                        <div class="header-top d-sm-flex align-items-center">
                          <h5>Resumo di??rio</h5>
                          <div class="center-content">
                            <ul class="week-date">
                              <li class="font-primary">Hoje</li>
                            </ul>
                          </div>
                          <div class="setting-list">
                            <ul class="list-unstyled setting-option">
                              <li>
                                <div class="setting-primary"><i class="icon-settings"></i></div>
                              </li>
                              <li><i class="view-html fa fa-code font-primary"></i></li>
                              <li><i class="icofont icofont-maximize full-card font-primary"></i></li>
                              <li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
                              <li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
                              <li><i class="icofont icofont-error close-card font-primary">                                </i></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="table-responsive">
                          <table class="table table-bordernone">
                            <tbody>
                              <tr>
                                <td>
                                  <div class="media">
                                    <svg enable-background="new 0 0 512 512" viewbox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                      <path d="m362 91v-60h-212v60h-150v390h512c0-16.889 0-372.29 0-390zm-182-30h152v30h-152zm302 390h-452v-202.844l90 36v46.844h90v-30h92v30h90v-46.844l90-36zm-302-150h-30v-60h30zm152-60h30v60h-30c0-7.259 0-52.693 0-60zm150-25.156-90 36v-40.844h-90v60h-92v-60h-90v40.844l-90-36c0-14.163 0-84.634 0-94.844h452z"></path>
                                    </svg>
                                    <div class="media-body"><span>Sess??o de Fisioterapia</span>
                                      <p>10:00 Hrs</p>
                                    </div>
                                  </div>
                                </td>
                                <td><a href="index.html" target="_blank">Remarcar</a></td>
                                <td><a href="index.html" target="_blank">Cancelar</a></td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="media">
                                    <svg enable-background="new 0 0 512 512" viewbox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                      <path d="m362 91v-60h-212v60h-150v390h512c0-16.889 0-372.29 0-390zm-182-30h152v30h-152zm302 390h-452v-202.844l90 36v46.844h90v-30h92v30h90v-46.844l90-36zm-302-150h-30v-60h30zm152-60h30v60h-30c0-7.259 0-52.693 0-60zm150-25.156-90 36v-40.844h-90v60h-92v-60h-90v40.844l-90-36c0-14.163 0-84.634 0-94.844h452z"></path>
                                    </svg>
                                    <div class="media-body"><span>Sess??o de pilates</span>
                                      <p>13:00 Hrs</p>
                                    </div>
                                  </div>
                                </td>
                                <td><a href="index.html" target="_blank">Remarcar</a></td>
                                <td><a href="index.html" target="_blank">Cancelar</a></td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="media">
                                    <svg enable-background="new 0 0 512 512" viewbox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                      <g>
                                        <path d="m512 390v-390h-512v390h241v32h-15c-41.355 0-75 33.645-75 75v15h210v-15c0-41.355-33.645-75-75-75h-15v-32zm-226 62c19.556 0 36.239 12.539 42.43 30h-144.86c6.191-17.461 22.874-30 42.43-30zm-256-92v-330h452v330c-12.164 0-438.947 0-452 0z"></path>
                                        <path d="m136 180c24.813 0 45-20.187 45-45s-20.187-45-45-45-45 20.187-45 45 20.187 45 45 45zm0-60c8.271 0 15 6.729 15 15s-6.729 15-15 15-15-6.729-15-15 6.729-15 15-15z"></path>
                                        <path d="m184.568 197.848c-28.678-24.39-60.953-16.827-61.054-16.833-35.639 5.799-62.514 38.985-62.514 77.196v41.789h150v-45c0-22.034-9.634-42.865-26.432-57.152zm-3.568 72.152h-90v-11.789c0-23.666 16.049-44.122 37.332-47.584 13.509-2.198 26.578 1.38 36.801 10.074 10.083 8.577 15.867 21.078 15.867 34.299z"></path>
                                        <path d="m241 270h120v30h-120z"></path>
                                        <path d="m241 210h210v30h-210z"></path>
                                        <path d="m241 150h210v30h-210z"></path>
                                        <path d="m331 90h120v30h-120z"></path>
                                        <path d="m241 90h60v30h-60z"></path>
                                        <path d="m391 270h60v30h-60z"></path>
                                      </g>
                                    </svg>
                                    <div class="media-body"><span>Reuni??o com gestores</span>
                                      <p>16:00 Hrs</p>
                                    </div>
                                  </div>
                                </td>
                                <td><a href="index.html" target="_blank">Remarcar</a></td>
                                <td><a href="index.html" target="_blank">Cancelar</a></td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="media">
                                    <svg enable-background="new 0 0 512 512" viewbox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                      <path d="m362 91v-60h-212v60h-150v390h512c0-16.889 0-372.29 0-390zm-182-30h152v30h-152zm302 390h-452v-202.844l90 36v46.844h90v-30h92v30h90v-46.844l90-36zm-302-150h-30v-60h30zm152-60h30v60h-30c0-7.259 0-52.693 0-60zm150-25.156-90 36v-40.844h-90v60h-92v-60h-90v40.844l-90-36c0-14.163 0-84.634 0-94.844h452z"></path>
                                    </svg>
                                    <div class="media-body"><span>Sess??o de Fisioterapia</span>
                                      <p>18:00 Hrs</p>
                                    </div>
                                  </div>
                                </td>
                                <td><a href="index.html" target="_blank">Remarcar</a></td>
                                <td><a href="index.html" target="_blank">Cancelar</a></td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="media">
                                    <svg enable-background="new 0 0 512 512" viewbox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                      <path d="m362 91v-60h-212v60h-150v390h512c0-16.889 0-372.29 0-390zm-182-30h152v30h-152zm302 390h-452v-202.844l90 36v46.844h90v-30h92v30h90v-46.844l90-36zm-302-150h-30v-60h30zm152-60h30v60h-30c0-7.259 0-52.693 0-60zm150-25.156-90 36v-40.844h-90v60h-92v-60h-90v40.844l-90-36c0-14.163 0-84.634 0-94.844h452z"></path>
                                    </svg>
                                    <div class="media-body"><span>Sess??o de pilates</span>
                                      <p>20:00 Hrs</p>
                                    </div>
                                  </div>
                                </td>
                                <td><a href="index.html" target="_blank">Remarcar</a></td>
                                <td><a href="index.html" target="_blank">Cancelar</a></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <div class="code-box-copy">
                          <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#latest-update-sec" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                          <pre><code class="language-html" id="latest-update-sec">                                     &lt;div class="card latest-update-sec"&gt; 
  &lt;div class="card-header"&gt;
    &lt;div class="header-top d-sm-flex align-items-center"&gt;
      &lt;h5&gt; Latest Update &lt;/h5&gt;
       &lt;div class="center-content" &gt;
         &lt;ul class="week-date" &gt;
             &lt;li class="font-primary"&gt; Today &lt;/li&gt;
             &lt;li &gt; Month &lt;/li&gt;
          &lt;/ul&gt; 
      &lt;/div&gt;
      &lt;div class="setting-list"&gt;
        &lt;ul class="list-unstyled setting-option"&gt;
          &lt;li&gt;&lt;div class="setting-primary"&gt;&lt;i class="icon-settings"&gt;&lt;/i&gt;&lt;/div&gt;&lt;/li&gt;
          &lt;li&gt;&lt;i class="view-html fa fa-code font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
          &lt;li&gt;&lt;i class="icofont icofont-maximize full-card font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
          &lt;li&gt;&lt;i class="icofont icofont-minus minimize-card font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
          &lt;li&gt;&lt;i class="icofont icofont-refresh reload-card font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
          &lt;li&gt;&lt;i class="icofont icofont-error close-card font-primary"&gt; &lt;/i&gt;&lt;/li&gt;
        &lt;/ul&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="card-body px-0"&gt;
    &lt;div class="table-responsive"&gt;
        &lt;table class="table table-bordernone"&gt;
            &lt;tbody&gt;
              &lt;tr&gt;
                &lt;td&gt;
                      &lt;div class="media"&gt;
                           &lt;svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve"&gt;
                             &lt;g&gt;
                               &lt;g&gt;
                                 &lt;path d="M506.35,80.699c-7.57-7.589-19.834-7.609-27.43-0.052L331.662,227.31l-42.557-42.557c-7.577-7.57-19.846-7.577-27.423,0 L89.076,357.36c-7.577,7.57-7.577,19.853,0,27.423c3.782,3.788,8.747,5.682,13.712,5.682c4.958,0,9.93-1.894,13.711-5.682 l158.895-158.888l42.531,42.524c7.57,7.57,19.808,7.577,27.397,0.032l160.97-160.323 C513.881,100.571,513.907,88.288,506.35,80.699z"&gt;&lt;/path&gt;
                                &lt;/g&gt;
                             &lt;/g&gt;
                             &lt;g&gt;
                               &lt;g&gt;
                                 &lt;path d="M491.96,449.94H38.788V42.667c0-10.712-8.682-19.394-19.394-19.394S0,31.955,0,42.667v426.667 c0,10.712,8.682,19.394,19.394,19.394H491.96c10.712,0,19.394-8.682,19.394-19.394C511.354,458.622,502.672,449.94,491.96,449.94z "&gt;&lt;/path&gt;
                               &lt;/g&gt;
                             &lt;/g&gt;
                             &lt;g&gt;
                               &lt;g&gt;
                                 &lt;path d="M492.606,74.344H347.152c-10.712,0-19.394,8.682-19.394,19.394s8.682,19.394,19.394,19.394h126.061v126.067 c0,10.705,8.682,19.394,19.394,19.394S512,249.904,512,239.192V93.738C512,83.026,503.318,74.344,492.606,74.344z"&gt;&lt;/path&gt;
                               &lt;/g&gt;
                             &lt;/g&gt;
                           &lt;/svg&gt;
                        &lt;div class="media-body"&gt;
                            &lt;span&gt; Google project Apply Review&lt;/span&gt;
                            &lt;p&gt; Complete in 3 Hours&lt;/p&gt;
                        &lt;/div&gt;
                      &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;
                  &lt;a href='index.html' target='_blank'&gt; Edit
                  &lt;/a&gt;
                &lt;/td&gt;
                &lt;td&gt;
                  &lt;a href='index.html' target='_blank'&gt; Detete
                  &lt;/a&gt;
                &lt;/td&gt;
              &lt;/tr&gt;
              &lt;tr&gt;
                &lt;td&gt;
                      &lt;div class="media"&gt;
                          &lt;svg enable-background="new 0 0 512 512" viewbox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"&gt;
                               &lt;path d="m362 91v-60h-212v60h-150v390h512c0-16.889 0-372.29 0-390zm-182-30h152v30h-152zm302 390h-452v-202.844l90 36v46.844h90v-30h92v30h90v-46.844l90-36zm-302-150h-30v-60h30zm152-60h30v60h-30c0-7.259 0-52.693 0-60zm150-25.156-90 36v-40.844h-90v60h-92v-60h-90v40.844l-90-36c0-14.163 0-84.634 0-94.844h452z"&gt;&lt;/path&gt;
                           &lt;/svg&gt;
                        &lt;div class="media-body"&gt;
                            &lt;span&gt; Business Logo Create&lt;/span&gt;
                            &lt;p&gt; Complete in 2 Days&lt;/p&gt;
                        &lt;/div&gt;
                      &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;
                  &lt;a href='index.html' target='_blank'&gt; Edit
                  &lt;/a&gt;
                &lt;/td&gt;
                &lt;td&gt;
                  &lt;a href='index.html' target='_blank'&gt; Detete
                  &lt;/a&gt;
                &lt;/td&gt;
              &lt;/tr&gt;
              &lt;tr&gt;
                &lt;td&gt;
                      &lt;div class="media"&gt;
                          &lt;svg enable-background="new 0 0 512 512" viewbox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"&gt;
                               &lt;g&gt;
                                 &lt;path d="m345.622 126.038c-50.748-45.076-130.482-46.914-183.244 3.903-21.262 20.478-35.375 47.381-39.737 75.754-5.454 35.471 2.872 70.834 23.444 99.576 56.271 78.616 49.132 141.058 49.915 145.691 0 16.435 6.211 31.795 17.491 43.253 11.289 11.469 26.386 17.785 42.509 17.785 33.084 0 60-26.916 60-60 .686-4.269-6.11-72.81 47.676-143.691 17.875-23.557 27.324-51.673 27.324-81.309 0-38.547-16.54-75.347-45.378-100.962zm-89.622 355.962c-16.486 0-29.462-13.096-29.975-30h59.975c0 16.542-13.458 30-30 30zm83.777-191.826c-30.015 39.554-47.946 84.707-52.569 131.826h-62.57c-4.961-45.331-23.43-91.26-54.157-134.19-15.985-22.333-22.444-49.876-18.188-77.556 7.293-47.43 49.733-88.262 103.846-88.262 58.661 0 104.861 47.891 104.861 105.008 0 23.032-7.339 44.877-21.223 63.174z"&gt;&lt;/path&gt;<br />&lt;path d="m256 62c8.284 0 15-6.716 15-15v-32c0-8.284-6.716-15-15-15s-15 6.716-15 15v32c0 8.284 6.716 15 15 15z"&gt;&lt;/path&gt;<br />&lt;path d="m419.385 149.99 25.98-15c7.174-4.142 9.632-13.316 5.49-20.49-4.142-7.175-13.316-9.633-20.49-5.49l-25.98 15c-7.174 4.142-9.632 13.316-5.49 20.49 4.162 7.21 13.349 9.613 20.49 5.49z"&gt;&lt;/path&gt;<br />&lt;path d="m92.615 304.01-25.98 15c-7.174 4.142-9.632 13.316-5.49 20.49 4.163 7.21 13.35 9.613 20.49 5.49l25.98-15c7.174-4.142 9.632-13.316 5.49-20.49-4.141-7.175-13.316-9.632-20.49-5.49z"&gt;&lt;/path&gt;<br />&lt;path d="m338.5 84.105c7.141 4.124 16.33 1.716 20.49-5.49l15-25.98c4.142-7.174 1.684-16.348-5.49-20.49-7.174-4.144-16.349-1.685-20.49 5.49l-15 25.98c-4.142 7.175-1.684 16.348 5.49 20.49z"&gt;&lt;/path&gt;<br />&lt;path d="m153.01 78.615c4.163 7.21 13.35 9.613 20.49 5.49 7.174-4.142 9.632-13.316 5.49-20.49l-15-25.98c-4.142-7.174-13.315-9.633-20.49-5.49-7.174 4.142-9.632 13.316-5.49 20.49z"&gt;&lt;/path&gt;<br />&lt;path d="m445.365 319.01-25.98-15c-7.175-4.143-16.349-1.684-20.49 5.49-4.142 7.174-1.684 16.348 5.49 20.49l25.98 15c7.141 4.124 16.33 1.716 20.49-5.49 4.143-7.174 1.685-16.348-5.49-20.49z"&gt;&lt;/path&gt;<br />&lt;path d="m107.615 124.01-25.98-15c-7.175-4.144-16.348-1.684-20.49 5.49s-1.684 16.348 5.49 20.49l25.98 15c7.141 4.124 16.33 1.716 20.49-5.49 4.143-7.174 1.685-16.348-5.49-20.49z"&gt;&lt;/path&gt;<br />&lt;path d="m466 212h-30c-8.284 0-15 6.716-15 15s6.716 15 15 15h30c8.284 0 15-6.716 15-15s-6.716-15-15-15z"&gt;&lt;/path&gt;<br />&lt;path d="m91 227c0-8.284-6.716-15-15-15h-30c-8.284 0-15 6.716-15 15s6.716 15 15 15h30c8.284 0 15-6.716 15-15z"&gt;&lt;/path&gt;<br />&lt;path d="m275.394 216.394-19.394 19.393-19.394-19.393c-5.857-5.858-15.355-5.858-21.213 0s-5.858 15.355 0 21.213l25.607 25.606v53.787c0 8.284 6.716 15 15 15s15-6.716 15-15v-53.787l25.606-25.606c5.858-5.858 5.858-15.355 0-21.213-5.857-5.859-15.355-5.859-21.212 0z"&gt;&lt;/path&gt;
                               &lt;/g&gt;
                           &lt;/svg&gt;
                        &lt;div class="media-body"&gt;
                            &lt;span&gt; Business Project Research&lt;/span&gt;
                            &lt;p&gt; Due in 1 hour&lt;/p&gt;
                        &lt;/div&gt;
                      &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;
                  &lt;a href='index.html' target='_blank'&gt; Edit
                  &lt;/a&gt;
                &lt;/td&gt;
                &lt;td&gt;
                  &lt;a href='index.html' target='_blank'&gt; Detete
                  &lt;/a&gt;
                &lt;/td&gt;
              &lt;/tr&gt;
              &lt;tr&gt;
                &lt;td&gt;
                      &lt;div class="media"&gt;
                          &lt;svg enable-background="new 0 0 512 512" viewbox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"&gt;
                               &lt;g&gt;
                                 &lt;path d="m512 390v-390h-512v390h241v32h-15c-41.355 0-75 33.645-75 75v15h210v-15c0-41.355-33.645-75-75-75h-15v-32zm-226 62c19.556 0 36.239 12.539 42.43 30h-144.86c6.191-17.461 22.874-30 42.43-30zm-256-92v-330h452v330c-12.164 0-438.947 0-452 0z"&gt;&lt;/path&gt;
                                 &lt;path d="m136 180c24.813 0 45-20.187 45-45s-20.187-45-45-45-45 20.187-45 45 20.187 45 45 45zm0-60c8.271 0 15 6.729 15 15s-6.729 15-15 15-15-6.729-15-15 6.729-15 15-15z"&gt;&lt;/path&gt;<br />&lt;path d="m184.568 197.848c-28.678-24.39-60.953-16.827-61.054-16.833-35.639 5.799-62.514 38.985-62.514 77.196v41.789h150v-45c0-22.034-9.634-42.865-26.432-57.152zm-3.568 72.152h-90v-11.789c0-23.666 16.049-44.122 37.332-47.584 13.509-2.198 26.578 1.38 36.801 10.074 10.083 8.577 15.867 21.078 15.867 34.299z"&gt;&lt;/path&gt;
                                 &lt;path d="m241 270h120v30h-120z"&gt;&lt;/path&gt;
                                 &lt;path d="m241 210h210v30h-210z"&gt;&lt;/path&gt;
                                 &lt;path d="m241 150h210v30h-210z"&gt;&lt;/path&gt;
                                 &lt;path d="m331 90h120v30h-120z"&gt;&lt;/path&gt;
                                 &lt;path d="m241 90h60v30h-60z"&gt;&lt;/path&gt;
                                 &lt;path d="m391 270h60v30h-60z"&gt;&lt;/path&gt;
                               &lt;/g&gt;
                           &lt;/svg&gt;
                        &lt;div class="media-body"&gt;
                            &lt;span&gt; Recruitment in IT Depertment&lt;/span&gt;
                            &lt;p&gt; Complete in 3 Hours&lt;/p&gt;
                        &lt;/div&gt;
                      &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;
                  &lt;a href='index.html' target='_blank'&gt; Edit
                  &lt;/a&gt;
                &lt;/td&gt;
                &lt;td&gt;
                  &lt;a href='index.html' target='_blank'&gt; Detete
                  &lt;/a&gt;
                &lt;/td&gt;
              &lt;/tr&gt;
              &lt;tr&gt;
                &lt;td&gt;
                      &lt;div class="media"&gt;
                           &lt;svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"&gt;
                               &lt;g&gt;
                                 &lt;g&gt;
                                   &lt;path d="M256,0C114.848,0,0,114.848,0,256s114.848,256,256,256s256-114.848,256-256S397.152,0,256,0z M256,480 C132.48,480,32,379.52,32,256S132.48,32,256,32s224,100.48,224,224S379.52,480,256,480z"&gt;&lt;/path&gt;
                                 &lt;/g&gt;
                               &lt;/g&gt;
                             &lt;g&gt;
                               &lt;g&gt;
                                 &lt;path d="M340.688,292.688L272,361.376V96h-32v265.376l-68.688-68.688l-22.624,22.624l96,96c3.12,3.12,7.216,4.688,11.312,4.688 s8.192-1.568,11.312-4.688l96-96L340.688,292.688z"&gt;&lt;/path&gt;
                               &lt;/g&gt;
                             &lt;/g&gt;
                           &lt;/svg&gt;
                        &lt;div class="media-body"&gt;
                            &lt;span&gt; Submit Riverfront Project&lt;/span&gt;
                            &lt;p&gt; Complete in 2 Days&lt;/p&gt;
                        &lt;/div&gt;
                      &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;
                  &lt;a href='index.html' target='_blank'&gt; Edit
                  &lt;/a&gt;
                &lt;/td&gt;
                &lt;td&gt;
                  &lt;a href='index.html' target='_blank'&gt; Detete
                  &lt;/a&gt;
                &lt;/td&gt;
              &lt;/tr&gt;
            &lt;/tbody&gt;
        &lt;/table&gt;
    &lt;/div&gt;                                       
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 box-col-12 des-xl-100">
                <div class="row">
                  <div class="col-xl-12 box-col-6 des-xl-50">
                    <div class="card">
                      <div class="card-header">
                        <div class="header-top d-sm-flex align-items-center">
                          <h5>Pacientes ativos</h5>
                          <div class="center-content">
                            <p>Total anual: 3K</p>
                          </div>
                          <div class="setting-list">
                            <ul class="list-unstyled setting-option">
                              <li>
                                <div class="setting-primary"><i class="icon-settings"></i></div>
                              </li>
                              <li><i class="view-html fa fa-code font-primary"></i></li>
                              <li><i class="icofont icofont-maximize full-card font-primary"></i></li>
                              <li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
                              <li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
                              <li><i class="icofont icofont-error close-card font-primary"></i></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="card-body p-0">
                        <div id="user-activation-dash-2"></div>
                        <div class="code-box-copy">
                          <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#user-activations" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                          <pre><code class="language-html" id="user-activations">&lt;div class="card"&gt;
   &lt;div class="card-header"&gt;
     &lt;div class="header-top d-sm-flex align-items-center"&gt;
       &lt;h5&gt;User Activations&lt;/h5&gt;
       &lt;div class="center-content"&gt;
         &lt;p&gt;Yearly User 24.65k&lt;/p&gt;
       &lt;/div&gt;
       &lt;div class="setting-list"&gt;
           &lt;ul class="list-unstyled setting-option"&gt;
             &lt;li&gt;
               &lt;div class="setting-primary"&gt;
                 &lt;i class="icon-settings"&gt;&lt;/i&gt;
               &lt;/div&gt;
             &lt;/li&gt;
             &lt;li&gt;
               &lt;i class="view-html fa fa-code font-primary"&gt;&lt;/i&gt;
             &lt;/li&gt;
             &lt;li&gt;
               &lt;i class="icofont icofont-maximize full-card font-primary"&gt;&lt;/i&gt;
             &lt;/li&gt;
             &lt;li&gt;
               &lt;i class="icofont icofont-minus minimize-card font-primary"&gt;&lt;/i&gt;
             &lt;/li&gt;
             &lt;li&gt;
               &lt;i class="icofont icofont-refresh reload-card font-primary"&gt;&lt;/i&gt;
             &lt;/li&gt;
             &lt;li&gt;
               &lt;i class="icofont icofont-error close-card font-primary"&gt;&lt;/i&gt;
             &lt;/li&gt;
           &lt;/ul&gt;
       &lt;/div&gt;
     &lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="card-body p-0"&gt;
     &lt;div id="user-activation-dash-2"&gt;&lt;/div&gt;
   &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
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