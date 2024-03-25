<?php 
	$id = $_GET['id'];
	mq("DELETE FROM postus WHERE id_postu = '$id' ");
	alert('hamos', 'postu', 'postu');
 ?>