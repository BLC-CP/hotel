<?php 

	if(isset($_POST['aumenta'])){

		$id_user = $_POST['id_user'];
		$nrn_user = $_POST['nrn_user'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $level = $_POST['level'];
    $foto = uploadFotos();

		$insert = mq("INSERT INTO users VALUES('$id_user', '$nrn_user', '$username', '$password', '$level', '$foto')");

		alert('aumenta', 'user', 'aumentaUser');

	}

 ?>

<div class="col-md-12 mt-2">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><?= $title ?></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                	<label for="idtpm">Id User</label>
                    <input type="text" name="id_user" class="form-control" id="idtpm" readonly value="<?= uniqueId('USER-', 'users'); ?>">

                  <div class="form-group">
                    <label for="nrn">Naran</label>
                    <input type="text" name="nrn_user" class="form-control" id="nrn" placeholder="Naran User..">
                  </div>
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control" id="username" placeholder="Username..">
                  </div>
                  <div class="form-group">
                    <label for="password">Username</label>
                    <input type="passwords" name="password" class="form-control" id="password" placeholder="Passwords..">
                  </div>
                  <div class="form-group">
                    <label for="level">Level :</label>
                    <input type="radio" name="level" id="level" value="admin"> Admin
                    <input type="radio" name="level" id="level" value="user"> User
                  </div>
                  <div class="form-group">
                    <label for="foto">Foto</label>
                    <input type="file" name="foto" class="form-control" id="foto">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="aumenta" class="btn btn-primary btn-xs">Rai Dadus</button>
                  <button type="reset" name="reset" class="btn btn-warning btn-xs">Reset</button>
                  <a href="?page=user" class="btn btn-success btn-xs">Fila</a>
                </div>
              </form>
            </div>
            <!-- /.card -->


          </div>