<?php 
	$id = $_GET['id'];
	mq("DELETE FROM klientes WHERE id_kliente = '$id' ");
	alert('hamos', 'kliente', 'kliente');
 ?>