	<div class="card">
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped table-sm">
              	<a href="?page=aumentaAldeia" class="btn btn-primary btn-xs my-2">Aumenta Dadus</a>
                <thead>
                <tr>
                  <th>No</th>
                  <th>Aldeia</th>
                  <th>Suku</th>
                  <th>Postu</th>
                  <th>Munisipiu</th>
                  <th>Aksaun</th>
                </tr>
                </thead>
                <tbody>
                <?php 
						$query = mq("SELECT * FROM aldeias, sukus, postus, munisipius WHERE 
              aldeias.id_suku=sukus.id_suku AND
              sukus.id_postu=postus.id_postu AND
              postus.id_munisipiu=munisipius.id_munisipiu
              ");
						$no = 1;
						while ($data = mfa($query)) {
							?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $data['nrn_aldeia'] ?></td>
                  <td><?= $data['nrn_suku'] ?></td>
                  <td><?= $data['nrn_postu'] ?></td>
                  <td><?= $data['nrn_munisipiu'] ?></td>
                  <td>
                  	<a href="?page=hadiaAldeia&id=<?= $data['id_aldeia'] ?>" class="btn btn-primary btn-xs">Hadia</a>
                  	<a onclick="return confirm('Tebes atu hamos <?= $data['nrn_aldeia'] ?>')" href="?page=hamosAldeia&id=<?= $data['id_aldeia'] ?>" class="btn btn-danger btn-xs">Hamos</a>
                  </td>
                </tr>
	            <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>