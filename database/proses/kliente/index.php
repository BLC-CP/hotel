	<div class="card">
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped table-sm">
              	<a href="?page=aumentaKliente" class="btn btn-primary btn-xs my-2">Aumenta Dadus</a>
                <thead>
                <tr>
                  <th>No</th>
                  <th>Naran</th>
                  <th>Nasaun</th>
                  <th>Munisipiu</th>
                  <th>Hela Fatin</th>
                  <th>Kuartu</th>
                  <th>Data Checking</th>
                  <th>Data Checkout</th>
                  <th>Aksaun</th>
                </tr>
                </thead>
                <tbody>
                	<?php 
						$query = mq("SELECT * FROM klientes, aldeias, sukus, postus, munisipius, nasauns, kuartus WHERE 

              klientes.id_aldeia=aldeias.id_aldeia AND 
              aldeias.id_suku=sukus.id_suku AND 
              sukus.id_postu=postus.id_postu AND 
              postus.id_munisipiu=munisipius.id_munisipiu AND 
              munisipius.id_nasaun=nasauns.id_nasaun AND 
              klientes.id_kuartu=kuartus.id_kuartu

              ");
						$no = 1;
						while ($data = mfa($query)) {
							?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $data['nrn_kliente'] ?></td>
                  <td><?= $data['nrn_nasaun'] ?></td>
                  <td><?= $data['nrn_munisipiu'] ?></td>
                  <td><?= $data['hela_fatin'] ?></td>
                  <td><?= $data['tipu_kuartu'] ?> - <?= $data['nu_kuartu'] ?></td>
                  <td><?= $data['data_checking'] ?></td>
                  <td><?= $data['data_checkout'] ?></td>
                  <td>
                  	<a href="?page=hadiaKliente&id=<?= $data['id_kliente'] ?>" class="btn btn-primary btn-xs">Hadia</a>
                  	<a onclick="return confirm('Tebes atu hamos <?= $data['nrn_kliente'] ?>')" href="?page=hamosKliente&id=<?= $data['id_kliente'] ?>" class="btn btn-danger btn-xs">Hamos</a>
                  </td>
                </tr>
	            <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>