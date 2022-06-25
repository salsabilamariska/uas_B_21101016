<?php
    include_once("dbkoneksi.php");

    $r["sukses"]=false;
    if(isset($_POST["nim"])){
        $NIM=$_POST["nim"];
        $NAMA=$_POST["nama"];
        $JURUSAN=$_POST["jurusan"];
        $JK=$_POST["jkel"];
        $TGLLAHIR=$_POST["tgl"];

        $sql = "INSERT INTO mhs(nim, nama, jurusan, JK, TGLLAHIR) 
            VALUES('$NIM', '$NAMA', '$JURUSAN', '$JK', '$TGLLAHIR');";
        
        mysqli_query($cnn, $sql);
        $r["sukses"]= true;
    }
    echo json_encode($r);