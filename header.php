<?php 

 $cookie_name = "login";

 $d='barakaSBA@_22§';

 $dd=sha1($d);

 try{

    if(! isset($_COOKIE[$cookie_name])){

        if(($_COOKIE[$cookie_name])!=$dd){

            echo "<script>location.href='index.php'</script>"; 

            exit;

        }

      echo "<script>location.href='index.php'</script>"; 

      exit;

    }

  }catch(Exception $e){

    echo "<script>location.href='index.php'<script>";

    exit;

  }

    ?>

<!DOCTYPE html>

<!--

This is a starter template page. Use this page to start your new project from

scratch. This page gets rid of all links and provides the needed markup only.

-->

<html lang="en">

<head>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Groupe Hasnaoui - Admin</title>



  <!-- Google Font: Source Sans Pro -->

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <!-- Font Awesome Icons -->

  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

  <!-- Theme style -->
  <script src="sweetalert.min.js"></script>

  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css" rel="stylesheet" />
<!-- JS for jQuery -->
<!-- JS for full calender -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>
<!-- bootstrap css and js -->

  
</head>

<body class="hold-transition sidebar-mini">

<div class="wrapper">



  <!-- Navbar -->

  <nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <!-- Left navbar links -->

    <ul class="navbar-nav">

      <li class="nav-item">

        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>

      </li>

      <li class="nav-item d-none d-sm-inline-block">

        <a href="https://www.groupe-hasnaoui.com/fr/admin/" class="nav-link active" style="color: green;font-weight:bold;"> Français </a>

      </li>

      <li class="nav-item d-none d-sm-inline-block">

        <a href="https://www.groupe-hasnaoui.com/en/admin/" class="nav-link">Anglais</a>

      </li>
      <li class="nav-item d-none d-sm-inline-block">

<a href="https://www.groupe-hasnaoui.com/ar/admin/" class="nav-link">Arabe</a>

</li>
    </ul>



    <!-- Right navbar links -->

    <ul class="navbar-nav ml-auto">

      <!-- Navbar Search -->

      <li class="nav-item">

        <a class="nav-link" data-widget="navbar-search" href="#" role="button">

          <i class="fas fa-search"></i>

        </a>

        <div class="navbar-search-block">

          <form class="form-inline">

            <div class="input-group input-group-sm">

              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">

              <div class="input-group-append">

                <button class="btn btn-navbar" type="submit">

                  <i class="fas fa-search"></i>

                </button>

                <button class="btn btn-navbar" type="button" data-widget="navbar-search">

                  <i class="fas fa-times"></i>

                </button>

              </div>

            </div>

          </form>

        </div>

      </li>



      <!-- Messages Dropdown Menu -->

      <li class="nav-item dropdown">

        <a class="nav-link" data-toggle="dropdown" href="#">

          <i class="far fa-comments"></i>

          <span class="badge badge-danger navbar-badge">3</span>

        </a>

        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

          <a href="#" class="dropdown-item">

            <!-- Message Start -->

            <div class="media">

              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">

              <div class="media-body">

                <h3 class="dropdown-item-title">

                  Brad Diesel

                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>

                </h3>

                <p class="text-sm">Call me whenever you can...</p>

                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>

              </div>

            </div>

            <!-- Message End -->

          </a>

          <div class="dropdown-divider"></div>

          <a href="#" class="dropdown-item">

            <!-- Message Start -->

            <div class="media">

              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">

              <div class="media-body">

                <h3 class="dropdown-item-title">

                  John Pierce

                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>

                </h3>

                <p class="text-sm">I got your message bro</p>

                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>

              </div>

            </div>

            <!-- Message End -->

          </a>

          

        </div>

      </li>

      <!-- Notifications Dropdown Menu -->

      <li class="nav-item dropdown">

        <a class="nav-link" data-toggle="dropdown" href="#">

          <i class="far fa-bell"></i>

          <span class="badge badge-warning navbar-badge">15</span>

        </a>

        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

          <span class="dropdown-header">15 Notifications</span>

          <div class="dropdown-divider"></div>

          <a href="#" class="dropdown-item">

            <i class="fas fa-envelope mr-2"></i> 4 new messages

            <span class="float-right text-muted text-sm">3 mins</span>

          </a>

          <div class="dropdown-divider"></div>

          <a href="#" class="dropdown-item">

            <i class="fas fa-users mr-2"></i> 8 friend requests

            <span class="float-right text-muted text-sm">12 hours</span>

          </a>

          <div class="dropdown-divider"></div>

          <a href="#" class="dropdown-item">

            <i class="fas fa-file mr-2"></i> 3 new reports

            <span class="float-right text-muted text-sm">2 days</span>

          </a>

          <div class="dropdown-divider"></div>

          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>

        </div>

      </li>

      <li class="nav-item">

        <a class="nav-link" data-widget="fullscreen" href="#" role="button">

          <i class="fas fa-expand-arrows-alt"></i>

        </a>

      </li>

      <li class="nav-item">

        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">

          <i class="fas fa-th-large"></i>

        </a>

      </li>

    </ul>

  </nav>

  <!-- /.navbar -->



  <!-- Main Sidebar Container -->

  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Brand Logo -->

    <a href="index3.html" class="brand-link">

      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">

      <span class="brand-text font-weight-light">Admin GSH</span>

    </a>



    <!-- Sidebar -->

    <div class="sidebar">

      <!-- Sidebar user panel (optional) -->

      <div class="user-panel mt-3 pb-3 mb-3 d-flex">

        <div class="image">

        <i class="fas fa-user" style="color:#ffffff"></i>
        </div>

        <div class="info">

          <a href="#" class="d-block">Admin</a>

        </div>

      </div>





      <!-- Sidebar Menu -->

      <nav class="mt-2">

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <!-- Add icons to the links using the .nav-icon class

               with font-awesome or any other icon font library -->

          <li class="nav-item menu-open">

            <a href="dashboard.php" class="nav-link active" id="bna">

              <i class="nav-icon fas fa-tachometer-alt"></i>

              <p>

                Tableau de bord

                

              </p>

            </a>

           

          </li>

          <li class="nav-item">

            <a href="act.php" class="nav-link" id="an">

              <i class="nav-icon fas fa-th"></i>

              <p>

Actualités              

</p>

            </a>

          </li>

          <li class="nav-item">

<a href="chat.php" class="nav-link" id="ann">

<i class="far fa-comment-alt"></i>
  <p>

Chat              

</p>

</a>

</li>
<li class="nav-item">

<a href="chat_message.php" class="nav-link" id="anntio">

<i class="far fa-comment-alt"></i>
  <p>

Chat message (user no response)             

</p>

</a>

</li>
<li class="nav-item">

<a href="commentaire.php" class="nav-link" id="com">

<i class="fas fa-comments"></i>  <p>

  Commentaire              

</p>

</a>

</li>

<li class="nav-item">

<a href="offre_emploi.php" class="nav-link" id="offre">

<i class="fas fa-toolbox"></i>
  <p>

Offre d'emploi              

</p>

</a>

</li>








<li class="nav-item">

<a href="nv_annonce.php" class="nav-link" id="neveau">

<i class="fas fa-newspaper"></i> <p>

NOUVEAUTÉS            

</p>

</a>

</li>
<li class="nav-item">

<a href="commentaire_nv.php" class="nav-link" id="com_nv">

<i class="fas fa-comments"></i>  <p>

  Commentaire_nouveautés              

</p>

</a>

</li>
        </ul>

      </nav>

      <!-- /.sidebar-menu -->

    </div>

    <!-- /.sidebar -->

  </aside>



  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <div class="content-header">

      <div class="container-fluid">

        <div class="row mb-2">

          <div class="col-sm-6">


          </div><!-- /.col -->

          <div class="col-sm-6">

      

          </div><!-- /.col -->

        </div><!-- /.row -->

      </div><!-- /.container-fluid -->

    </div>

    <!-- /.content-header -->

