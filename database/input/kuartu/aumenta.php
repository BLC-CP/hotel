<?php 

	if(isset($_POST['aumenta'])){

		$id_kuartu = $_POST['id_kuartu'];
		$nu_kuartu = $_POST['nu_kuartu'];
    $tipu_kuartu = $_POST['tipu_kuartu'];

		$insert = mq("INSERT INTO kuartus VALUES('$id_kuartu', '$nu_kuartu', '$tipu_kuartu')");

		alert('aumenta', 'kuartu', 'aumentaKuartu');

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
                	<label for="idtpm">Id Kuartu</label>
                    <input type="text" name="id_kuartu" class="form-control" id="idtpm" readonly value="<?= uniqueId('ROOM-', 'kuartus'); ?>">

                  <div class="form-group">
                    <label for="tpm">Nu Kuartu</label>
                    <input type="text" name="nu_kuartu" class="form-control" id="tpm" placeholder="Numeru Kuartu..">
                  </div>
                  <div class="form-group">
                    <label for="tpm">Tipu Kuartu</label>
                    <input type="text" name="tipu_kuartu" class="form-control" id="tpm" placeholder="Tipu Kuartu..">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="aumenta" class="btn btn-primary btn-xs">Rai Dadus</button>
                  <button type="reset" name="reset" class="btn btn-warning btn-xs">Reset</button>
                  <a href="?page=kuartu" class="btn btn-success btn-xs">Fila</a>
                </div>
              </form>
            </div>
            <!-- /.card -->


          </div>