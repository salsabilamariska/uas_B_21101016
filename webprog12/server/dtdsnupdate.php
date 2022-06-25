<?php
    include_once("dbkoneksi.php");
    
    $r["sukses"]=false;
    if(isset($_POST["nip"])){
        $NIP=$_POST["nip"];
        $NAMA=$_POST["nama"];
        $TELP=$_POST["telp"];
        $EMAIL=$_POST["email"];
       

        $sql = "UPDATE dsn SET 
            NAMA='".$NAMA."',
            TELP='".$TELP."',
            EMAIL='".$EMAIL."'
            WHERE NIP='".$NIP."'";
        
        mysqli_query($cnn, $sql);
        $r["sukses"]= true;
    }
    echo json_encode($r);