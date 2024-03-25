	<div class="card">
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped table-sm">
              	<a href="?page=aumentaUser" class="btn btn-primary btn-xs my-2">Aumenta Dadus</a>
                <thead>
                <tr>
                  <th>No</th>
                  <th>Naran</th>
                  <th>Username</th>
                  <th>Level</th>
                  <th>Foto</th>
                  <th>Aksaun</th>
                </tr>
                </thead>
                <tbody>
                	<?php 
						$query = mq("SELECT * FROM users");
						$no = 1;
						while ($data = mfa($query)) {
							?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $data['nrn_user'] ?></td>
                  <td><?= $data['username'] ?></td>
                  <td><?= $data['level'] ?></td>
                  <td><img width="40px" src="imgUser/<?= $data['foto'] ?>"></td>
                  <td>
                  	<a href="?page=hadiaUser&id=<?= $data['id_user'] ?>" class="btn btn-primary btn-xs">Hadia</a>
                  	<a onclick="return confirm('Tebes atu hamos <?= $data['nrn_user'] ?>')" href="?page=hamosUser&id=<?= $data['id_user'] ?>" class="btn btn-danger btn-xs">Hamos</a>
                  </td>
                </tr>
	            <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>