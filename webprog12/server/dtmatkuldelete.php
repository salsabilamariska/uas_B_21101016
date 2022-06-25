<?php
    include_once("dbkoneksi.php");
    
    $r["sukses"]=false;
    if(isset($_POST["kodemk"])){
        $KODEMK=$_POST["kodemk"];
        
        $sql = "DELETE FROM matkul WHERE KODEMK='".$kodemk."'";
        
        mysqli_query($cnn, $sql);
        $r["sukses"]= true;
    }
    echo json_encode($r);