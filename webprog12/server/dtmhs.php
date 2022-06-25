<?php
include_once("dbkoneksi.php");
   $sql = "SELECT nim, nama, jurusan, JK, TGLLAHIR FROM mhs";
   $hsl = mysqli_query($cnn, $sql);
   $output = mysqli_fetch_all($hsl);
   echo json_encode($output);