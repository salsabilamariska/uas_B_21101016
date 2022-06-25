let qs = window.location.search;
let urlP = new URLSearchParams(qs);
let nip = urlP.get("nip");

let urltarget = new URL("http://localhost/webprog12/server/dtdsnnip.php");
urltarget.searchParams.set("nip",nip);

const gh = new XMLHttpRequest();
gh.open("GET",urltarget);
gh.send();

gh.onload = function(){
    const dta = JSON.parse(this.responseText);
    console.log(dta["isi"]);
    for(i=0;i<dta["isi"].length;i++){
        document.getElementById("txnip").value = dta["isi"][i][0];
        document.getElementById("txnama").value = dta["isi"][i][1];
        document.getElementById("txtelp").value = dta["isi"][i][2];
        document.getElementById("txemail").value = dta["isi"][i][3];  
    }

}