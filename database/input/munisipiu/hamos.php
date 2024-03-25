<?php 
	$id = $_GET['id'];
	mq("DELETE FROM munisipius WHERE id_munisipiu = '$id' ");
	alert('hamos', 'munisipiu', 'munisipiu');
 ?>