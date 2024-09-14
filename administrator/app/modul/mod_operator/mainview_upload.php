<?php
 function generatestring($panjang){
   
    $karakter='0123456789abcdefghijklmnopqrstuvwxyz';
    $string='';
    for($i=0;$i<$panjang;$i++){
    $pos=rand(0, strlen($karakter)-1);
    $string .= $karakter[$pos];
    }
    return $string;
}
 $randomtext=generatestring(7);
 ?>
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
                                        <form method="post" id="import_excel">

                                        <input type="hidden" class="form-control" name="rdm" id="rdm" value="<?php echo $randomtext;?>">
                                        <input type="hidden" class="form-control" name="kab" id="kab" value="<?php echo $_SESSION['kodekota'];?>">
                                                            
                                                <div class="row g-4">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="full-name-1">Jenis Data</label>
                                                            <div class="form-control-wrap">
                                                            <select class="form-select js-select2" name="jenisdata" id="jenisdata" data-search="on">
    <option value=""></option>
    <option value="1">SPALD</option>
    <option value="2">IPLT</option>
    <option value="3">SPAM REGIONAL</option>
    <option value="4">SPAM KABUPATEN/KOTA</option>
    <option value="5">SPAM IKK</option>
    <option value="6">SPAM PERDESAAN</option>
    <option value="7">TPA</option>
    <option value="8">TPST-TPS3R</option>
    <option value="9">TPS</option>
    <option value="10">KUMUH < 10 Ha</option>
    <option value="11">KUMUH > 10 Ha</option>
    <option value="12">PERUMAHAN</option>
    <option value="13">RTLH</option>
      
</select> </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="email-address-1">Keterangan</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" name="keterangan" id="keterangan">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="phone-no-1">File Template</label>
                                                            <div class="form-control-wrap">
                                                                <input type="file" class="form-control" name="template" id="template">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="pay-amount-1">Berita Acara</label>
                                                            <div class="form-control-wrap">
                                                                <input type="file" class="form-control" name="beritaacara" id="beritaacara">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <button type="submit" id="btn-form" class="btn btn-md btn-warning" style="color: black;"><em class="icon ni ni-save"></em> Simpan Data</button>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="pesan " id="pesan"></div>
                <div class="sebentar" id="sebentar"></div>
                                                    <div id="process" style="display:none;">
                    <div class="progress mt-3">
                      <div class="progress-bar progress-bar-striped" role="progressbar"  aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                                                </div>
                                        </form>
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
