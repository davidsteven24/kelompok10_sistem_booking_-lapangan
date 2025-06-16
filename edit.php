<?php
    include 'koneksi.php';

    $id = $_GET['CUST_NAME'];
    $query = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE CUST_NAME= '$id'");
    $data = mysqli_fetch_array($query);

?>
<h2>update data customer</h2>
<hr>
<form action="" method="post">
<table>
    <tr>
        <td>nama</td>
        <td>:</td>
        <td><input type="text" name="nama" value="<?php echo $data['nama']?>"></td>
    </tr>
    <tr>
        <td>email</td>
        <td>:</td>
        <td><input type="text" name="email" value="<?php echo $data['email']?>"></td>
    </tr>
    <tr>
        <td>password</td>
        <td>:</td>
        <td><input type="text" name="password" value="<?php $data['password']?>"></td>
    </tr>
    <tr>
        <td colspan="3" align="center">
            <input type="submit" name="update" value="update_data">
        </td>
    </tr>
</table>
</form>

<?php
    if (isset($_POST['update'])){
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $password = MD5($_POST['password']);

        $query = "UPDATE customer SET nama= '$nama', 
        email='$email', password= '$password' WHERE CUST_CODE = '$id'";

        if (mysqli_query($koneksi, $query)){
            header("Location: tampilan.php");
        } else {
            echo "gagal update data";
        }
    }
?>