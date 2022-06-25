<?php
    include_once("dbkoneksi.php");
    
    $r["sukses"]=false;
    if(isset($_POST["kodemk"])){
        $KODEMK=$_POST["kodemk"];
        $NAMAMK=$_POST["namamk"];
        $SKS=$_POST["sks"];
       
        $sql = "UPDATE matkul SET 
            NAMAMK='".$NAMAMK."',
            SKS='".$SKS."',
            WHERE KODEMK='".$KODEMK."'";
        
        mysqli_query($cnn, $sql);
        $r["sukses"]= true;
    }
    echo json_encode($r);