<?php 
	$id = $_GET['id'];
	mq("DELETE FROM kuartus WHERE id_kuartu = '$id' ");
	alert('hamos', 'kuartu', 'kuartu');
 ?>