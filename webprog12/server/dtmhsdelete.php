<?php
    include_once("dbkoneksi.php");
    
    $r["sukses"]=false;
    if(isset($_POST["nim"])){
        $nim=$_POST["nim"];
        
        $sql = "DELETE FROM mhs WHERE nim='".$nim."'";
        
        mysqli_query($cnn, $sql);
        $r["sukses"]= true;
    }
    echo json_encode($r);