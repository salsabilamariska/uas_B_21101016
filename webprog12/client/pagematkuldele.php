<h3>Hapus data matakuliah <span id="txedit"></span></h3>
<div class="alert alert-primary" role="alert" id="pesan">
  Data berhasil di Hapus
</div>
<form>
    <div class="mb-3">
        <label class="form-label">KODEMK</label>
        <input type="text" class="form-control" id="txkodemk" disabled>
    </div>
    <div class="mb-3">
        <label class="form-label">NAMAMK</label>
        <input type="text" class="form-control" id="txnamamk">
    </div>

<div id="sembunyi">
    <div class="mb-3">
        <label class="form-label">SKS</label>
        <input type="text" class="form-control" id="txsks">
    </div>
</div>    
    <div class="mb-3">
        <label class="form-label"></label>
        <button type="button" onclick="deletedata()" class="btn btn-danger">Hapus Data</button>
        <button type="button" onclick="ngakjadi()" class="btn btn-secondary"> Batal </button>
    </div>
</form>

<script>
    document.getElementById("pesan").style.display = "none";
    document.getElementById("sembunyi").style.display = "none";
function ngakjadi() {
  location.replace("http://localhost/webprog12/client/index.php?p=matkul")
}
</script>
<script src="pagematkulcaridata.js"></script>
<script src="pagematkuldeletedata.js"></script>