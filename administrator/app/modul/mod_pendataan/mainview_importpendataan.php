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
                                            <p><div class="nk-block-head-sub" style="color: black;"><a class="back-to" href="dashboard"><em class="icon ni ni-arrow-left"></em><span>Dashboard</span></a><a class="back-to" href="#"><em class="icon ni ni-arrow-left"></em><span>Import Pendataan</span></a></div></p>
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
                                        <div class="col-12">
                                                        <div class="form-group" align='right'>
                                                            <button class="btn btn-md btn-success" style="color: black;" onclick="window.location='downloadtemp.php?file=templatertlh.xlsx';"><em class="icon ni ni-download"></em> Download Template</button>
                                                        </div>
                                                    </div>
                                        <form method="post" id="import_excel">

                                        <input type="hidden" class="form-control" name="rdm" id="rdm" value="<?php echo $randomtext;?>">
                                        <input type="hidden" class="form-control" id="rdm1" value="<?php echo sha1($randomtext);?>">
                                                            
                                                <div class="row g-4">
                                                <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="form-label" for="phone-no-1">Status Verifikasi</label>
                                                            <div class="form-control-wrap">
                                                            <select class="form-select" name="ket_verifikasi" id="ket_verifikasi">
                                                            <option value="">TERDATA</option>
                                                           
                                                                    </select> 
                                                                </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="form-label" for="phone-no-1">File Template</label>
                                                            <div class="form-control-wrap">
                                                                <input type="file" class="form-control" name="template" id="template">
                                                            </div>
                                                        </div>
                                                    </div>
                                                   
                                                    
                                                    
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <button type="submit" id="btn-form" class="btn btn-md btn-warning" style="color: black;"><em class="icon ni ni-save"></em> Import Data</button>
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
