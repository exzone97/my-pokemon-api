<?php
	include '../conn.php';
	$id = $_GET['id'];
	
	$sql = $conn->query("DELETE FROM MY_POKEMON WHERE id=$id");
	
	$result = "";
	
	if($sql === True){
		$result = "Delete Success";
	}
	else{
		$result="Error:".$sql.$conn->error;
	}
	echo json_encode($result);
	
	mysqli_close($conn);	
?>