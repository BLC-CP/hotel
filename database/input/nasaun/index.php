	<div class="card">
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped table-sm">
              	<a href="?page=aumentaNasaun" class="btn btn-primary btn-xs my-2">Aumenta Dadus</a>
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nasaun</th>
                  <th>Aksaun</th>
                </tr>
                </thead>
                <tbody>
                	<?php 
						$query = mq("SELECT * FROM nasauns");
						$no = 1;
						while ($data = mfa($query)) {
							?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $data['nrn_nasaun'] ?></td>
                  <td>
                  	<a href="?page=hadiaNasaun&id=<?= $data['id_nasaun'] ?>" class="btn btn-primary btn-xs">Hadia</a>
                  	<a onclick="return confirm('Tebes atu hamos <?= $data['nrn_nasaun'] ?>')" href="?page=hamosNasaun&id=<?= $data['id_nasaun'] ?>" class="btn btn-danger btn-xs">Hamos</a>
                  </td>
                </tr>
	            <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>