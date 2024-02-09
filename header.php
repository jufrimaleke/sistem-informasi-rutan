<?php 
require_once "_config/config.php";
require_once "_asset/libs/vendor/autoload.php";
if (!isset($_SESSION['user'])) {
  echo "<script>window.location='".base_url('_auth/login.php')."';</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Admin Rutan Malendeng</title>
      <!-- Tell the browser to be responsive to screen width -->
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <!-- Bootstrap 3.3.7 -->
      <link rel="stylesheet" href="<?=base_url('_asset/bootstrap/dist/css/bootstrap.min.css') ?>">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="<?=base_url('_asset/font-awesome/css/font-awesome.min.css') ?>">
      <!-- Ionicons -->
      <link rel="stylesheet" href="<?=base_url('_asset/Ionicons/css/ionicons.min.css') ?>">
      <!-- Theme style -->
      <link rel="stylesheet" href="<?=base_url('_asset/dist/css/AdminLTE.min.css') ?>">

      <link rel="icon" href="<?=base_url('_asset/img/Logo_Lapas.png') ?>">
      
      <link rel="stylesheet" href="<?=base_url('_asset/dist/css/skins/_all-skins.min.css') ?>">
      <!-- Google Font -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="<?=base_url('_dashboard') ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Rutan</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>Rutan</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            <ul class="dropdown-menu">
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?=base_url('_asset/img/Logo_Lapas.PNG') ?>" class="user-image" alt="User Image">
              <span class="hidden-xs">Profile</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?=base_url('_asset/img/Logo_Lapas.PNG') ?>" class="img-circle" alt="User Image">

                <p>
                  Profile
                  <small>Lembaga Pemasyarakatan Manado</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Edit Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?=base_url('_auth/logout.php') ?>" onclick="return confirm('Anda akan logout')"class="btn btn-default btn-flat">Logout</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?=base_url('_asset/img/Logo_Lapas.PNG') ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="<?=base_url('_dashboard') ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container"></span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Master Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url('_master/data.php')?>"><i class="fa fa-circle-o"></i> Ruangan</a></li>
          </ul>
          
        </li>


        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Manajemen Pegawai</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url('_daftar_pegawai/data.php')?>"><i class="fa fa-circle-o"></i> Daftar Pengawai</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Jadwal Piket</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Manajemen Binaan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url('_daftar_binaan/data.php') ?>"><i class="fa fa-circle-o"></i> Daftar Binaan</a></li>
            <li><a href="<?=base_url('_daftar_binaan/status.php') ?>"><i class="fa fa-circle-o"></i> Status Binaan</a></li>
            <li><a href="<?=base_url('_daftar_binaan/jadwal.php') ?>"><i class="fa fa-circle-o"></i> Jadwal Kebersihan</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Forms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> General Elements</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Editors</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Tables</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Simple tables</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Data tables</a></li>
          </ul>
        </li>
        <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
        <li class="header">LABELS</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-gears"></i> <span>Pengaturan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url('_user/data.php') ?>"><i class="fa fa-circle-o"></i>User</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Akses</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Modul</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Manajemen User</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Statistik</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Log Login</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Log Register</a></li>  
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>







  



