<?php
include "conn.php";
	
	$id_laporanbulan = isset($_POST["id_laporanbulan"]) ? $_POST["id_laporanbulan"] : "";
	echo $id_laporanbulan;

	$id_divisi = isset($_POST["id_divisi"]) ? $_POST["id_divisi"] : "";
	echo $id_divisi;

	$bulan = isset($_POST["bulan"]) ? $_POST["bulan"] : "";
	echo $bulan;

	$totaltransaksi = isset($_POST["totaltransaksi"]) ? $_POST["totaltransaksi"] : "";
	echo $totaltransaksi;

	$income = isset($_POST["income"]) ? $_POST["income"] : "";
	echo $income;

	$outcome = isset($_POST["outcome"]) ? $_POST["outcome"] : "";
	echo $outcome;

	$deskripsi = isset($_POST["deskripsi"]) ? $_POST["deskripsi"] : "";
	echo $deskripsi;

	$sql = "INSERT INTO `laporan_bulanan` (`id_laporanbulan`, `id_divisi`, `bulan`, `totaltransaksi`, `income`, `outcome`, `deskripsi`) 
	VALUES ('".$id_laporanbulan."', '".$id_divisi."', '".$bulan."', '".$totaltransaksi."', '".$income."', '".$outcome."', '".$deskripsi."');";

	echo $sql;
// $sql = "INSERT INTO `laporan_bulanan` (`id_laporanbulan`, `id_divisi`, `bulan`, `totaltransaksi`, `income`, `outcome`) 
// VALUES ('11987', '028', 'April', '298', '32000000', '11000000');";
	
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