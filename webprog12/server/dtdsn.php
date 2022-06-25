<?php
include_once("dbkoneksi.php");
   $sql = "SELECT NIP, NAMA, TELP, EMAIL FROM dsn";
   $hsl = mysqli_query($cnn, $sql);
   $output = mysqli_fetch_all($hsl);
   echo json_encode($output);