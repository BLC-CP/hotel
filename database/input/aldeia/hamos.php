<?php 
	$id = $_GET['id'];
	mq("DELETE FROM aldeias WHERE id_aldeia = '$id' ");
	alert('hamos', 'aldeia', 'aldeia');
 ?>