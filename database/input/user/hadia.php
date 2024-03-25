<?php 

  $id = $_GET['id'];
  if(isset($_POST['aumenta'])){

    $id_user = $_POST['id_user'];
    $nrn_user = $_POST['nrn_user'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];
    if($_FILES['foto']['error'] === 4){
      $foto = $_POST['img'];
    }else{
      $foto = uploadFotos();
    }

    $insert = mq("UPDATE users SET
      id_user='$id_user', 
      nrn_user='$nrn_user', 
      username='$username', 
      password='$password', 
      level='$level', 
      foto='$foto'
      WHERE id_user='$id'
      ");

    alert('aumenta', 'user', 'aumentaUser');

  }

 ?>

<div class="col-md-12 mt-2">
<?php 
  $datas = mfa(mq("SELECT * FROM users WHERE id_user='$id' "));
  ?>
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><?= $title ?></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <label for="idtpm">Id User</label>
                    <input type="text" name="id_user" class="form-control" id="idtpm" readonly value="<?= $datas['id_user']; ?>">

                  <div class="form-group">
                    <label for="nrn">Naran</label>
                    <input type="text" name="nrn_user" class="form-control" id="nrn" value="<?= $datas['nrn_user']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control" id="username" value="<?= $datas['username']; ?>">
                  </div>
                  <div class="form-group">
                    <!-- <label for="password">Password</label> -->
                    <input type="hidden" name="password" class="form-control" id="password" value="<?= $datas['password']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="level">Level :</label>
                    <input type="radio" <?= $datas['level'] == 'admin' ? 'checked' : null ?> name="level" id="level" value="admin"> Admin
                    <input type="radio" <?= $datas['level'] == 'user' ? 'checked' : null ?> name="level" id="level" value="user"> User
                  </div>
                  <div class="form-group">
                    <label for="foto">Foto</label>
                    <input type="file" name="foto" value="<?= $datas['foto']; ?>" class="form-control" id="foto">
                    <input type="hidden" name="img" value="<?= $datas['foto']; ?>" class="form-control" id="foto">
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