<?php
    include 'koneksi.php';
?>

<h2>Tambah customer</h2>
<hr>
<form action="" method="post">
<table>
    <tr>
        <td>nama</td>
        <td>:</td>
        <td><input type="text" name="nama"></td>
    </tr>
    <tr>
        <td>Email</td>
        <td>:</td>
        <td><input type="text" name="email"></td>
    </tr>
    <tr>
        <td>password</td>
        <td>:</td>
        <td><input type="password" name="password"></td>
    </tr>
    <tr>
        <td colspan="3" align="center">
            <input type="submit" name="tambah">
        </td>
    </tr>
</table>
</form>

<?php
    if (isset($_POST['tambah'])){
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $password = MD5($_POST['password']);

        $query = "INSERT INTO customer(nama, email, password)
        VALUES ('$nama','$email','$password')";

        if (mysqli_query($koneksi, $query)){
            header("Location:tampilan.php");
        } else {
            echo "gagal manambahkan data";
        }
    }
?>