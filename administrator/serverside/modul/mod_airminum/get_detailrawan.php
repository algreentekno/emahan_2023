<?php
include "../../../config/koneksi_li.php";
$sql1= "SELECT * from air_minum_rawan_air a inner join kota b on a.kode_kota=b.kode_kota inner join kecamatan c on a.kode_kec=c.kode_kec inner join kelurahan d on a.kode_kel=d.kode_kel where a.Id_air_rawan='$_POST[Id]'"; 
$hasil1 = mysqli_query($koneksi,$sql1);
$dataout=mysqli_fetch_array($hasil1);
?>
<div align="right"><h4>LOKASI RAWAN AIR</h4></div>
<div class="form-group">
    <label class="form-label" for="default-01">Nama Kabupaten</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="kode_kota" placeholder="" value="<?php echo $dataout['nama_kota'];?>" readonly>
    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Nama Kecamatan</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="kode_kota" placeholder="" value="<?php echo $dataout['nama_kecamatan'];?>" readonly>
    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Nama Kabupaten</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="kode_kota" placeholder="" value="<?php echo $dataout['nama_kelurahan'];?>" readonly>
    </div>
</div>