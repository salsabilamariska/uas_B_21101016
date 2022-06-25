<h3>Edit Data Dosen <span id="txedit"></span></h3>
<div class="alert alert-primary" role="alert" id="pesan">
  Data berhasil di Perbaharui
</div>
<form>
    <div class="mb-3">
        <label class="form-label">NIP</label>
        <input type="text" class="form-control" id="txnip" disabled>
    </div>
    <div class="mb-3">
        <label class="form-label">Nama Dosen</label>
        <input type="text" class="form-control" id="txnama">
    </div>
    <div class="mb-3">
        <label class="form-label">TELP</label>
        <input type="text" class="form-control" id="txtelp">
    </div>
    <div class="mb-3">
        <label class="form-label">EMAIL</label>
        <input type="text" class="form-control" id="txemail">
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
  location.replace("http://localhost/webprog12/client/index.php?p=dsn")
}
</script>
<script src="pagedsncaridata.js"></script>
<script src="pagedsnupdatedata.js"></script>