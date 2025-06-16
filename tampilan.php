<?php
    include 'koneksi.php'
?>
<h2>Daftar customer</h2>
<a href="tambah.php"> Tambah customer</a>
<hr>

<table border="1">
    <tr>
        <th>NO. </th>
        <th>Nama</th>
        <th>email</th>
        <th>aksi</th>
    </tr>

    <?php
        $no = 1;
        $query = mysqli_query($koneksi,"SELECT * FROM customer");
        while ($data = mysqli_fetch_array($query)) {
    ?>

    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $data ['nama'] ?></td>
        <td><?php echo $data ['email'] ?></td>
        <td> <a href= "edit.php?id= <?php echo $data['CUST_CODE']?>">EDIT</a></td>
        <td> <a href= "hapus.php?id= <?php echo $data['CUST_CODE']?>" onclick ="return confirm('yakin ingin menghapus?')">HAPUS</a></td>
    </tr>
<?php } ?>
</table>