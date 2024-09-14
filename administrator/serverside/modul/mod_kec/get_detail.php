<?php
include "../../../config/koneksi_li.php";
$sql1= "SELECT * from kecamatan where kode_kec='$_POST[Id]'"; 
$hasil1 = mysqli_query($koneksi,$sql1);
$dataout=mysqli_fetch_array($hasil1);
?>
<input type="hidden" class="form-control" id="id1" value="<?php echo $dataout['kode_kec'];?>" required>
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
    <label class="form-label" for="default-01">Kode Kecamatan</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="kode_kec1" placeholder="" value="<?php echo $dataout['kode_kec'];?>" readonly>
    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Nama Kecamatan</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="nama_kecamatan1" placeholder="" value="<?php echo $dataout['nama_kecamatan'];?>" readonly>
    </div>
</div>

