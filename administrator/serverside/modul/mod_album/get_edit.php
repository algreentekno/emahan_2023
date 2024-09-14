<?php
include "../../../config/koneksi_li.php";
$sql1= "SELECT * from album where id_album='$_POST[Id]'"; 
$hasil1 = mysqli_query($koneksi,$sql1);
$dataout=mysqli_fetch_array($hasil1);
?>
<input type="hidden" class="form-control" id="id_album1" value="<?php echo $dataout['id_album'];?>" required>
<div class="form-group">
    <label class="form-label" for="default-01">Judul Album</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="judul1" placeholder="" value="<?php echo $dataout['jdl_album'];?>">
    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Foto ALbum</label>
    <div class="col-sm-6 col-lg-4">
                                        <div class="gallery card card-bordered">
                                            <a class="gallery-image popup-image" href="../img_album/<?php echo $dataout['gbr_album'];?>">
                                                <img class="w-100 rounded-top" src="../img_album/<?php echo $dataout['gbr_album'];?>" alt="">
                                            </a>
                                            
                                        </div>
                                    </div><br>
    <div class="form-control-wrap">
    <input type="file" class="form-control" id="gambar1" value="">
    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Keterangan Foto</label>
    <div class="form-control-wrap">
    <input type="text" class="form-control" id="alt_gambar1" value="<?php echo $dataout['alt_gambar'];?>">
    </div>
</div>

