<?php 
    session_start();
  include 'config/config.php';
  include 'page/page.php';

    if($_SESSION['status'] != 'logins'){
        header("Location:logs/login.php");
    }

    $id_user = $_SESSION['id_user'];
    $queryUser = mq("SELECT * FROM users WHERE id_user='$id_user' ");
    $dataUser = mfa($queryUser);
    

 ?>


<!-- Header -->
<?php include 'template/header.php'; ?>

<div class="wrapper">

  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Head -->
    <?php include 'template/head.php'; ?>
  </nav>

  <!-- Sidebar  -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <?php include 'template/sidebar.php'; ?>
  </aside>

  <!-- Content -->
  <div class="content-wrapper">
    <?php eval($CONTENT['main']); ?>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.4
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- Footer -->
<?php include 'template/footer.php'; ?>
