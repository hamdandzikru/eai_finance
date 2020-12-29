<?php
    // $servername='localhost';
    // $username='root';
    // $password='';
    // $dbname = "finance";
    // $conn=mysqli_connect($servername,$username,$password,"$dbname");
    //   if(!$conn){
    //       die('Could not Connect MySql Server:' .mysql_error());
    //     }

    $con = mysqli_connect("localhost","root","","finance");
    if($con){
      echo "DB Connected";
    }
?>