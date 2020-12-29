<?php

    include "conn.php";

    $sql = "SELECT * FROM laporan_bulanan";
    $query = mysqli_query($con, $sql);
    while($data = mysqli_fetch_array($query)){
        // echo $data["id_laporanbulan"]." ";

        $item[] = array(
            'id_laporanbulanan'=>$data["id_laporanbulan"],
            'id_divisi'=>$data["id_divisi"],
            'bulan'=>$data["bulan"],
            'totaltransaksi'=>$data["totaltransaksi"],
            'income'=>$data["income"],
            'outcome'=>$data["outcome"]
        )
    }

?>