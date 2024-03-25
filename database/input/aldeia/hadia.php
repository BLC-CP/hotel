<?php 

  $id = $_GET['id'];
  if(isset($_POST['hadia'])){

    $id_aldeia = $_POST['id_aldeia'];
    $nrn_aldeia = $_POST['nrn_aldeia'];
    $id_suku = $_POST['id_suku'];

    $insert = mq("UPDATE aldeias SET
      id_aldeia='$id_aldeia', 
      nrn_aldeia='$nrn_aldeia', 
      id_suku='$id_suku'
      WHERE id_aldeia='$id'
      ");

    alert('hadia', 'aldeia', 'hadiaAldeia');

  }

 ?>

<div class="col-md-12 mt-2">
   <?php 
  $datas = mfa(mq("SELECT * FROM aldeias WHERE id_aldeia='$id' "));
  ?>
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><?= $title ?></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="" method="POST">
                <div class="card-body">
                  <label for="idtpm">Id Aldeias</label>
                    <input type="text" name="id_aldeia" class="form-control" id="idtpm" readonly value="<?= $datas['id_aldeia'] ?>">

                  <div class="form-group">
                    <label for="tpm">Aldeias</label>
                    <input type="text" name="nrn_aldeia" class="form-control" id="tpm" value="<?= $datas['nrn_aldeia'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="tpm">Suku</label>
                    <select class="form-control"  name="id_suku">
                      <option>Hili Suku</option>
                        <?php 
                        $query = mq("SELECT * FROM sukus");
                        $no = 1;
                        while ($data = mfa($query)) {
                          ?>
                      <option <?php if($datas['id_suku'] == $data['id_suku']) echo "selected"; ?> value="<?= $data['id_suku'] ?>"><?= $data['nrn_suku'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>

                <div class="card-footer">
                  <button type="submit" name="hadia" class="btn btn-primary btn-xs">Rai Dadus</button>
                  <button type="reset" name="reset" class="btn btn-warning btn-xs">Reset</button>
                  <a href="?page=aldeia" class="btn btn-success btn-xs">Fila</a>
                </div>
              </form>
            </div>
            <!-- /.card -->


          </div>