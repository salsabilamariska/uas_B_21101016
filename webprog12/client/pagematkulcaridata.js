let qs = window.location.search;
let urlP = new URLSearchParams(qs);
let kodemk = urlP.get("kodemk");

let urltarget = new URL("http://localhost/webprog12/server/dtmatkulkode.php");
urltarget.searchParams.set("kodemk",kodemk);

const gh = new XMLHttpRequest();
gh.open("GET",urltarget);
gh.send();

gh.onload = function(){
    const dta = JSON.parse(this.responseText);
    console.log(dta["isi"]);
    for(i=0;i<dta["isi"].length;i++){
        document.getElementById("txkodemk").value = dta["isi"][i][0];
        document.getElementById("txnamamk").value = dta["isi"][i][1];
        document.getElementById("txtsks").value = dta["isi"][i][2];
       
    }

}