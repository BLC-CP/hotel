<?php 

	if(isset($_POST['aumenta'])){

		$id_nasaun = $_POST['id_nasaun'];
		$nrn_nasaun = $_POST['nrn_nasaun'];

		$insert = mq("INSERT INTO nasauns VALUES('$id_nasaun', '$nrn_nasaun')");

		alert('aumenta', 'nasaun', 'aumentaNasaun');

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
              <form role="form" action="" method="POST">
                <div class="card-body">
                	<label for="idtpm">Id Nasaun</label>
                    <input type="text" name="id_nasaun" class="form-control" id="idtpm" readonly value="<?= uniqueId('NSN-', 'nasauns'); ?>">

                  <div class="form-group">
                    <label for="tpm">Nasaun</label>
                    <input type="text" name="nrn_nasaun" class="form-control" id="tpm" placeholder="Nasaun..">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="aumenta" class="btn btn-primary btn-xs">Rai Dadus</button>
                  <button type="reset" name="reset" class="btn btn-warning btn-xs">Reset</button>
                  <a href="?page=nasaun" class="btn btn-success btn-xs">Fila</a>
                </div>
              </form>
            </div>
            <!-- /.card -->


          </div>