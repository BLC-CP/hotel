	<div class="card">
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped table-sm">
              	<a href="?page=aumentaMunisipiu" class="btn btn-primary btn-xs my-2">Aumenta Dadus</a>
                <thead>
                <tr>
                  <th>No</th>
                  <th>Munisipiu</th>
                  <th>Nasaun</th>
                  <th>Aksaun</th>
                </tr>
                </thead>
                <tbody>
                	<?php 
						$query = mq("SELECT * FROM munisipius, nasauns WHERE munisipius.id_nasaun=nasauns.id_nasaun");
						$no = 1;
						while ($data = mfa($query)) {
							?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $data['nrn_munisipiu'] ?></td>
                  <td><?= $data['id_nasaun'] ?></td>
                  <td>
                  	<a href="?page=hadiaMunisipiu&id=<?= $data['id_munisipiu'] ?>" class="btn btn-primary btn-xs">Hadia</a>
                  	<a onclick="return confirm('Tebes atu hamos <?= $data['nrn_munisipiu'] ?>')" href="?page=hamosMunisipiu&id=<?= $data['id_munisipiu'] ?>" class="btn btn-danger btn-xs">Hamos</a>
                  </td>
                </tr>
	            <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>