<h3>Tambah Data Matakuliah</h3>
<div class="alert alert-primary" role="alert" id="pesan">
  Data berhasil ditambahkan
</div>
<form>
    <div class="mb-3">
        <label class="form-label">KODEMK</label>
        <input type="text" class="form-control" id="txkodemk" placeholder="Isikan KODEMK">
    </div>
    <div class="mb-3">
        <label class="form-label">NAMAMK</label>
        <input type="text" class="form-control" id="txnamamk" placeholder="Isikan Nama  Matakuliah">
    </div>
    <div class="mb-3">
        <label class="form-label">SKS</label>
        <input type="text" class="form-control" id="txsks" placeholder="Isikan sks">
    </div>
    <
    <div class="mb-3">
        <label class="form-label"></label>
        <button type="button" onclick="storedata()" class="btn btn-primary">Simpan Data</button>
        <button type="button" onclick="ngakjadi()" class="btn btn-secondary"> Batal </button>
    </div>
</form>
<script>
    document.getElementById("pesan").style.display = "none";
function ngakjadi() {
  location.replace("http://localhost/webprog12/client/index.php?p=matkul")
}
</script>
<script src="pagematkulstoredata.js"></script>