<?php
include "session.php";
include "koneksi.php";
?>

<p align="center">

    Hi, welcome! <b> <?php echo $_SESSION['username']; ?> </b> <br>
    Silakan <a href="logout.php"> <b> Logout </b> </a> untuk keluar dari aplikasi.

</p>