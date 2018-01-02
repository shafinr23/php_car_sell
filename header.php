<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo $_SESSION["photo_url"]?>" alt="" class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $_SESSION["username"]; ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-users"></i> Customar <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="all_customer.php">All Customer</a></li>
                      <li><a href="add_customer.php">Add New Customer</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-automobile"></i> Car Featuer <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="all_car_fe.php">All Car featuer </a></li>
                      <li><a href="add_car_fe.php">Add New Car featuer</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-camera"></i> Car model <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="all_car_mo.php">All Car model</a></li>
                      <li><a href="add_car_mo.php">Add New Car model</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-list-ul"></i> Car Manufacturers <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="all_car_menu.php">All Car Manufacturers</a></li>
                      <li><a href="add_car_menu.php">Add New Car Manufacturers</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bus"></i> Vehicle Categories <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="all_vehcal.php">All Vehicle Categories</a></li>
                      <li><a href="add_vehcal.php">Add New Vehicle Categories</a></li>
                    </ul>
                  </li> 
                  <li><a><i class="fa fa-university"></i> Insurance Company <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="all_insu_com.php">All Insurance Company</a></li>
                      <li><a href="add_insu_com.php">Add New Insurance Company</a></li>
                    </ul>
                  </li> 
                  <li><a><i class="fa fa-university"></i> Finance Company <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="all_finance_com.php">All Finance Company</a></li>
                      <li><a href="add_finance_com.php">Add New Finance Company</a></li>
                    </ul>
                  </li> 
                  <li><a><i class="fa fa-bar-chart"></i> Payment Status <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="all_paymant_st.php">All Payment Status</a></li>
                      <li><a href="add_paymant_st.php">Add New Payment Status</a></li>
                    </ul>
                  </li>   
                  <li><a><i class="fa fa-bar-chart"></i> Car for sell <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="all_car_for_sell.php">All Car for sell</a></li>
                      <li><a href="add_car_for_sell.php">Add Car for sell</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart"></i> featuers on car for sell <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="all_featuers_on_car_for_sale.php">All featuers on car for sell</a></li>
                      <li><a href="add_featuers_on_car_for_sale.php">Add New featuers on car for sell</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart"></i> Customer Preferemces <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="all_customer_pre.php">All Customer Preferemces</a></li>
                      <li><a href="add_customer_pre.php">Add New Customer Preferemces</a></li>
                    </ul>
                  </li>            
                </ul>
              </div>
              

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="index.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo $_SESSION["photo_url"]; ?>" alt=""><?php echo $_SESSION["username"]; ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="index.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span><?php echo $_SESSION["username"]; ?></span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span><?php echo $_SESSION["username"]; ?></span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->