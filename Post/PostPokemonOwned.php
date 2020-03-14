<?php
	include '../conn.php';
	$_POST = json_decode(file_get_contents("php://input"),true);
	$pokemon_id = $_POST['pokemon_id'];
	$nickname = $_POST['nickname'];
	if($pokemon_id != "" and $nickname !=""){
		$sql=$conn->query("insert into my_pokemon (pokemon_id, nickname, is_active) value ('$pokemon_id', '$nickname', 0)");
		$result = "";
	}
	if ($sql === True){
		$result="success";
	}
	else{
		$result="Error:".$sql.$conn->error;
	}

	echo json_encode($result);
	
	mysqli_close($conn);
?>