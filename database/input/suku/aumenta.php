<?php 

	if(isset($_POST['aumenta'])){

		$id_suku = $_POST['id_suku'];
		$nrn_suku = $_POST['nrn_suku'];
    $id_postu = $_POST['id_postu'];

		$insert = mq("INSERT INTO sukus VALUES('$id_suku', '$nrn_suku', '$id_postu')");

		alert('aumenta', 'suku', 'aumentaSuku');

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
                	<label for="idtpm">Id Suku</label>
                    <input type="text" name="id_suku" class="form-control" id="idtpm" readonly value="<?= uniqueId('SUKU-', 'sukus'); ?>">

                  <div class="form-group">
                    <label for="tpm">Suku</label>
                    <input type="text" name="nrn_suku" class="form-control" id="tpm" placeholder="Suku..">
                  </div>
                  <div class="form-group">
                    <label for="tpm">Postu</label>
                    <select class="form-control"  name="id_postu">
                      <option>Hili Postu</option>
                        <?php 
                        $query = mq("SELECT * FROM postus");
                        $no = 1;
                        while ($data = mfa($query)) {
                          ?>
                      <option value="<?= $data['id_postu'] ?>"><?= $data['nrn_postu'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>

                <div class="card-footer">
                  <button type="submit" name="aumenta" class="btn btn-primary btn-xs">Rai Dadus</button>
                  <button type="reset" name="reset" class="btn btn-warning btn-xs">Reset</button>
                  <a href="?page=suku" class="btn btn-success btn-xs">Fila</a>
                </div>
              </form>
            </div>
            <!-- /.card -->


          </div>