<?php
	include '../conn.php';
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$sql=$conn->query("select *, count(*) as cnt from my_pokemon where pokemon_id='$id' GROUP BY(pokemon_id)");
	}
	else{
		$sql=$conn->query('select *, count(*) from my_pokemon GROUP BY(pokemon_id)');
	}
	
	$result=array();
	
	while ($data=$sql->fetch_assoc()){
		$result[] = $data;
	}
	echo json_encode($result);
	
	mysqli_close($conn);
?>