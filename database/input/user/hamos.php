<?php 
	$id = $_GET['id'];
	mq("DELETE FROM users WHERE id_user = '$id' ");
	alert('hamos', 'user', 'user');
 ?>