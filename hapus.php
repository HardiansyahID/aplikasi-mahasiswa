<?php

include "connection.php";
$npm = $_GET['npm'];
$sql = "delete from data_mahasiswa where npm='$npm'";
mysqli_query($connection,$sql);
header("location:index.php");

        /**
         * PROGRAMMED AND DESIGNED BY HARDIANSYAH
         * 
         * contact :
         * hardiansyahmail@gmail.com
         * instagram.com/hardiansyah.id
         * 
         * bantu subscribe youtube saya
         * https://www.youtube.com/channel/UCPpOIF8GzvRK5IWaWiqls_g?view_as=subscriber
         */
