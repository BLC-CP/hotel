<?php 

$id = $_GET['id'];
  if(isset($_POST['hadia'])){

    $id_nasaun = $_POST['id_nasaun'];
    $nrn_nasaun = $_POST['nrn_nasaun'];

    $insert = mq("UPDATE nasauns SET
      id_nasaun='$id_nasaun', 
      nrn_nasaun='$nrn_nasaun'
      WHERE id_nasaun='$id'
      ");

    alert('hadia', 'nasaun', 'hadiaNasaun');

  }

 ?>

<div class="col-md-12 mt-2">
  <?php 
  $datas = mfa(mq("SELECT * FROM nasauns WHERE id_nasaun='$id' "));
  ?>
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><?= $title ?></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="" method="POST">
                <div class="card-body">
                  <label for="idtpm">Id Nasaun</label>
                    <input type="text" name="id_nasaun" class="form-control" id="idtpm" readonly value="<?= $datas['id_nasaun']; ?>">

                  <div class="form-group">
                    <label for="tpm">Nasaun</label>
                    <input type="text" name="nrn_nasaun" value="<?= $datas['nrn_nasaun']; ?>" class="form-control" id="tpm" >
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="hadia" class="btn btn-primary btn-xs">Rai Dadus</button>
                  <button type="reset" name="reset" class="btn btn-warning btn-xs">Reset</button>
                  <a href="?page=nasaun" class="btn btn-success btn-xs">Fila</a>
                </div>
              </form>
            </div>
            <!-- /.card -->


          </div>