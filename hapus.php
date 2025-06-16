<?php
    include 'koneksi.php';

    $id=$_GET['CUST_CODE'];
        
        $query = "DELETE FROM customer WHERE CUST_CODE = '$id'";

        if (mysqli_query($koneksi, $query)){
            header("Location: tampilan.php");
        } else {
            echo "gagal delete data";
        }
    
?>