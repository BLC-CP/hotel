<?php 
	$id = $_GET['id'];
	mq("DELETE FROM sukus WHERE id_suku = '$id' ");
	alert('hamos', 'suku', 'suku');
 ?>