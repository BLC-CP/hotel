

<?php

$conn = new mysqli("localhost","root","","hotel");
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 

?> 
<button class="btn" onclick="printContent('div1')" style="cursor:pointer;">EMPRIME</button>
<hr>
<div id="div1">
	<?php include'header.php'; ?>
	<table width="100%" border="1">
		
		<tbody>
			<?php
			
			$id_aldeia = $_POST['id_aldeia'];
			$a=$conn->query("select * FROM aldeias where id_aldeia like '$id_aldeia' LIMIT 1");
			while($r=$a->fetch_array()){
				
				?>
				<tr>
					
					<td>
						Dadus husi <b><?php echo $r['nrn_aldeia']; ?></b> nian.
					</td>
					
				</tr>
			<?php } ?>
		</tbody>
		
	</table>
	<br>
	
	<table width="100%" border="1">
		<thead>
			<tr bgcolor="success">
				<th>No</th>
				  <th>Naran</th>
                  <th>Nasaun</th>
                  <th>Munisipiu</th>
                  <th>Postu</th>
                  <th>Suku</th>
                  <th>Aldeia</th>
                  <th>Hela Fatin</th>
                  <th>Kuartu</th>
                  <th>Data Checking</th>
                  <th>Data Checkout</th>
			</tr>
		</thead>
		<tbody>

			<?php 
			$id_aldeia = $_POST['id_aldeia'];
			$a=$conn->query("SELECT * FROM klientes, aldeias, sukus, postus, munisipius, nasauns, kuartus WHERE 

			              klientes.id_aldeia=aldeias.id_aldeia AND 
			              aldeias.id_suku=sukus.id_suku AND 
			              sukus.id_postu=postus.id_postu AND 
			              postus.id_munisipiu=munisipius.id_munisipiu AND 
			              munisipius.id_nasaun=nasauns.id_nasaun AND 
			              klientes.id_kuartu=kuartus.id_kuartu AND
				aldeias.id_aldeia like '$id_aldeia'
				");
			while($r=$a->fetch_array()){
				?>

				<tr>
					<td><?= $no++ ?></td>
		                  <td><?= $r['nrn_kliente'] ?></td>
		                  <td><?= $r['nrn_nasaun'] ?></td>
		                  <td><?= $r['nrn_munisipiu'] ?></td>
		                  <td><?= $r['nrn_postu'] ?></td>
		                  <td><?= $r['nrn_suku'] ?></td>
		                  <td><?= $r['nrn_aldeia'] ?></td>
		                  <td><?= $r['hela_fatin'] ?></td>
		                  <td><?= $r['tipu_kuartu'] ?> - <?= $r['nu_kuartu'] ?></td>
		                  <td><?= $r['data_checking'] ?></td>
		                  <td><?= $r['data_checkout'] ?></td>
				</tr>
			<?php } ?>
		</tbody>
		
	</table><br>
<div class="assinatura" style="text-align:center; width:15%; margin: auto;">
			<p>Data : <?= $d_registu; ?></p> <br>
			<hr>
			<p>Dr. Beny Da Costa</p>
		</div>
</div>