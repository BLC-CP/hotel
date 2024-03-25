<?php 
	$id = $_GET['id'];
	mq("DELETE FROM nasauns WHERE id_nasaun = '$id' ");
	alert('hamos', 'nasaun', 'nasaun');
 ?>