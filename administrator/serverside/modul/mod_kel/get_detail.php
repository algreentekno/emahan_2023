<?php
include "../../../config/koneksi_li.php";
$sql1= "SELECT * from kelurahan where kode_kel='$_POST[Id]'"; 
$hasil1 = mysqli_query($koneksi,$sql1);
$dataout=mysqli_fetch_array($hasil1);
?>
</script>
<input type="hidden" class="form-control" id="id1" value="<?php echo $dataout['kode_kel'];?>" required>
<div class="form-group">
    <label class="form-label" for="default-01">Nama Kabupaten/Kota</label>
    <div class="form-control-wrap">
     
    <?php
                                    
                                    $sql= "SELECT * FROM kota  where kode_kota='$dataout[kode_kota]'"; 
                                    $hasil = mysqli_query($koneksi,$sql);
                                    $data = mysqli_fetch_array($hasil);
                                  ?>  

<input type="text" class="form-control" id="kode_kota1" placeholder="" value="<?php echo $data['nama_kota'];?>" readonly>
   
                                    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Nama Kecamatan</label>
    <div class="form-control-wrap">
     
    <?php
                                    
                                    $sql= "SELECT * FROM kecamatan  where kode_kec='$dataout[kode_kec]'"; 
                                    $hasil = mysqli_query($koneksi,$sql);
                                    $data = mysqli_fetch_array($hasil);
                                  ?>  

<input type="text" class="form-control" id="kode_kec1" placeholder="" value="<?php echo $data['nama_kecamatan'];?>" readonly>
   
                                    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Kode Kelurahan/Desa</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="kode_kel1" placeholder="" value="<?php echo $dataout['kode_kel'];?>" readonly>
    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Nama Kelurahan/Desa</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="nama_kelurahan1" placeholder="" value="<?php echo $dataout['nama_kelurahan'];?>" readonly>
    </div>
</div>

