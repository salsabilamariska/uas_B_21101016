function storedata(){
    let nip = document.getElementById("txnip").value;
    let nama = document.getElementById("txnama").value;
    let telp = document.getElementById("txtelp").value;
    let email = document.getElementById("txemail").value;
    

    let dta = "nip="+nip+"&nama="+nama+"&telp="+telp+"&email="+email;
    const gh = new XMLHttpRequest();
    gh.open("POST","http://localhost/webprog12/server/dtdsnstore.php");
    gh.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    gh.send(dta);

    gh.onload = function(){
        const dta = JSON.parse(this.responseText);
        if(dta["sukses"]){
            document.getElementById("pesan").style.display = "block";
        }
    }

}