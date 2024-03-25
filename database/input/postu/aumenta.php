<?php 

	if(isset($_POST['aumenta'])){

		$id_postu = $_POST['id_postu'];
		$nrn_postu = $_POST['nrn_postu'];
    $id_munisipiu = $_POST['id_munisipiu'];

		$insert = mq("INSERT INTO postus VALUES('$id_postu', '$nrn_postu', '$id_munisipiu')");

		alert('aumenta', 'postu', 'aumentaPostu');

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
                	<label for="idtpm">Id Postu</label>
                    <input type="text" name="id_postu" class="form-control" id="idtpm" readonly value="<?= uniqueId('POSTU-', 'postus'); ?>">

                  <div class="form-group">
                    <label for="tpm">Postu</label>
                    <input type="text" name="nrn_postu" class="form-control" id="tpm" placeholder="Postu..">
                  </div>
                  <div class="form-group">
                    <label for="tpm">Munisipiu</label>
                    <select class="form-control"  name="id_munisipiu">
                      <option>Hili Munisipiu</option>
                        <?php 
                        $query = mq("SELECT * FROM munisipius");
                        $no = 1;
                        while ($data = mfa($query)) {
                          ?>
                      <option value="<?= $data['id_munisipiu'] ?>"><?= $data['nrn_munisipiu'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>

                <div class="card-footer">
                  <button type="submit" name="aumenta" class="btn btn-primary btn-xs">Rai Dadus</button>
                  <button type="reset" name="reset" class="btn btn-warning btn-xs">Reset</button>
                  <a href="?page=postu" class="btn btn-success btn-xs">Fila</a>
                </div>
              </form>
            </div>
            <!-- /.card -->


          </div>