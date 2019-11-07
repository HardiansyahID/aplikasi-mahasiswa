<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplikasi Mahasiswa</title>
</head>
<body>
    <h1>Selamat Datang di Aplikasi Mahasiswa</h1>
    <?php
        include "connection.php";
        $sql = "select * from data_mahasiswa";
        $datamhs = $connection->query($sql);

        /**
         * PROGRAMMED AND DESIGNED BY HARDIANSYAH
         * 
         * contact :
         * hardiansyahmail@gmail.com
         * instagram.com/hardiansyah.id
         * 
         * bantu subscribe youtube saya :
         * https://www.youtube.com/channel/UCPpOIF8GzvRK5IWaWiqls_g?view_as=subscriber
         */
    ?>
    <table border="1">
        <tr>
            <th>NPM</th>
            <th>NAMA</th>
            <th>JURUSAN</th>
            <th>ACTION</th>
        </tr>
    <?php foreach($datamhs as $data):?>
        <tr>
            <td><?= $data['npm'];?></td>
            <td><?= $data['nama'];?></td>
            <td><?= $data['jurusan'];?></td>
            <td>
                <button><a href="edit.php?npm=<?= $data['npm'];?>">EDIT</a></button>
                <a onclick="confirm('apakah anda yakin ingin menghapus mahasiswa terpilih ?');" href="hapus.php?npm=<?= $data['npm'];?>">X</a>
            </td>
        </tr>
    <?php endforeach;?>
    </table>

    <br>
    <br>
    <button><a href="tambah.php">TAMBAH</a></button>
    <button><a href="https://qtxpjlq4ex4vdcuw0ombaw-on.drv.tw/www.hardiansyah.xyz/">SUBSCRIBE</a></button>
</body>
</html>