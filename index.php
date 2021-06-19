<?php
    require 'functions.php';
    $siswa = query("SELECT * from datasiswa");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD fikri</title>
</head>
<body>
    <h1>daftar siswa SMK pesat</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>foto</th>
            <th>NIS</th>
            <th>nama</th>
            <th>email</th>
            <th>jurusan</th>
            <th>aksi</th>
        </tr>
        <?php $nomor = 1; ?>
        <?php foreach($siswa as $baris) : ?>
        <tr>
            <td><?= $nomor?></td>
            <td><?=$baris["gambar"]?></td>
            <td><?=$baris["nis"]?></td>
            <td><?=$baris["nama"]?></td>
            <td><?=$baris["email"]?></td>
            <td><?=$baris["jurusan"]?></td>
            <td>
                <a href="#">ubah</a>
                <a href="#">hapus</a>
            </td>
        </tr>
        <?php $nomor++?>
        <?php endforeach;?>
    </table>
</body>
</html> 