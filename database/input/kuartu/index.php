	<div class="card">
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped table-sm">
              	<a href="?page=aumentaKuartu" class="btn btn-primary btn-xs my-2">Aumenta Dadus</a>
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nu. Kuartu</th>
                  <th>Tipu Kuartu</th>
                  <th>Aksaun</th>
                </tr>
                </thead>
                <tbody>
                	<?php 
						$query = mq("SELECT * FROM kuartus");
						$no = 1;
						while ($data = mfa($query)) {
							?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $data['nu_kuartu'] ?></td>
                  <td><?= $data['tipu_kuartu'] ?></td>
                  <td>
                  	<a href="?page=hadiaKuartu&id=<?= $data['id_kuartu'] ?>" class="btn btn-primary btn-xs">Hadia</a>
                  	<a onclick="return confirm('Tebes atu hamos <?= $data['nu_kuartu'] ?>')" href="?page=hamosKuartu&id=<?= $data['id_kuartu'] ?>" class="btn btn-danger btn-xs">Hamos</a>
                  </td>
                </tr>
	            <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>