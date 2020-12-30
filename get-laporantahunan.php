<?php

    include "conn.php";

    $sql = "SELECT * FROM laporan_tahunan";
    $query = mysqli_query($con, $sql);
    while($data = mysqli_fetch_array($query)){
        // echo $data["id_laporanbulan"]." ";

        $item[] = array(
            'id_laporantahunan'=>$data["id_laporantahun"],
            'id_laporanbulanan'=>$data["id_laporanbulan"],
            'tahun'=>$data["tahun"],
            'totaltransaksi'=>$data["totaltransaksi"],
            'income'=>$data["income"],
            'outcome'=>$data["outcome"],
            'evaluasi'=>$data["evaluasi"]
        );
    }

    $response = array(
        'status'=>'OK',
        'data'=>$item
    );

    echo json_encode($response);

?>