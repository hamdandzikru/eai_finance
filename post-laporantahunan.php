<?php
include "conn.php";
	
	$id_laporantahun = isset($_POST["id_laporantahun"]) ? $_POST["id_laporantahun"] : "";
	echo $id_laporantahun;

	$id_laporanbulan = isset($_POST["id_laporanbulan"]) ? $_POST["id_laporanbulan"] : "";
	echo $id_laporanbulan;

	$tahun = isset($_POST["tahun"]) ? $_POST["tahun"] : "";
	echo $tahun;

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