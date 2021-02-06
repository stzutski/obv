<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
  <meta name="keywords"
    content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="pixelstrap">
  <base href="<?php echo URLAPP;?>">
  <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
  <title><?php echo TITLEAPP;?></title>
  <!-- Google font-->
  <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap"
    rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/css/fontawesome.css">
  <!-- ico-font-->
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/icofont.css">
  <!-- Themify icon-->
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/themify.css">
  <!-- Flag icon-->
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/flag-icon.css">
  <!-- Feather icon-->
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/feather-icon.css">
  <!-- Plugins css start-->
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/datatables.css">
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/animate.css">
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/chartist.css">
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/date-picker.css">
  <link rel="stylesheet" type="text/css" href="assets/css/alertify.css">
  <link rel="stylesheet" type="text/css" href="assets/css/alertify.default.css">
  <!-- Plugins css Ends-->
  <!-- Bootstrap css-->
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.css">
  <!-- App css-->
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <link id="color" rel="stylesheet" href="assets/css/color-1.css" media="screen">
  <!-- Responsive css-->
  <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
</head>

<body class="notransition">
  <!-- tap on top starts-->
  <div class="tap-top"><i data-feather="chevrons-up"></i></div>
  <!-- tap on tap ends-->
  <!-- page-wrapper Start-->
  <div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    <div class="page-header">
      <div class="header-wrapper row m-0">
        <form class="form-inline search-full" action="#" method="get">
          <div class="form-group w-100">
            <div class="Typeahead Typeahead--twitterUsers">
              <div class="u-posRelative">
                <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text"
                  placeholder="Search Cuba .." name="q" title="" autofocus>
                <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span>
                </div><i class="close-search" data-feather="x"></i>
              </div>
              <div class="Typeahead-menu"></div>
            </div>
          </div>
        </form>
        <div class="header-logo-wrapper">
          <div class="logo-wrapper"><a href=""><img class="img-fluid" src="assets/images/logo/logo.png" alt=""></a>
          </div>
          <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="grid" id="sidebar-toggle"> </i>
          </div>
        </div>
        <div class="left-header col horizontal-wrapper pl-0">

        </div>
        <div class="nav-right col-8 pull-right right-header p-0">
          <ul class="nav-menus">
            <li> <span class="header-search"><i data-feather="search"></i></span></li>
            <li class="onhover-dropdown">
              <div class="notification-box"><i data-feather="bell"></i><span
                  class="badge badge-pill badge-secondary">4</span></div>
              <ul class="notification-dropdown onhover-show-div">
                <li class="bg-primary text-center">
                  <h6 class="f-18 mb-0">Notificações</h6>
                  <p class="mb-0">4 novas notificações</p>
                </li>
                <li>
                  <p><i class="fa fa-circle-o mr-3 font-primary"> </i>Delivery processing <span class="pull-right">10
                      min.</span></p>
                </li>
                <li>
                  <p><i class="fa fa-circle-o mr-3 font-success"></i>Order Complete<span class="pull-right">1 hr</span>
                  </p>
                </li>
                <li>
                  <p><i class="fa fa-circle-o mr-3 font-info"></i>Tickets Generated<span class="pull-right">3 hr</span>
                  </p>
                </li>
                <li>
                  <p><i class="fa fa-circle-o mr-3 font-danger"></i>Delivery Complete<span class="pull-right">6
                      hr</span></p>
                </li>
                <li><a class="btn btn-primary" href="#">Check all notification</a></li>
              </ul>
            </li>
            <li>
              <div class="mode"><i class="fa fa-moon-o"></i></div>
            </li>
            <li class="cart-nav onhover-dropdown">
              <div class="cart-box"><i data-feather="shopping-cart"></i><span
                  class="badge badge-pill badge-primary">1</span></div>
              <ul class="cart-dropdown chat-dropdown onhover-show-div">
                <li class="bg-primary text-center">
                  <h6 class="f-18 mb-0">Pedidos</h6>
                  <p class="mb-0">Meus pedidos</p>
                </li>
                <li class="mt-0">
                  <div class="media">
                    <div class="media-body"><span>Pacote Visto E1 EUA</span>
                      <p>Assessoria emissão visto E1 - EUA</p>
                      <h6 class="f-12 light-font">1 x R$ 899.00</h6>
                    </div>
                    <div class="close-circle"><a href="#"><i data-feather="x"></i></a></div>
                  </div>
                </li>
                <li>
                  <div class="total">
                    <h6 class="mb-0 mt-1">Subtotal : <span class="f-right">R$ 899,00</span></h6>
                  </div>
                </li>
                <li>
                  <div class="buttons">
                    <h6 class="mb-0"><a class="view-cart" href="#">Ver carrinho</a><a class="checkout f-right"
                        href="#">Finalizar</a></h6>
                  </div>
                </li>
              </ul>
            </li>
            <li class="onhover-dropdown"><i data-feather="message-square"></i>
              <ul class="chat-dropdown onhover-show-div">
                <li class="bg-primary text-center">
                  <h6 class="f-18 mb-0">Message Box</h6>
                  <p class="mb-0">You have 3 new messages </p>
                </li>
                <li>
                  <div class="media"><img class="img-fluid rounded-circle mr-3" src="assets/images/user/1.jpg"
                      alt="">
                    <div class="status-circle online"></div>
                    <div class="media-body"><span>Erica Hughes</span>
                      <p>Lorem Ipsum is simply dummy...</p>
                    </div>
                    <p class="f-12 font-success">58 mins ago</p>
                  </div>
                </li>
                <li>
                  <div class="media"><img class="img-fluid rounded-circle mr-3" src="assets/images/user/2.jpg"
                      alt="">
                    <div class="status-circle online"></div>
                    <div class="media-body"><span>Kori Thomas</span>
                      <p>Lorem Ipsum is simply dummy...</p>
                    </div>
                    <p class="f-12 font-success">1 hr ago</p>
                  </div>
                </li>
                <li>
                  <div class="media"><img class="img-fluid rounded-circle mr-3" src="assets/images/user/4.jpg"
                      alt="">
                    <div class="status-circle offline"></div>
                    <div class="media-body"><span>Ain Chavez</span>
                      <p>Lorem Ipsum is simply dummy...</p>
                    </div>
                    <p class="f-12 font-danger">32 mins ago</p>
                  </div>
                </li>
                <li class="text-center"> <a class="btn btn-primary" href="#">View All </a></li>
              </ul>
            </li>
            <li class="maximize"><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i
                  data-feather="maximize"></i></a></li>
            <li class="profile-nav onhover-dropdown p-0 mr-0">
              <div class="media profile-media"><img class="b-r-10" src="assets/images/dashboard/profile.jpg" alt="">
                <div class="media-body"><span>Nome usuário</span>
                  <p class="mb-0 font-roboto">Admin <i class="middle fa fa-angle-down"></i></p>
                </div>
              </div>
              <ul class="profile-dropdown onhover-show-div">
                <li><i data-feather="user"> </i><span><a href="perfil">Perfil</a></span></li>
                <li><i data-feather="mail"></i><span>Inbox</span></li>
                <!-- <li><i data-feather="file-text"></i><span>Taskboard</span></li>
                  <li><i data-feather="settings"></i><span>Settings</span></li> -->
                <li><i data-feather="log-in"> </i><span><a href="login">Log in</a></span></li>
                <li><i data-feather="log-out"> </i><span><a href="logout">Log out</a></span></li>
              </ul>
            </li>
          </ul>
        </div>
        <script id="result-template" type="text/x-handlebars-template">
            <div class="ProfileCard u-cf">
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details">
            <div class="ProfileCard-realName">{{name}}</div>
            </div>
            </div>
          </script>
        <script id="empty-template"
          type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
      </div>
    </div>
    <!-- Page Header Ends                              -->





    <!-- Page Body Start-->
    <div class="page-body-wrapper horizontal-menu">
      <!-- Page Sidebar Start-->
      <div class="sidebar-wrapper">
        <div class="logo-wrapper"><a href="<?php echo URLAPP;?>"><img class="img-fluid" src="assets/images/logo/logo.png"
              alt=""></a></div>
        <div class="logo-icon-wrapper"><a href="<?php echo URLAPP;?>"><img class="img-fluid"
              src="assets/images/logo/logo-icon.png" alt=""></a></div>
        <nav>
          <div class="sidebar-main">
            <div id="sidebar-menu">

              <ul class="sidebar-links custom-scrollbar">
                <li class="back-btn"><a href="index.html"><img class="img-fluid"
                      src="assets/images/logo/logo-icon.png" alt=""></a>
                  <div class="mobile-back text-right"><span>Back</span><i class="fa fa-angle-right pl-2"
                      aria-hidden="true"></i></div>
                </li>

                <?php
                if(USERLEVEL == 'cliente'){
                  include_once('views/common/menu-lateral-cliente.php');
                  }
                if(USERLEVEL == 'admin'){
                  include_once('views/common/menu-lateral-admin.php');
                  }
                if(USERLEVEL == 'master'){
                  include_once('views/common/menu-lateral-master.php');
                  }
                ?>

              </ul>
            </div>
          </div>
        </nav>
      </div>
      <!-- Page Sidebar Ends-->
