function updatedata(){
    let kodemk = document.getElementById("txkodemk").value ;
    let namamk = document.getElementById("txnamamk").value ;
    let sks = document.getElementById("txsks").value ;
   
    let dta = "&kodemk="+kodemk+"&namamk="+namamk+"&sks="+sks;
    const gh = new XMLHttpRequest();
    gh.open("POST", "http://localhost/webprog12/server/dtmatkulstore.php");
    gh.setRequestHeader("content-type", "application/x-www-form-urlencoded");
    gh.send(dta);

    gh.onload = function(){
        const dta = JSON.parse(this.responseText);
        if(dta["sukses"]){
            document.getElementById("pesan").style.display = "block";
        }
    }

}