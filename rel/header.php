	<?php $no = 1; ?>
	<style>
		table {
			border-collapse: collapse;
			margin: 2px 0;
			font-size: 0.9em;
			font-family: sans-serif;
			min-width: 400px;
			box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
		}
		h2{color:blue;
			margin:-4px;
		}

		<?php 
		date_default_timezone_set("Asia/Dili");
		$d_registu = date("d-m-Y");
		?>
		img.ms {
			width: 100px;
			margin-left: 150px;
			position: absolute;
			margin-top: 20px;
		}

		img.rdtl {
			width: 50px;
			margin-top: 30px;
			position: absolute;
			right: 180px;
		}
	</style>
	<br><br>
	<h2 style="text-align:center; color: green;">RELATORIU DADUS HOTEL RESORT MALIANA</h2> 
	<hr>
	<script>
		function printContent(el){
			var restorepage = document.body.innerHTML;
			var printcontent = document.getElementById(el).innerHTML;
			document.body.innerHTML = printcontent;
			window.print();
			document.body.innerHTML = restorepage;
		}
	</script>	 