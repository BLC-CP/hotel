<?php 

	if(isset($_POST['aumenta'])){

		$id_munisipiu = $_POST['id_munisipiu'];
		$nrn_munisipiu = $_POST['nrn_munisipiu'];
    $id_nasaun = $_POST['id_nasaun'];

		$insert = mq("INSERT INTO munisipius VALUES('$id_munisipiu', '$nrn_munisipiu', '$id_nasaun')");

		alert('aumenta', 'munisipiu', 'aumentaMunisipiu');

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
                	<label for="idtpm">Id Munisipiu</label>
                    <input type="text" name="id_munisipiu" class="form-control" id="idtpm" readonly value="<?= uniqueId('MUN-', 'munisipius'); ?>">

                  <div class="form-group">
                    <label for="tpm">Munisipiu</label>
                    <input type="text" name="nrn_munisipiu" class="form-control" id="tpm" placeholder="Munisipiu..">
                  </div>
                  <div class="form-group">
                    <label for="nsn">Nasaun</label>
                    <select class="form-control"  name="id_nasaun">
                      <option>Hili Nasaun</option>
                        <?php 
                        $query = mq("SELECT * FROM nasauns");
                        $no = 1;
                        while ($data = mfa($query)) {
                          ?>
                      <option value="<?= $data['id_nasaun'] ?>"><?= $data['nrn_nasaun'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>

                

                <div class="card-footer">
                  <button type="submit" name="aumenta" class="btn btn-primary btn-xs">Rai Dadus</button>
                  <button type="reset" name="reset" class="btn btn-warning btn-xs">Reset</button>
                  <a href="?page=munisipiu" class="btn btn-success btn-xs">Fila</a>
                </div>
              </form>
            </div>
            <!-- /.card -->


          </div>