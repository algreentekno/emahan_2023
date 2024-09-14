<div class="nk-content nk-content-fluid">
                <div class="container-xl wide-xl">
                    <div class="nk-content-inner">
                        <div class="nk-content-body">
                            <div class="nk-block-head nk-block-head-sm">
                                <div class="nk-block-between">
                                    <div class="nk-block-head-content">
                                        <div class="nk-block-des text-soft">
                                            <p><div class="nk-block-head-sub" style="color: black;"><a class="back-to" href="dashboard"><em class="icon ni ni-arrow-left"></em><span>Dashboard</span></a><a class="back-to" href="#"><em class="icon ni ni-arrow-left"></em><span>Upload Form Inputan</span></a></div></p>
                                        </div>
                                    </div><!-- .nk-block-head-content -->
                                   <!-- .nk-block-head-content -->
                                </div><!-- .nk-block-between -->
                            </div><!-- .nk-block-head -->
                            <div class="nk-block">
                                <div class="row g-gs">
                                <!-- ------------------------------------------------------------------------------- -->    
                                    
                                    
                                <div class="nk-block nk-block-lg">
                                    
                                    <div class="card card-bordered card-preview">
                                        <div class="card-inner">
                                      
                                                 <div class="row g-4">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="form-label" for="full-name-1">Nama Kabupaten</label>
                                                            <div class="form-control-wrap">
        <select class="form-select js-select2"  id="kode_kota" data-search="on">
    <option value="">PILIH KABUPATEN</option>
    <?php
    $tampil=mysqli_query($koneksi,"SELECT * FROM kota where kode_kota='$_SESSION[kodekota]' order by Id");
    while ($jml=mysqli_fetch_array($tampil)){
    ?>
    <option value="<?php echo $jml['kode_kota'];?>"><?php echo $jml['nama_kota'];?></option>
    <?php
    }
    ?>   
    
      
</select> 
                             
</select> 
</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="form-label" for="email-address-1">Nama Kecamatan</label>
                                                            <div class="form-control-wrap">
    <select class="form-select js-select2"  id="kode_kec" data-search="on">
    <option value="">PILIH KECAMATAN</option>
    
      
</select> 
                               </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div id="kode_kel"></div>
                                                    </div>
                                                    <!--<div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="phone-no-1">Nama Kelurahan</label>
                                                            <div class="form-control-wrap">
                                                            
<select class="form-select js-select2"  id="kode_kel" data-search="on">
    <option value="">PILIH KELURAHAN</option>
    
      
</select> 
                                                        </div>
                                                        </div>
                                                    </div>-->
                                                   
                                                    
                                                    
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <button type="button" id="export" class="btn btn-md btn-warning" style="color: black;"><em class="icon ni ni-download"></em> Download Data</button>
                                                        </div>
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
<!-- ------------------------------------------------------------------------------- -->

<!-- ------------------------------------------------------------------ -->

<!-- --------------------------------------------------------------- -->
