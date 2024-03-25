<?php 

  $id = $_GET['id'];
  if(isset($_POST['hadia'])){

    $id_kuartu = $_POST['id_kuartu'];
    $nu_kuartu = $_POST['nu_kuartu'];
    $tipu_kuartu = $_POST['tipu_kuartu'];

    $insert = mq("UPDATE kuartus SET
      id_kuartu='$id_kuartu', 
      nu_kuartu='$nu_kuartu', 
      tipu_kuartu='$tipu_kuartu'
      WHERE id_kuartu='$id'
      ");

    alert('hadia', 'kuartu', 'hadiaKuartu');

  }

 ?>

<div class="col-md-12 mt-2">
  <?php 
  $datas = mfa(mq("SELECT * FROM kuartus WHERE id_kuartu='$id' "));
  ?>
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><?= $title ?></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="" method="POST">
                <div class="card-body">
                  <label for="idtpm">Id Kuartu</label>
                    <input type="text" name="id_kuartu" class="form-control" id="idtpm" readonly value="<?= $datas['id_kuartu']; ?>">

                  <div class="form-group">
                    <label for="tpm">Nu Kuartu</label>
                    <input type="text" name="nu_kuartu" class="form-control" id="tpm" value="<?= $datas['nu_kuartu']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="tpm">Tipu Kuartu</label>
                    <input type="text" name="tipu_kuartu" class="form-control" id="tpm" value="<?= $datas['tipu_kuartu']; ?>">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="hadia" class="btn btn-primary btn-xs">Rai Dadus</button>
                  <button type="reset" name="reset" class="btn btn-warning btn-xs">Reset</button>
                  <a href="?page=kuartu" class="btn btn-success btn-xs">Fila</a>
                </div>
              </form>
            </div>
            <!-- /.card -->


          </div>