<?php
include "../../../config/koneksi_li.php";
$sql1= "SELECT * from download where id_download='$_POST[Id]'"; 
$hasil1 = mysqli_query($koneksi,$sql1);
$dataout=mysqli_fetch_array($hasil1);
?>
<input type="hidden" class="form-control" id="id_download1" value="<?php echo $dataout['id_download'];?>" required>
<div class="form-group">
    <label class="form-label" for="default-01">Judul Data</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="judul1" placeholder="" value="<?php echo $dataout['judul'];?>">
    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Nama Kategori Download</label>
    <div class="form-control-wrap">
   
    <?php
                                    
                                    $sql= "SELECT * FROM kategori_download  where id_kategoridownload='$dataout[id_kategoridownload]'"; 
                                    $hasil = mysqli_query($koneksi,$sql);
                                    $data = mysqli_fetch_array($hasil);
                                  ?>  

<input type="text" class="form-control" id="id_kategoridownload1" placeholder="" value="<?php echo $data['nama_kategori'];?>" readonly>
   
                                    
                                    
    
                                    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">File</label>
    <div class="form-control-wrap">
    <a href="#" class="btn btn-primary" onclick="window.location='downloadfile.php?file=<?php echo $dataout['nama_file'];?>';"><em class="icon ni ni-download"></em><span>Download Data</span> </a>
    </div>
</div>
