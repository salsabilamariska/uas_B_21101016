<h3>Edit Data matakuliah <span id="txedit"></span></h3>
<div class="alert alert-primary" role="alert" id="pesan">
  Data berhasil di Perbaharui
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
    <div class="mb-3">
        <label class="form-label">SKS</label>
        <input type="text" class="form-control" id="txsks">
    </div>
    
    
    <div class="mb-3">
        <label class="form-label"></label>
        <button type="button" onclick="updatedata()" class="btn btn-primary">Simpan Data</button>
        <button type="button" onclick="ngakjadi()" class="btn btn-secondary"> Batal </button>
    </div>
</form>
<script>
    document.getElementById("pesan").style.display = "none";
function ngakjadi() {
  location.replace("http://localhost/webprog12/client/index.php?p=matkul")
}
</script>
<script src="pagematkulcaridata.js"></script>
<script src="pagematkulupdatedata.js"></script>