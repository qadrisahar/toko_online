<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">

      </div>
      <!-- search form -->

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <!-- MENU DASHBOARD -->
        <li><a href="<?php echo base_url('admin/dashboard') ?>"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
        <li><a href="<?php echo base_url('admin/transaksi') ?>"><i class="fa fa-exchange"></i> <span>Transaksi</span></a></li>
        <!-- MENu PRODUK  -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-bars"></i> <span>Produk</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('admin/produk') ?>"><i class="fa fa-list text-aqua"></i> Data Produk</a></li>
            <li><a href="<?php echo base_url('admin/produk/tambah') ?>"><i class="fa fa-plus text-aqua"></i> Tambah Produk</a></li>
            <li><a href="<?php echo base_url('admin/kategori') ?>"><i class="fa fa-tags text-aqua"></i> Kategori Produk</a></li>
          </ul>
        </li>
        <li><a href="<?php echo base_url('admin/rekening') ?>"><i class="fa fa-dollar"></i> <span>Data Rekening</span></a></li>
        <!-- MENU USER -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>Pengguna</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('admin/user') ?>"><i class="fa fa-list text-aqua"></i> Data Pengguna</a></li>
            <li><a href="<?php echo base_url('admin/user/tambah') ?>"><i class="fa fa-plus text-aqua"></i> Tambah Pengguna</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-cogs"></i> <span>Pengaturan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('admin/konfigurasi') ?>"><i class="fa fa-home text-aqua"></i> Website</a></li>
            <li><a href="<?php echo base_url('admin/konfigurasi/logo') ?>"><i class="fa fa-image text-aqua"></i> Logo</a></li>
            <li><a href="<?php echo base_url('admin/konfigurasi/icon') ?>"><i class="fa fa-user text-aqua"></i> Icon</a></li>
          </ul>
        </li>

        <!-- <li><a href="#"><i class="fa fa-print"></i> <span> Laporan Stok Produk</span></a></li>
        <li><a href="#"><i class="fa fa-print"></i> <span> Laporan Penjualan </span></a></li> -->
        <!-- MENU LOGOUT -->
        <li><a href="<?php echo base_url('login/logout') ?>"><i class="fa fa-sign-out"></i> <span>Keluar</span></a></li>
      </ul>

    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <b><?php echo $title; ?></b>
      </h1>
      <!-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol> -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">

            </div>
            <!-- /.box-header -->
            <div class="box-body">
