<?php 

$id = $_GET['id'];
  if(isset($_POST['hadia'])){

    $id_munisipiu = $_POST['id_munisipiu'];
    $nrn_munisipiu = $_POST['nrn_munisipiu'];

    $insert = mq("UPDATE munisipius SET
      id_munisipiu='$id_munisipiu', 
      nrn_munisipiu='$nrn_munisipiu'
      WHERE id_munisipiu='$id'
      ");

    alert('hadia', 'munisipiu', 'hadiaMunisipiu');

  }

 ?>

<div class="col-md-12 mt-2">
  <?php 
  $datas = mfa(mq("SELECT * FROM munisipius WHERE id_munisipiu='$id' "));
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
                  <label for="idtpm">Id Munisipiu</label>
                    <input type="text" name="id_munisipiu" class="form-control" id="idtpm" readonly value="<?= $datas['id_munisipiu']; ?>">

                  <div class="form-group">
                    <label for="tpm">Munisipiu</label>
                    <input type="text" name="nrn_munisipiu" value="<?= $datas['nrn_munisipiu']; ?>" class="form-control" id="tpm" >
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="hadia" class="btn btn-primary btn-xs">Rai Dadus</button>
                  <button type="reset" name="reset" class="btn btn-warning btn-xs">Reset</button>
                  <a href="?page=munisipiu" class="btn btn-success btn-xs">Fila</a>
                </div>
              </form>
            </div>
            <!-- /.card -->


          </div>