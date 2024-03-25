	<div class="card">
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped table-sm">
              	<a href="?page=aumentaSuku" class="btn btn-primary btn-xs my-2">Aumenta Dadus</a>
                <thead>
                <tr>
                  <th>No</th>
                  <th>Suku</th>
                  <th>Postu</th>
                  <th>Munisipiu</th>
                  <th>Aksaun</th>
                </tr>
                </thead>
                <tbody>
                <?php 
						$query = mq("SELECT * FROM sukus, postus, munisipius WHERE 
              sukus.id_postu=postus.id_postu AND
              postus.id_munisipiu=munisipius.id_munisipiu
              ");
						$no = 1;
						while ($data = mfa($query)) {
							?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $data['nrn_suku'] ?></td>
                  <td><?= $data['nrn_postu'] ?></td>
                  <td><?= $data['nrn_munisipiu'] ?></td>
                  <td>
                  	<a href="?page=hadiaSuku&id=<?= $data['id_suku'] ?>" class="btn btn-primary btn-xs">Hadia</a>
                  	<a onclick="return confirm('Tebes atu hamos <?= $data['nrn_suku'] ?>')" href="?page=hamosSuku&id=<?= $data['id_suku'] ?>" class="btn btn-danger btn-xs">Hamos</a>
                  </td>
                </tr>
	            <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>