<?php
	include '../conn.php';
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$sql=$conn->query("select * from my_pokemon where id=$id");
	}
	else{
		$sql=$conn->query('select * from my_pokemon');
	}
	$result=array();
	
	while ($data=$sql->fetch_assoc()){
		$result[] = $data;
	}
	echo json_encode($result);
	
	mysqli_close($conn);
?>