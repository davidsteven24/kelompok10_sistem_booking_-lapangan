<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "projek1tib";

    $koneksi = new mysqli($hostname,$username,$password,$database);

    if ($koneksi ->connect_error){
        die("koneksi gagal");
    } else {
        echo "koneksi berhasil";
    }
?>    
</center>
</body>
</html>