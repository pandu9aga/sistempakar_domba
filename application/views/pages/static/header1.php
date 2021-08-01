<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>S.E.S.</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/bower_components/bootstrap/dist/css/bootstrap.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/bower_components/select2/dist/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/bower_components/Ionicons/css/ionicons.min.css">
  <!-- fullCalendar -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/bower_components/fullcalendar/dist/fullcalendar.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/bower_components/fullcalendar/dist/fullcalendar.print.min.css" media="print">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/dist/css/AdminLTE.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/dist/css/skins/_all-skins.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/sweetalert/sweetalert.css">
  <script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Anton|Do+Hyeon|Merriweather|Roboto|Roboto+Condensed|Roboto+Slab" rel="stylesheet">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini sidebar-collapse">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url(); ?>home" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><img class="img-rounded" src="<?php echo base_url(); ?>assets/img/logo_50x50.jpg" alt="icon"></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img src="<?php echo base_url(); ?>assets/img/ses_160x47.png" alt="logo"></span>
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
    </nav>

  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Navigasi Utama</li>
        <li >
          <a href="<?php echo base_url(); ?>home">
            <i class="fa fa-home"></i> <span>Home</span>
          </a>
        </li>
        <li >
          <a href="<?php echo base_url(); ?>konsultasi">
            <i class="fa fa-medkit"></i>
            <span>Konsultasi</span>
          </a>
        </li>
        <li >
          <a href="<?php echo base_url(); ?>tips">
            <i class="fa fa-commenting"></i>
            <span>Tips Perawatan</span>
          </a>
        </li>
        <li >
          <a href="<?php echo base_url(); ?>petunjuk">
            <i class="fa fa-search"></i>
            <span>Petunjuk</span>
          </a>
        </li>
        <li >
          <a href="<?php echo base_url(); ?>tentang">
            <i class="fa fa-question-circle"></i>
            <span>Tentang</span>
          </a>
        </li>
        <li >
          <a href="<?php echo base_url(); ?>admin/login">
            <i class="fa fa-sign-in-alt"></i>
            <span>Admin</span>
          </a>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
