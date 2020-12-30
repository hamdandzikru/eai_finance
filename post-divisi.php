<?php
include "conn.php";
	
	$id_divisi = isset($_POST["id_divisi"]) ? $_POST["id_divisi"] : "";
	echo $id_divisi;

	$nama_divisi = isset($_POST["nama_divisi"]) ? $_POST["nama_divisi"] : "";
    echo $nama_divisi;
    

	$sql = "INSERT INTO `divisi` (`id_divisi`, `nama_divisi`) 
	VALUES ('".$id_divisi."', '".$nama_divisi."');";

	echo $sql;
	
	//query
	$query = mysqli_query($con, $sql);
	if($query){
		$msg = "Succesfully saved data!";
	}else{
		$msg = "Failed to save the data!";
	}

	// echo $msg;

	$response = array(
		'status' => 'OK',
		'msg' => $msg
	);

	echo json_encode($response);
?>