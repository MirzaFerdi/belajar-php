<?php
    require "../koneksi.php";

    $show = "SELECT * FROM pos_shop";
    $query = mysqli_query($koneksi, $show);

    
?>