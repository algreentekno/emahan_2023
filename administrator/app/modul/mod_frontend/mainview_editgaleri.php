<?php
include "../../../config/koneksi_li.php";
$key=$_GET['key'];
$sql11= "SELECT * from galeri_detail where sha1(gbr_galeri)='$key'"; 
$hasil11 = mysqli_query($koneksi,$sql11);
$dataout1=mysqli_fetch_array($hasil11);
?>
<div class="nk-content nk-content-fluid">
                <div class="container-xl wide-xl">
                    <div class="nk-content-inner">
                        <div class="nk-content-body">
                            <div class="nk-block-head nk-block-head-sm">
                                <div class="nk-block-between">
                                    <div class="nk-block-head-content">
                                        <div class="nk-block-des text-soft">
                                            <p><div class="nk-block-head-sub" style="color: black;"><a class="back-to" href="dashboard"><em class="icon ni ni-arrow-left"></em><span>Dashboard</span></a><a class="back-to" href="galeri"><em class="icon ni ni-arrow-left"></em><span>Galeri Kegiatan</span></a></div></p>
                                        </div>
                                    </div><!-- .nk-block-head-content -->
                                   
                                </div><!-- .nk-block-between -->
                            </div><!-- .nk-block-head -->
                            <div class="nk-block">
                                <div class="row g-gs">
                                <!-- ------------------------------------------------------------------------------- -->    
                                    
                                    
                                <div class="nk-block nk-block-lg">
                                    
                                    <div class="card card-bordered card-preview">
                                        <div class="card-inner">
                                       
<input type="hidden" class="form-control" id="id_galeridetail2" value="<?php echo $dataout1['id_galeridetail'];?>">
                
                    <div class="form-group">
    <label class="form-label" for="default-01">Rubah Foto Galeri</label>
    <div class="col-sm-6 col-lg-4">
                                        <div class="gallery card card-bordered">
                                                <img class="w-100 rounded-top" src="../img_galeri/<?php echo $dataout1['gbr_galeri'];?>" alt="">
                                            
                                        </div>
                                    </div><br>
    <div class="form-control-wrap">
    <input type="file" class="form-control" id="gambar2" value="">
    </div>
</div>
<span class="sub-text"><button class="btn btn-success" id="editdata"><em class="icon ni ni-save"></em> Simpan</button> <button class="btn btn-info" onClick="window.location='galeri';"><em class="icon ni ni-loader"></em> Kembali</button></span>
            


                                        </div>
                                    </div><!-- .card-preview -->
                                </div> <!-- nk-block -->
                                  
                                    
                                <!-- ------------------------------------------------------------------------------- -->    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
