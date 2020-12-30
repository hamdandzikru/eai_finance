<?php

    include "conn.php";

    $sql = "SELECT * FROM divisi";
    $query = mysqli_query($con, $sql);
    while($data = mysqli_fetch_array($query)){
        // echo $data["id_laporanbulan"]." ";

        $item[] = array(
            'id_divisi'=>$data["id_divisi"],
            'nama_divisi'=>$data["nama_divisi"]
        );
    }

    $response = array(
        'status'=>'OK',
        'data'=>$item
    );

    echo json_encode($response);

?>