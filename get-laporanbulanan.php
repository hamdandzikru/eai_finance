<?php

    include "conn.php";

    $sql = "SELECT * FROM laporan_bulanan";
    $query = mysqli_query($con, $sql);
    while($data = mysqli_fetch_array($query)){
        echo $data["id_laporanbulan"]." ";
    }

?>