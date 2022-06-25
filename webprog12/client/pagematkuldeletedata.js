function deletedata(){
    let kodemk = document.getElementById("txkodemk").value;
    
    let dta = "kodemk="+kodemk;
    const gh = new XMLHttpRequest();
    gh.open("POST","http://localhost/webprog12/server/dtmatkuldelete.php");
    gh.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    gh.send(dta);
 
    gh.onload = function(){ 
        const dta = JSON.parse(this.responseText);
        if(dta["sukses"]){
            document.getElementById("pesan").style.display = "block";
        }
        setTimeout(()=>{
            window.location.href="http://localhost/webprog12/client/index.php?p=matkul";
        },5000);
    }

}