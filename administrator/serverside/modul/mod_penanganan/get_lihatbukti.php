<?php
include "../../../config/koneksi_li.php";
include "../../../setting.php";
$sql1= "SELECT * from rtlh where Id_rtlh='$_POST[Id]'"; 
$hasil1 = mysqli_query($koneksi,$sql1);
$dataout=mysqli_fetch_array($hasil1);
?>
<div class="form-group">
    <label class="form-label" for="default-01">Nomor. KTP</label>
    <div class="form-control-wrap">
    <input type="text" class="form-control" id="no_ktp" value="<?php echo $dataout['no_ktp'];?>" readonly >
   
                                                                 </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Nama Kepala Keluarga</label>
    <div class="form-control-wrap">
    <input type="text" class="form-control" id="nama_kepala_keluarga" value="<?php echo $dataout['nama_kk'];?>" readonly>
   
                                                                 </div>
</div>

<div class="form-group">
    <label class="form-label" for="default-01">Upload Saldo Rekening</label>
    <div class="form-control-wrap">
    <embed type="application/pdf" src="<?php echo $urlmain;?>foto_tempat/<?php echo $dataout['bukti1'];?>" width="100%" height="420"></embed>     

</div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Upload Bukti Pembelian Material</label>
    <div class="form-control-wrap">
    <embed type="application/pdf" src="<?php echo $urlmain;?>foto_tempat/<?php echo $dataout['bukti2'];?>" width="100%" height="420"></embed>     


</div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Upload Foto Renovasi Rumah 100%</label>
    <div class="form-control-wrap">
        
    <embed type="application/pdf" src="<?php echo $urlmain;?>foto_tempat/<?php echo $dataout['bukti3'];?>" width="100%" height="420"></embed>     

</div>
</div>


