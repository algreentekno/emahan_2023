<?php
include "../../../config/koneksi_li.php";
$sql1= "SELECT * from air_minum_kelembagaan a inner join kota b on a.kode_kota=b.kode_kota where a.Id_air_kelembagaan='$_POST[Id]'"; 
$hasil1 = mysqli_query($koneksi,$sql1);
$dataout=mysqli_fetch_array($hasil1);
?>
<input type="hidden" class="form-control" id="id_kelembagaan1" value="<?php echo $dataout['Id_air_kelembagaan'];?>" required>
<div class="form-group">
    <label class="form-label" for="default-01">Nama Kabupaten</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="kode_kota" placeholder="" value="<?php echo $dataout['nama_kota'];?>" readonly>
    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Jenis Data</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="jenis_data1" placeholder="" value="<?php echo $dataout['jenis_data'];?>">
    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Nomor Dan Tanggal</label>
    <div class="form-control-wrap">
    <input type="text" class="form-control" id="nomor_tanggal1" value="<?php echo $dataout['nomor_tanggal'];?>">
    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Tahun</label>
    <div class="form-control-wrap">
    <input type="text" class="form-control" id="tahun_data1" value="<?php echo $dataout['tahun_data'];?>" minlength="4" maxlength="4" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">File</label>
    <small>Apabila file ingin dirubah silahkan upload file baru</small>
    <div class="form-control-wrap">
    <input type="file" class="form-control" id="file1" value="">
    </div>
</div>


