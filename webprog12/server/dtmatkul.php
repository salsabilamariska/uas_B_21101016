<?php
include_once("dbkoneksi.php");
   $sql = "SELECT KODEMK, NAMAMK, SKS FROM matkul";
   $hsl = mysqli_query($cnn, $sql);
   $output = mysqli_fetch_all($hsl);
   echo json_encode($output);