<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>
    <form method="POST" action="">
        <p>NPM</p>
        <input type="number" name="npm">

        <p>NAMA</p>
        <input type="text" name="nama">

        <p>JURUSAN</p>
        <select name="jurusan">
            <option value="sistem informasi">SISTEM INFORMASI</option>
            <option value="informatika">INFORMATIKA</option>
            <option value="teknologi informasi">TEKNOLOGI INFORMASI</option>
        </select><br><br>
        
        <button><a href="index.php">BATAL</a></button>
        <input type="submit" name="btn_tambah" value="TAMBAH">

    </form>

    <!--PHP INSERT-->
    <?php
        include "connection.php";
        if(isset($_POST['btn_tambah'])){
            $npm = $_POST['npm'];
            $nama = $_POST['nama'];
            $jurusan = $_POST['jurusan'];

            $sql = "insert into data_mahasiswa values('$npm','$nama','$jurusan')";
            $connection->query($sql);

            if($connection->query($sql) === TRUE){
                echo "data berhasil di tambahkan";
                header("location:index.php");
            }else{
                echo "gagal menambahkan data ".$connection->error;
                header("location:index.php");
            }
        }
    ?>


</body>
</html>