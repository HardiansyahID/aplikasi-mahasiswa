<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ubah Data</title>
</head>
<body>
    
    <!--PHP MENGAMBIL DATA TERPILIH-->
    <?php
        include "connection.php";
        $npm = $_GET['npm'];
        $sql = "select * from data_mahasiswa where npm='$npm'";
        $data = $connection->query($sql);

        foreach($data as $data):
    ?>
    <h1>Ubah Data</h1>
    <form method="POST" action="">
        <p>NPM</p>
        <input type="number" name="npm" value="<?= $data['npm'];?>">

        <p>NAMA</p>
        <input type="text" name="nama" value="<?= $data['nama'];?>">

        <p>JURUSAN</p>
        <select name="jurusan">
            <option selected><?= $data['jurusan'];?></option>
            <option value="sistem informasi">SISTEM INFORMASI</option>
            <option value="informatika">INFORMATIKA</option>
            <option value="teknologi informasi">TEKNOLOGI INFORMASI</option>
        </select><br><br>
        
        <button><a href="index.php">BATAL</a></button>
        <input type="submit" name="ubah" value="UBAH">
    </form>

    <!--PHP UPDATE-->
    <?php
    endforeach;

        include "connection.php";
        if(isset($_POST['ubah'])){
            $npm = $_POST['npm'];
            $nama = $_POST['nama'];
            $jurusan = $_POST['jurusan'];

            $sql = "update data_mahasiswa set npm='$npm', nama='$nama',jurusan='$jurusan' where npm='$npm'";
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